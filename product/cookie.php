<!DOCTYPE html>
<a href='../products.php '>List Page</a ></br>

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


	//clearCookies();
	
	$keys = array_keys($_POST);
	$key = $keys[0];
	//extract($_POST)
	#foreach ($_POST as $k) {
	#	echo "<div>{$k}</div>";
		//echo "<div>{$S}</div>";
	#}

	//print_r($key);

	$t = date("Y-m-d H:i:s");
	//$t2 = time();
	//print_r($t);

	echo "<br>";
	//print_r($t2);
	//$_COOKIE["$key"] = "";

	//setcookie("$key", NULL);
	/*
	if($_COOKIE[$key] != NULL){
		//$count = 1;
		setcookie($key, "1", time()+5*24*60*60);
	}
	else{
		//$v = $_COOKIE[$key];
		//$v++;
		setcookie($key, '',time()-3600);
	}
	*/
	echo "<br>";
	/*
	foreach ($_COOKIE as $k => $value) {

		echo "<div>{$k}</div>";
		echo "<div>{$value}</div>";
	}
	*/

	
    //$choose = array_slice($_COOKIE, -5);  //the cookie array arrange by insert sequence
    //print_r($choose);
    echo "<br>";
	echo "<br>";
	print_r($_COOKIE);

	//$sort = $_COOKIE;
	//arsort($sort);
	//echo "<br>";
	//print_r($sort);



	//if($_POST)
?>