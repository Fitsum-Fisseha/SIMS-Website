<?php
$servername = "localhost";
$username = "Fitsum";
$password = "P@55w0rd";
$dbname = "sims";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
