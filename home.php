<?php
session_start(); // Add this line
require_once 'header.php';
?>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
    <h1 class="display-4">Welcome, <?php echo $_SESSION['Nama']; ?>!</h1>
      <p class="lead">This is the home page.</p>
    </div>
  </div>
</div>

<?php
require_once 'footer.php';
?>