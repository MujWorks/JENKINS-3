<?php
include 'config.php';

$query = "SELECT * FROM items";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Demo - Home</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Items</h1>
    <a class="btn" href="create.php">Add New Item</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php 
        
        error_reporting(E_ALL);
ini_set('display_errors', 1);
        
        
        while ($row = mysqli_fetch_assoc($result)) {
            var_dump($row); // Add this line to debug
            ?>
            ?>
            <tr>
                <td><?= $row['name'] ?></td>
                <td><?= $row['description'] ?></td>
                <td><?= $row['price'] ?></td>
                <td>
                    <a class="btn" href="read.php?id=<?= $row['id'] ?>">View</a>
                    <a class="btn" href="update.php?id=<?= $row['id'] ?>">Edit</a>
                    <a class="btn delete" href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
