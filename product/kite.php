<!DOCTYPE html>
<a href='../products.php '>List Page</a ></br>

<div align="center">
	<h2>Kite Runner</h2>
</div>

<h3>Description:</h3>

<li><p>The unforgettable, heartbreaking story of the unlikely friendship between a wealthy boy and the son of his father's servant, The Kite Runner is a beautifully crafted novel set in a country that is in the process of being destroyed. It is about the power of reading, the price of betrayal, and the possibility of redemption; and an exploration of the power of fathers over sons—their love, their sacrifices, their lies.
</p></li>

<li><p>A sweeping story of family, love, and friendship told against the devastating backdrop of the history of Afghanistan over the last thirty years, The Kite Runner is an unusual and powerful novel that has become a beloved, one-of-a-kind classic.</p></li>


<div align="center">
	<br>
	<img src = "image/kite runner.jpg">
</div>

<?php

	if(!isset($_COOKIE['KITE'])){
		$info = array(time(), "1");
		setcookie('KITE', serialize($info), time()+5*24*60*60);
	}
	else{
		$v = unserialize($_COOKIE['KITE']);
		$v[0] = time();
		$v[1]++;
		setcookie('KITE', serialize($v));
	}

?>
<?php
	require_once('../final-project/DB_individual.php');
 	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 	$product_id = "40007";
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
                product_id = "40007";
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
