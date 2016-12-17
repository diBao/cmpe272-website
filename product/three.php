<!DOCTYPE html>
<a href='../products.php '>List Page</a ></br>

<div align="center">
	<h2>Three-Body Problem</h2>
</div>

<h3>Description:</h3>

<li><p>The Three-Body Problem is the first chance for English-speaking readers to experience this multiple award winning phenomenon from China's most beloved science fiction author, Liu Cixin.</p></li>

<li><p>Set against the backdrop of China's Cultural Revolution, a secret military project sends signals into space to establish contact with aliens. An alien civilization on the brink of destruction captures the signal and plans to invade Earth. Meanwhile, on Earth, different camps start forming, planning to either welcome the superior beings and help them take over a world seen as corrupt, or to fight against the invasion. The result is a science fiction masterpiece of enormous scope and vision.</p></li>


<div align="center">
	<br>
	<img src = "image/santi.jpg">
</div>

<?php

	if(!isset($_COOKIE['THREE'])){
		setcookie('THREE', serialize($info), time()+5*24*60*60);
	}
	else{
		$v = unserialize($_COOKIE['THREE']);
		$v[0] = time();
		$v[1]++;
		setcookie('THREE', serialize($v));
	}

?>

<?php
	require_once('../final-project/DB_individual.php');
 	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 	$product_id = "40006";
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
                product_id = "40006";
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
