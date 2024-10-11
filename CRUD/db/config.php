<?php
$servename = "localhost";
$username = "u434134546_lu1";
$password = "k@dv1971";
$db = "u434134546_crud";

$conn = mysqli_connect($servename, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>