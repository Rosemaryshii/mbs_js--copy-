<?php
// session.php

// Check if the user is authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
  // Redirect the user to the login page
  header("Location: login.php");
  exit();
}
?>
