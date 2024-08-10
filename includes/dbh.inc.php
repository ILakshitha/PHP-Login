<?php
$serverName = "localhost";
$dbUsername = "ishan123";
$dbPassword = "8zCv6kpNTFf0Xe6*";
$dbName = "ishan_login";


$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("connection failed : " .mysqli_connect_error());
}