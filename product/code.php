<!DOCTYPE html>
<a href='../products.php '>List Page</a ></br>

<div align="center">
	<h2>Davinci Code</h2>
</div>

<h3>Description:</h3>

<li><p>As millions of readers around the globe have already discovered, The Da Vinci Code is a reading experience unlike any other. Simultaneously lightning-paced, intelligent, and intricately layered with remarkable research and detail, Dan Brown's novel is a thrilling masterpiece—from its opening pages to its stunning conclusion.</p></li>

<li><p>A murder in the silent after-hour halls of the Louvre museum reveals a sinister plot to uncover a secret that has been protected by a clandestine society since the days of Christ. The victim is a high-ranking agent of this ancient society who, in the moments before his death, manages to leave gruesome clues at the scene that only his granddaughter, noted cryptographer Sophie Neveu, and Robert Langdon, a famed symbologist, can untangle. The duo become both suspects and detectives searching for not only Neveu's grandfather's murderer but also the stunning secret of the ages he was charged to protect. Mere steps ahead of the authorities and the deadly competition, the mystery leads Neveu and Langdon on a breathless flight through France, England, and history itself. Brown (Angels and Demons) has created a page-turning thriller that also provides an amazing interpretation of Western history. Brown's hero and heroine embark on a lofty and intriguing exploration of some of Western culture's greatest mysteries--from the nature of the Mona Lisa's smile to the secret of the Holy Grail. Though some will quibble with the veracity of Brown's conjectures, therein lies the fun. The Da Vinci Code is an enthralling read that provides rich food for thought</p></li>


<div align="center">
	<br>
	<img src = "image/Davinci_code.jpg">
</div>

<?php
	if(!isset($_COOKIE['CODE'])){
		$info = array(time(), "1");
		setcookie('CODE', serialize($info), time()+5*24*60*60);
	}
	else{
		$v = unserialize($_COOKIE['CODE']);
		$v[0] = time();
		$v[1]++;
		setcookie('CODE', serialize($v));
	}

?>

<?php
	require_once('../final-project/DB_individual.php');
 	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 	$product_id = "40003";
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
                product_id = "40003";
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
