<?php
$host = 'localhost'; // e.g., 'localhost'
$dbname = 'calculator';
$username = 'root';
$pass = '';

try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $pass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // Other configuration options if needed
} catch(PDOException $e) {
  // Handle the error appropriately (e.g., logging, displaying an error message)
  echo "Connection failed: " . $e->getMessage();
}
?>