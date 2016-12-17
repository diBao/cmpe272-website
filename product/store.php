<!DOCTYPE html>
<a href='../products.php '>List Page</a ></br>

<div align="center">
	<h2>Dispel Melancholy Grocery Store</h2>
</div>

<h3>Description:</h3>

<li><p>The Grocery Store Which Relieves Anxiety (Hardcover) tells the story of a grocery store on a quiet street. As people wrote down their troubles on a piece of paper and dropped it into the letter box in front of the store's rolling door, they would receive an answer in the milk box behind the store the next day. With her terminally ill boyfriend, a young girl name Jingzi is wandering between love and her dreams. Kelang has left home to pursue a dream in music but reality has been very harsh; the young Haojie has faced great changes within his family and is struggling with the uncertainty of his families future. Confused,they wrote down their problems and dropped them in the letter box of the grocery store and some time later, fantastic and intriguing things begin to occur. How does an accidental encounter lead to a completely different life?</p></li>


<div align="center">
	<br>
	<img src = "image/qijidezahuodian.jpg">
</div>

<?php

	if(!isset($_COOKIE['STORE'])){
		$info = array(time(), "1");
		setcookie('STORE', serialize($info), time()+5*24*60*60);
	}
	else{
		$v = unserialize($_COOKIE['STORE']);
		$v[0] = time();
		$v[1]++;
		setcookie('STORE', serialize($v));
	}
?>

<?php
	require_once('../final-project/DB_individual.php');
 	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 	$product_id = "40008";
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
                product_id = "40008";
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
