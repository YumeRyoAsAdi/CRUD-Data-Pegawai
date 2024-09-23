<?php
session_start();

if (!isset($_SESSION['nik']) || !isset($_SESSION['nama'])) {
  header('Location: login.php'); // redirect to login page
  exit;
}
?>