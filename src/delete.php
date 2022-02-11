<?php
// Include database connection file
include("config.php");

// Retrieve [id] value from querystring parameter
$id = $_GET['id'];

// Delete row for a specified [id]
$stmt = $pdo->prepare("DELETE FROM contacts WHERE id = ?");
$stmt->execute([$id]);

// Redirect to home page (index.php)
header("Location:index.php");
?>