<?php

$servername = "localhost";
$username = "root";
$database = "db_perpusweb";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";