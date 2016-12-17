<!DOCTYPE html>
<a href='../products.php '>List Page</a ></br>

<div align="center">
	<h2>Singularity</h2>
</div>

<h3>Description:</h3>

<li><p>A maverick astrophysicist, a rookie secret agent, and an uncanny consultant join forces in this technological thriller to stop the capture of a submicroscopic black hole whose power will be harnessed to transform—or end—the world. More than a hundred years earlier, the most violent cosmic collision ever recorded flattened a remote area in Tunguska, Siberia. Now, astrophysicist Jack Adler, conducting research at the site, discovers a tiny black hole at the center of the mysterious event, and alarmingly, the object has been burrowing its way through the Earth's core ever since. Meanwhile, secret agent Marianna Bonaventure enlists the help of Jonathan Knox, an analyst with an uncanny ability to find hidden relationships between seemingly disparate people and events, to search for three missing scientists and infiltrate the floating headquarters of a Russian industrialist. From the trackless wastes of Siberia and the rooftops of Manhattan to the stygian depths of the North Atlantic, this meticulously researched tale looks at global power struggles, cosmology, and human relationships in rich detail.</p></li>


<div align="center">
	<br>
	<img src = "image/singularity.jpg">
</div>

<?php

	if(!isset($_COOKIE['SINGLE'])){
		$info = array(time(), "1");
		setcookie('SINGLE', serialize($info), time()+5*24*60*60);
	}
	else{
		$v = unserialize($_COOKIE['SINGLE']);
		$v[0] = time();
		$v[1]++;
		setcookie('SINGLE', serialize($v));
	}

?>

<?php
	require_once('../final-project/DB_individual.php');
 	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 	$product_id = "40004";
 	$SQL = "UPDATE market_product SET visited = visited + 1 WHERE product_id='$product_id'";
 	mysqli_query($conn, $SQL);
?>

<div align="center">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.js"></script>
        <div id="RateBlock" style="width:500px;">
                <div id="setRate">
                        <p>Please rate this product:</p>
                        <div id="rateYo" style="padding-left:40px;"></div><br>
                        <textarea rows="4" cols="50" id="rate_input"></textarea><br>
                        <button id="rate_submit">Submit</button>
                </div>
                <div id="setRateThanks" style="display:none;">
                        Thanks for submiting the review!
                </div>
        </div>
        <script>
                var rate_star;
                var rate_comment;
                var product_id;
                product_id = "40004";
                $( "#rate_submit" ).click(function() {
                $( "#setRate" ).css("display", "none");
                $( "#setRateThanks" ).css("display", "block");
                rate_comment = $("#rate_input").val();
                $.post("http://www.starrybookstore.com/final-project/setRate.php", {rate_star: rate_star, rate_comment:rate_comment, product_id:product_id}, function(result){
                        });
                });


                $("#rateYo").rateYo({
                        starWidth: "40px",
                        fullStar: true
                });

                $("#rateYo").rateYo()
                        .on("rateyo.set", function (e, data) {
                        rate_star = data.rating;
                });
        </script>
</div>
