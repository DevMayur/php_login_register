<?php
$username = $_POST['username_login'];
$password = $_POST['password_login'];

$host = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "practise";

$conn = new mysqli($host,$dbUser,$dbPassword,$dbName);

if (mysqli_connect_error()) {
  die('Connect Error');
  echo "error";
}else{
  $sql = "select * from users where username = '" . $username . "'";
  $retval = mysqli_query($conn,$sql);

  if (!$retval) {
    die($sql . mysqli_error($conn));
  }

  while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
    if ($row['password'] == $password) {
      echo "SUCCESS";
    }else{
      echo "FAIL";
    }
  }
}
$conn->close();

?>
