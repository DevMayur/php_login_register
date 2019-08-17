<?php
$username = $_POST['username_register'];
$password = $_POST['password_register'];

$host = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "practise";

$conn = new mysqli($host,$dbUser,$dbPassword,$dbName);

if (mysqli_connect_error()) {
  die('Connect Error');
  echo "error";
}else{
  $INSERT = "INSERT INTO users (username,password) values(?,?);";
}

$stmt = $conn->prepare($INSERT);
$stmt->bind_param("ss",$username,$password);
$stmt->execute();
$stmt->close();
$conn->close();



?>
