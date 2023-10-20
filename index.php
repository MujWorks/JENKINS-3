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
        <?php while ($row = mysqli_fetch_assoc($result)) {
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
