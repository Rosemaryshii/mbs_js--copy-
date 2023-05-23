<?php

require_once 'includes/db-conn.php'; 

$query = "SELECT * FROM glass";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Error retrieving products: ' . mysqli_error($conn));
}

$products = array();

while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}


?>

<?php
require_once 'includes/db-conn.php';


// Fetch all glasses from the database
$selectQuery = "SELECT * FROM glass";
$statement = $db->prepare($selectQuery);
$statement->execute();
$glasses = $statement->fetchAll(PDO::FETCH_ASSOC);


mysqli_free_result($result);
mysqli_close($conn);

header('Content-Type: application/json');
echo json_encode($products);
?>