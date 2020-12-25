<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "lab3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)   {
  die("Connection failed: " . $conn->connect_error);
}
$email=$_POST['email'];
$password=$_POST['password'];
$query="
SELECT *
FROM user 
WHERE email='$email' and password='$password';";


$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1){

session_start();
$_SESSION['auth']=true;
$row=mysqli_fetch_assoc($result);
$_SESSION['name']=$row['name'];
header('location:welcome.php');

}
else{
   header('location:login.html');
   
}

$conn->close();

?>