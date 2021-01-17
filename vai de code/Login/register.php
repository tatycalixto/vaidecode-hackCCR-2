<?php
header('Access-Control-Allow-Origin: *');

require("connection.php");


$stmt = $conn->prepare("INSERT INTO users (Name_,Email,Pass, Type_) VALUES (?,?,?,?)");
$stmt->bind_param("ssss", $_POST['name_'], $_POST['email'], $_POST['password'], $_POST['profile-option']);
$stmt->execute();
$conn->close();
header('Location:login.php');
