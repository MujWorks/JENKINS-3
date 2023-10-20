<?php
$servername = "localhost";
$username = "testadmin";
$password = "testadminpass";
$dbname = "crud_demo";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
