<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$username1 = $_POST["username"];
$password1 = $_POST["password"];

$query = "SELECT * FROM login";
mysqli_query($conn, $query) or die('Error querying database.');
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

if($row["username"]==$username1 && $row["password"]==$password1)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>