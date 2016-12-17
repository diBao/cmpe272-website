<!DOCTYPE html>
<a href='../products.php '>List Page</a ></br>



<div align="center">
	<h2>S</h2>
</div>

<h3>Description:</h3>

<li><p>The chronicle of two readers finding each other, and their deadly struggle with forces beyond their understanding--all within the margins of a book conceived by Star Wars: The Force Awakens director J.J. Abrams and written by award-winning novelist Doug Dorst.</p></li>

<li><p>The book: Ship of Theseus, the final novel by a prolific but enigmatic writer named V.M. Straka, in which a man with no past is shanghaied onto a strange ship with a monstrous crew and launched onto a disorienting and perilous journey.</p></li>

<li><p>The writer: Straka, the incendiary and secretive subject of one of the world's greatest mysteries, a revolutionary about whom the world knows nothing apart from the words he wrote and the rumors that swirl around him.</p></li>

<li><p>The readers: Jennifer and Eric, a college senior and a disgraced grad student, both facing crucial decisions about who they are, who they might become, and how much they're willing to trust another person with their passions, hurts, and fears.</p></li>

<li><p>S. contains 22 inserts and will be delivered in a sealed slipcase.</p></li>


<div align="center">
	<br>
	<img src = "image/S.jpg">
</div>

<?php
	//echo "<a href='S.php'>More Info about S</a>";
	if(!isset($_COOKIE['S'])){
		$info = array(time(), "1");
		setcookie('S', serialize($info), time()+5*24*60*60);
	}
	else{
		$v = unserialize($_COOKIE['S']);
		$v[0] = time();
		$v[1]++;
		setcookie('S', serialize($v));
	}

?>

<?php
	require_once('../final-project/DB_individual.php');
 	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 	$product_id = "40001";
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
                product_id = "40001";
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
