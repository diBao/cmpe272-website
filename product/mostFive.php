<!DOCTYPE html>
<a href='../products.php '>List Page</a ></br>

<div align="center">
	<h1>Five Most Visited Products</h1>
</div>

<div align="center">

	<?php
		$index = array(
	    "S" => "S",
	    "DIE" => "Die Satisfied",
	    "CODE" => "Davinci Code",
	    "SINGLE" => "Singularity",
	    "JIMI" => "Turn Left, Turn Right",
	    "THREE" => "The Three-Body Problem",
	    "KITE" => "Kite Runner",
	    "STORE" => "Dispel Melancholy Grocery Store",
	    "HENRY" => "The O. Henry Short Story Collection",
	    "ALGO" => "Algorithm Introduction",
		);

		function cho($k){
			if($k == 'S')
				echo "<a href='S.php'>More Info about S</a>".'<br><br>';	
			if($k == 'DIE')
				echo "<a href='die.php'>More Info about Die Satisfied</a>".'<br><br>';
			if($k == 'CODE')
				echo "<a href='code.php'>More Info about Davinci Code</a>".'<br><br>';
			if($k == 'SINGLE')
				echo "<a href='single.php'>More Info about Singularity</a>".'<br><br>';
			if($k == 'JIMI')
				echo "<a href='jimi.php'>More Info about Turn Left, Turn Right</a>".'<br><br>';
			if($k == 'THREE')
				echo "<a href='three.php'>More Info about The Three-Body Problem</a>".'<br><br>';
			if($k == 'KITE')
				echo "<a href='kite.php'>More Info about Kite Runner</a>".'<br><br>';
			if($k == 'STORE')
				echo "<a href='store.php'>More Info about Dispel Melancholy Grocery Store</a>".'<br><br>';
			if($k == 'HENRY')
				echo "<a href='henry.php'>More Info about The O. Henry Short Story Collection</a>".'<br><br>';
			if($k == 'ALGO')
				echo "<a href='algo.php'>More Info about Algorithm Introduction</a>".'<br><br>';
		}
		
		$t = array();
		foreach ($_COOKIE as $key => $value) {
			$v = unserialize($value);
			$t[$key] = $v[1];
		}

		//$sort = $_COOKIE;
		arsort($t);
		$keys = array_keys($t);
		
		$i = 1;
		
		foreach($keys as $key){
		   	if($i<6){
		   		echo '<br>'.$i.' '.$index[$key].'<br>';
		   		cho($key);
				$i++;
			}
		}
		

		//$key = $keys[0];
		//echo '<br> 1. '.$index[$key].'<br>';

		//<input type='button' value="返回" onclick="window.open('./admin_functions.php')"/>
	    	//echo "'<br>'.$i.'<a href=\"../product/cookie\"> 163 </a>'.$k.'<br>'";
		//echo <input type='hidden' name='THREE' value='The Three-Body Problem'>
	    //echo "<input type="submit" name="Submit" value="More Info">";
		//for()
	?>

	<br>
</div>