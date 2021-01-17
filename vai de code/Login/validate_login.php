<?php
session_start();
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] != 'YES') {
  header('Location:Login/login.php?login=erro2');
}
