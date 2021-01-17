<?php
session_start();
header('Access-Control-Allow-Origin: *');

require("connection.php");
$email = $_POST['email'];
$pass = $_POST['password'];
$query_ = "SELECT * FROM users WHERE Email ='$email' AND Pass = '$pass'";
$result = $conn->query($query_);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    //echo $row['Email'] . "|" . $row['Pass'] . "|";
    $_SESSION['authenticated'] = 'YES';
    header('Location:../user_register_young.php');
  }
} else {
  //echo "Não há registros";
  $_SESSION['authenticated'] = 'NO';
  header('Location:login.php?login=wrong');
}
$conn->close();
