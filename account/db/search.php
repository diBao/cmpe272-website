<!DOCTYPE html>

<head> 
<title> Search Results</title>
</head>
<body style="font-family:arial, sans-serif" style="backgroud-color:#E5DA5C">
<h3 style="color: black">Search Results</h3>
    
    <table border="1" cellpadding="3" cellpadding="2" style="background-color:#E5DA5C">

<?php
	extract($_POST);	

	if($INFO == ""){
		$sql = "SELECT ".$select." FROM Users";
	}else{
		$sql = "SELECT * FROM Users WHERE ".$select."='".$INFO."'";
	}

	//connect to mysql
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "account";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$result = $conn->query($sql);

	//fetch esch record if result set
	if ($result->num_rows > 0) {
		for( $counter = 0; 
		$row = $row = $result->fetch_assoc();
		$counter ++){
			print("<tr>");
		
			foreach( $row as $key =>$value)
				print("<td> $value</td>");
			print("</tr>");
		}
	}
	$conn->close();
    ?>
    </table>

<br>Your search yielded<strong>
<?php print( "$counter")?>result.<br /><br /></strong>
<br>

<input type ="button" onclick="javascript:location.href='search.html'" value="Back"></input>

<h5> Please email to comments to
	<a href="maiilto:delete@delete.com">Starry Inc.</a>
</h5>


</body>
