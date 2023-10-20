<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM items WHERE id = $id";
    mysqli_query($conn, $query);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Demo - Delete</title>
</head>
<body>
    <h1>Delete Item</h1>
    <p>Are you sure you want to delete this item?</p>
    <a href="index.php">Cancel</a>
    <a href="delete.php?id=<?= $id ?>&confirm=yes">Delete</a>
</body>
</html>
