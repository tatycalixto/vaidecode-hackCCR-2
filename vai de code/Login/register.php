<?php
header('Access-Control-Allow-Origin: *');

require("connection.php");
$email = $_POST['email'];
$query_ = "SELECT * FROM users WHERE Email ='$email'";
$result = $conn->query($query_);
$registeredEmail = false;

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    //echo $row['Email'];
    //echo "Email já cadastrado";
    $registeredEmail = false;
    header('Location:cadastro.php?login=equal');
  }
} else {
  //echo "Email nao tá cadastrado";
  $registeredEmail = true;
}

if ($registeredEmail) {
  $stmt = $conn->prepare("INSERT INTO users (Name_,Email,Pass, Type_) VALUES (?,?,?,?)");
  $stmt->bind_param("ssss", $_POST['name_'], $_POST['email'], $_POST['password'], $_POST['profile-option']);
  $stmt->execute();
  $conn->close();
  header('Location:login.php');
}
