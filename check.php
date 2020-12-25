
<?php
$servername="127.0.0.1";
$username = "root";
$password = "";
$dbname = "lab3";
$email_check=$_POST['email_check'];
$conn = new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
 die("Connection failed: " . $conn->connect_error);
 }
$sql = "SELECT email FROM user WHERE email LIKE '$email_check' ";
$result = $conn->query($sql);
$email_exist = mysqli_num_rows($result);
if($email_exist){
    echo '<span class="text-danger">Email is already taken</span>';
}
else{

echo '<span class="text-success">Email Available</span>';
}

?>
<!-- email='".$email_check.