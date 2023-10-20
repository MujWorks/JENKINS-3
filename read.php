<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM items WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $item = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Demo - View</title>
</head>
<body>
    <h1>Item Details</h1>
    <h2><?= $item['name'] ?></h2>
    <p>Description: <?= $item['description'] ?></p>
    <p>Price: <?= $item['price'] ?></p>
    <a href="index.php">Back to Items</a>
</body>
</html>
