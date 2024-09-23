<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['nik']) || !isset($_SESSION['nama'])) {
  header('Location: login.php'); // redirect to login page
  exit;
}

// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Query to retrieve users
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Display users
if (mysqli_num_rows($result) > 0) {
  echo "<h1>Users</h1>";
  echo "<ul>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . $row["nama"] . " (" . $row["nik"] . ")</li>";
  }
  echo "</ul>";
} else {
  echo "No users found.";
}

// Close database connection
mysqli_close($conn);
?>