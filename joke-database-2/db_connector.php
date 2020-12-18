<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "joke-database=2";
$username = "lua70uj935zu8uy6";
$password = "t0ycwbjc36tdlaps";
$dbname = "jokes-database";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
