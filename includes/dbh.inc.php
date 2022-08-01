<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "ElephantButt3r1982";
$dbName = "rpmachinery_sales";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("connection failed:".mysqli_connect_error());
}