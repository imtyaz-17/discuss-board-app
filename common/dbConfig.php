<?php
$host = "localhost";
$username = "root";
$password = null;
$database = "discuss-board";
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Can't connect with DB" . $conn->connect_error);
}
echo "DB connected";
