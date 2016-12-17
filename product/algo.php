<!DOCTYPE html>
<a href='../products.php '>List Page</a ></br>

<div align="center">
	<h2>Algorithm Introduction</h2>
</div>

<h3>Description:</h3>

<li><p>Some books on algorithms are rigorous but incomplete; others cover masses of material but lack rigor. Introduction to Algorithms uniquely combines rigor and comprehensiveness. The book covers a broad range of algorithms in depth, yet makes their design and analysis accessible to all levels of readers. Each chapter is relatively self-contained and can be used as a unit of study. The algorithms are described in English and in a pseudocode designed to be readable by anyone who has done a little programming. The explanations have been kept elementary without sacrificing depth of coverage or mathematical rigor.</p></li>

<li><p>The first edition became a widely used text in universities worldwide as well as the standard reference for professionals. The second edition featured new chapters on the role of algorithms, probabilistic analysis and randomized algorithms, and linear programming. The third edition has been revised and updated throughout. It includes two completely new chapters, on van Emde Boas trees and multithreaded algorithms, substantial additions to the chapter on recurrence (now called "Divide-and-Conquer"), and an appendix on matrices. It features improved treatment of dynamic programming and greedy algorithms and a new notion of edge-based flow in the material on flow networks. Many new exercises and problems have been added for this edition. As of the third edition, this textbook is published exclusively by the MIT Press.</p></li>


<div align="center">
	<br>
	<img src = "image/algorithm.jpg">
</div>

<?php

	if(!isset($_COOKIE['ALGO'])){
		$info = array(time(), "1");
		setcookie('ALGO', serialize($info), time()+5*24*60*60);
	}
	else{
		$v = unserialize($_COOKIE['ALGO']);
		$v[0] = time();
		$v[1]++;
		setcookie('ALGO', serialize($v));
	}

?>
<?php
	require_once('../final-project/DB_individual.php');
 	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 	$product_id = "40010";
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
		product_id = "40010";
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
