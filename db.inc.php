<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "tugasphp";

$conn = mysqli_connect(
    $dbServername, 
    $dbUsername, 
    $dbPassword, 
    $dbName) or die ("could not connect to mysql");

