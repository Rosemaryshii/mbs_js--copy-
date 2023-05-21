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
  $query = "SELECT * FROM users WHERE email = :email AND password = :password";
  $statement = $db->prepare($query);
  $statement->bindParam(':email', $email);
  $statement->bindParam(':password', $password);
  $statement->execute();

  // Check if the user exists
  if ($statement->rowCount() > 0) {
    // User authentication successful
    echo "<p>Login successful!</p>";
    header("Location: index.php");

    exit(); // Make sure to exit after the redirect

  } else {
    // User authentication failed
    echo "<p>Login failed. Invalid email or password.</p>";
  }
}
?>

