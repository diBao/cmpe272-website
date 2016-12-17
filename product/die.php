<!DOCTYPE html>
<a href='../products.php '>List Page</a ></br>

<div align="center">
	<h2>Die Satisfied</h2>
</div>

<h3>Description:</h3>

<li><p>This book is a collection of Wang Shuo's novellas, a kind of Wang Shuo's Collected Works, which includes four novellas such as Die Satisfied, The Trouble Shooters and Not Serious at All. Wang Shuo's novellas are easy to read and can give readers pleasant sensation of reading. He is a great storyteller, especially good at writing dialogues. He is an authentic big talker from Beijing. These works write out the changes of the city of Beijing and express his sadness and helplessness on the history and culture.</p></li>

<div align="center">
	<br>
	<img src = "image/gbyjs.jpg">
</div>

<?php

	if(!isset($_COOKIE['DIE'])){
		$info = array(time(), "1");
		setcookie('DIE', serialize($info), time()+5*24*60*60);
	}
	else{
		$v = unserialize($_COOKIE['DIE']);
		$v[0] = time();
		$v[1]++;
		setcookie('DIE', serialize($v));
	}

?>

<?php
	require_once('../final-project/DB_individual.php');
 	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 	$product_id = "40002";
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
                product_id = "40002";
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
