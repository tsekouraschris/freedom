<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$message = $_POST['message']
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "INSERT INTO messages (content)
VALUES ($message)";

if ($conn->query($sql) === TRUE )
{
echo "new message uploaded";
}else
{
echo "Error: ".$sql."<br>".$conn->error;
}


?>