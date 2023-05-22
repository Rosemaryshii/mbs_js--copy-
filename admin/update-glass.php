<?php
require_once 'includes/db-conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the updated glass data from the form submission
  $glassId = $_POST['id'];
  $glassName = $_POST['glass_name'];
  $glassPrice = $_POST['glass_price'];

  // Update the glass data in the database
  $updateQuery = "UPDATE glass SET GlassName = :name, price = :price WHERE id = :id";
  $statement = $db->prepare($updateQuery);
  $statement->bindParam(':name', $glassName);
  $statement->bindParam(':price', $glassPrice);
  $statement->bindParam(':id', $glassId);
  $statement->execute();

  // Redirect back to the previous page with a success message
  header('Location: index.php?success=Glass updated successfully');
  exit();
} else {
  // If accessed directly without a POST request, redirect back to the previous page
  header('Location: index.php');
  exit();
}
?>
