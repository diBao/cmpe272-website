<!DOCTYPE html>
<a href='../products.php '>List Page</a ></br>

<div align="center">
	<h2>Turn Left, Turn Right</h2>
</div>

<h3>Description:</h3>

<li><p>She is used to turning left, while he is used to turning right. And they have never met. Like most people in the city, they may never know each other, though they live so close to each other. However, life is full of coincidences and two parallel lines may join one day. When that day comes, winter is gloomy no more, and their lonely hearts are warmed. Whereas, life is also full of accidents, like the kite in your hands that can suddenly slip away from your grasp. The city is like a puzzle, they cannot hear the calling or find the right direction. Though they are so near,yet they also seem so far apart. She is still used to turning left, and he is still used to turning right. However, this time their steps find the direction of love and spring finally arrives.</p></li>


<div align="center">
	<br>
	<img src = "image/jimi.jpg">
</div>

<?php

	if(!isset($_COOKIE['JIMI'])){
		$info = array(time(), "1");
		setcookie('JIMI', serialize($info), time()+5*24*60*60);
	}
	else{
		$v = unserialize($_COOKIE['JIMI']);
		$v[0] = time();
		$v[1]++;
		setcookie('JIMI', serialize($v));
	}

?>

<?php
	require_once('../final-project/DB_individual.php');
 	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 	$product_id = "40005";
 	$SQL = "UPDATE market_produ ct SET visited = visited + 1 WHERE product_id='$product_id'";
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
                product_id = "40005";
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
