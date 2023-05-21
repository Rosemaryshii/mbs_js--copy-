<?php
// log_proc.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Handle form submission

  // Get the form input values
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Database connection
  require_once 'includes/db-conn.php'; 

  // SQL query to check user credentials
  $query = "SELECT * FROM users WHERE email = :email";
  $statement = $db->prepare($query);
  $statement->bindParam(':email', $email);
  $statement->execute();

  // Check if the user exists
  if ($statement->rowCount() > 0) {
    $user = $statement->fetch();

    // Verify the password
    if (password_verify($password, $user['password'])) {
      // User authentication successful
      header("Location: index.php");
      exit(); // Make sure to exit after the redirect
    } else {
      // Incorrect password
      header("Location: login.php?error=password");
      exit();
    }
  } else {
    // Email not found in the database
    header("Location: login.php?error=email");
    exit();
  }
}
?>
