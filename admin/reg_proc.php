<?php
// register.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Handle form submission

  // Get the form input values
  $name = $_POST['name'];
  $email = $_POST['email'];
  $userN = $_POST['userN'];
  $password = $_POST['password'];

  // Database connection
  require_once 'includes/db-conn.php';

  // SQL query to insert user data into the database
  $query = "INSERT INTO users (name, email, userN, password) VALUES (:name, :email, :userN, :password)";
  $statement = $db->prepare($query);
  $statement->bindParam(':name', $name);
  $statement->bindParam(':email', $email);
  $statement->bindParam(':userN', $userN);
  $statement->bindParam(':password', $password);
  
  // Execute the query
  if ($statement->execute()) {
    // Registration successful
    echo "<p>Registration successful!</p>";
    header("Location: login.php");
    exit(); // Make sure to exit after the redirect
  } else {
    // Registration failed
    echo "<p>Registration failed. Please try again.</p>";
  }
}
?>
