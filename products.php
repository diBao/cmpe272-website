<!DOCTYPE html>
<html>
<body>
<a href='../ '>Home</a ></br>

<?php
	require_once('final-project/DB_individual.php');
 	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 	$product_id = "";
 	$SQL = "UPDATE market_product SET visited = visited + 1 WHERE product_id='$product_id'";
 	mysqli_query($conn, $SQL);
?>

<div align="center">
	<h1>Product List</h1>
	<a href="product/viewFive.php">View last five previously visited products</a>
	<br>
	<br>
	<a href="product/mostFive.php">View five most visited products</a></br>
	<br>

</div>

<div align="center">
	<p>S</p>
	<input type ="button" onclick="javascript:location.href='product/S.php'" value="More Info about S"></input>
	<br>
	<img src = "product/image/S.jpg">
</div>

<br>
<br>

<div align="center">
	<p>Die Satisfied</p>
	<input type ="button" onclick="javascript:location.href='product/die.php'" value="More Info about Die Satisfied"></input>
	<br>
	<img src = "product/image/gbyjs.jpg">
</div>

<br>
<br>
<div align="center">
	<p>Davinci Code</p>
	<input type ="button" onclick="javascript:location.href='product/code.php'" value="More Info about Davinci Code"></input>
	<br>
	<img src = "product/image/Davinci_code.jpg">
</div>

<br>
<br>
<div align="center">
	<p>Singularity</p>
	<input type ="button" onclick="javascript:location.href='product/single.php'" value="More Info about Singularity"></input>
	<br>
	<img src = "product/image/singularity.jpg">
</div>
<br>
<br>

<div align="center">
	<p>Turn Left, Turn Right</p>
	<input type ="button" onclick="javascript:location.href='product/jimi.php'" value="More Info about Turn Left, Turn Right"></input>
	<br>
	<img src = "product/image/jimi.jpg">
</div>
<br>
<br>

<div align="center">
	<p>The Three-Body Problem</p>
	<input type ="button" onclick="javascript:location.href='product/three.php'" value="More Info about The Three-Body Problem"></input>
	<br>
	<img src = "product/image/santi.jpg">
</div>

<br>
<br>
<div align="center">
	<p>Kite Runner</p>
	<input type ="button" onclick="javascript:location.href='product/kite.php'" value="More Info about Kite Runner"></input>
	<br>
	<img src = "product/image/kite runner.jpg">
</div>

<br>
<br>
<div align="center">
	<p>Dispel Melancholy Grocery Store</p>
	<input type ="button" onclick="javascript:location.href='product/store.php'" value="More Info about Dispel Melancholy Grocery Store"></input>
	<br>
	<img src = "product/image/qijidezahuodian.jpg">
</div>
<br>
<br>

<div align="center">
	<p>The O. Henry Short Story Collection</p>
	<input type ="button" onclick="javascript:location.href='product/henry.php'" value="More Info about The O. Henry Short Story Collection"></input>
	<br>
	<img src = "product/image/The Complete Works of O'Henry.jpg">
</div>

<br>
<br>
<div align="center">
	<p>Algorithm Introduction</p>
	<input type ="button" onclick="javascript:location.href='product/algo.php'" value="More Info about Algorithm Introduction"></input>
	<br>
	<img src = "product/image/algorithm.jpg">
</div>

<br>
<br>
</body>
</html>
