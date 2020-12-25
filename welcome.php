<?php

session_start();
if(!$_SESSION['auth']){
    header('location:login.html');
}

?>
<html>

<head>
<title>welcome</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="body">
<div class="navbar" class="topnav">
 <a >welcome <?php echo $_SESSION['name'] ?></a>
   <a  href="logout.php" style="margin-left:80%">logout</a>
      
 </div>
 <div class="datashow">
 <table class="t01" class="position-center">
  <tr>
    <th>ID</th>
    <th>Department Name</th>
    <th>Description</th>    
  </tr>
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
  $sql="SELECT * FROM department;";
  $result=mysqli_query($conn,$sql);
  $resultchech=mysqli_num_rows($result);
  if($resultchech>0){
    while($row=mysqli_fetch_assoc($result)){
      echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["description"]."</td></tr>";
    }
  }
  
  $conn->close();
  ?>
</table>
</div>
    
          
</body>

</html>