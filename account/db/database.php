<!DOCTYPE html>
<html>
<?php
//extract($_POST)

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "account";


extract($_POST);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Users (FirstName, LastName, Email, HomeAddress, HomePhone, CellPhone)
VALUES ('$FirstName', '$LastName', '$Email', '$HomeAddress', $HomePhone, $CellPhone)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<input type ="button" onclick="javascript:location.href='../newuser.php'" value="Back"></input>
</html>
