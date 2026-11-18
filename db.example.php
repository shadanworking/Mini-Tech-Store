<?php
// Local development credentials belong in db.php, which is not committed.
$host = "localhost";
$port = 3306;
$user = "root";
$password = "";
$database = "mini_store_db";
$conn = mysqli_connect($host, $user, $password, $database, $port);
if (!$conn) {
    die("Database connection failed");
}
?>
