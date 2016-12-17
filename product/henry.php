<!DOCTYPE html>
<a href='../products.php '>List Page</a ></br>

<div align="center">
	<h2>The O. Henry Short Story Collection</h2>
</div>

<h3>Description:</h3>

<li><p>The O. Henry Short Story Collection - Volume I - Including The Gift Of The Magi and The Ransom Of Red Chief: The Last Of The Troubadours - The Sleuths - Witches' Loaves - The Pride Of The Cities - Holding Up A Train - Ulysses And The Dogman - The Champion Of The Weather - Makes The Whole World Kin - At Arms With Morpheus - A Ghost Of A Chance - Jimmy Hayes And Muriel - The Door Of Unrest - The Duplicity Of Hargraves - Let Me Feel Your Pulse - October And June - The Church With An Overshot-Wheel - New York By Camp Fire Light - The Adventures Of Shamrock Jolnes - The Lady Higher Up - The Greater Coney - Law And Order - Transformation Of Martin Burney - The Caliph And The Cad - The Diamond Of Kali - The Day We Celebrate -</p></li>


<div align="center">
	<br>
	<img src = "image/The Complete Works of O'Henry.jpg">
</div>

<?php

	if(!isset($_COOKIE['HENRY'])){
		$info = array(time(), "1");
		setcookie('HENRY',  serialize($info), time()+5*24*60*60);
	}
	else{
		$v = unserialize($_COOKIE['HENRY']);
		$v[0] = time();
		$v[1]++;
		setcookie('HENRY', serialize($v));
	}

?>

<?php
	require_once('../final-project/DB_individual.php');
 	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 	$product_id = "40009";
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
                product_id = "40009";
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
