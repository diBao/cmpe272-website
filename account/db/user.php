<!DOCTYPE html>

<head> 
<title> User of StarryBookStore</title>
</head>
<body style="font-family:arial, sans-serif" style="backgroud-color:#E5DA5C">
<h3 style="color: black">User of StarryBookStore</h3>
    

    <table border="1" cellpadding="3" cellpadding="2" style="background-color:#E5DA5C">

<?php
    echo "<div>Name: Di Bao</div>";
    echo "<div>SID: 011497317</div>";
    echo "<div>Website: <a href= \"http://www.starrybookstore.com\">www.starrybookstore.com</a ></div>";
	//extract($_POST);	

	//if($INFO == ""){
		$sql = "SELECT * FROM Users";
	//}else{
		//$sql = "SELECT * FROM Users WHERE ".$select."='".$INFO."'";
	//}

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

</body>
