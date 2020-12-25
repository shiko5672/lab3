<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "lab3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (name, email,password)
VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["password"]."')";

if ($conn->query($sql) === TRUE) {
  session_start();
  $_SESSION['name']=$_POST["name"];
  $_SESSION['auth']=true;
  header('location:welcome.php');
} else {
  $_SESSION['error']='this email is taken';
  header('location:signup.php');
  
}

$conn->close();
?>