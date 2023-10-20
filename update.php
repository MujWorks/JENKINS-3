<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM items WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $item = mysqli_fetch_assoc($result);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $query = "UPDATE items SET name = '$name', description = '$description', price = $price WHERE id = $id";
        mysqli_query($conn, $query);
        header('Location: index.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Demo - Edit</title>
</head>
<body>
    <h1>Edit Item</h1>
    <form method="POST">
        Name: <input type="text" name="name" value="<?= $item['name'] ?>"><br>
        Description: <textarea name="description"><?= $item['description'] ?></textarea><br>
        Price: <input type="text" name="price" value="<?= $item['price'] ?>"><br>
        <input type="submit" value="Update">
    </form>
    <a href="index.php">Cancel</a>
</body>
</html>
