<?php

$dbServername = "localhost";
$dbUsername = "u683360661_admin";
$dbPassword = "ElephantButt3r1982";
$dbName = "u683360661_RPmachinery";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("connection failed:".mysqli_connect_error());
}