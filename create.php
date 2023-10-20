<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $query = "INSERT INTO items (name, description, price) VALUES ('$name', '$description', $price)";
    mysqli_query($conn, $query);
    header('Location: index.php');
}
?>

<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Demo - Create</title>
</head>
<body>
    <h1>Create New Item</h1>
    <form method="POST">
        Name: <input type="text" name="name"><br>
        Description: <textarea name="description"></textarea><br>
        Price: <input type="text" name="price"><br>
        <input type="submit" value="Create">
    </form>
</body>
</html>
