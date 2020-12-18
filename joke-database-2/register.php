<?php 

session.start();

//require_once 'db_connector.php';

$userName = $_GET['registerName'];
$userPassword = $_GET['registerPassword'];

$servername = "jokes-database";
$username = "lua70uj935zu8uy6";
$password = "t0ycwbjc36tdlaps";
$database_name = "qksehlwgd3n08qf3";

//Create Connection
$connection = mysqli_connect($servername, $username, $password, $database_name);

$sql_statement = "INSERT INTO `users_table` (`id`, `userName`, `userPassword`) VALUES (NULL, '$userName', '$userPassword')";


if ($connection){
    $result = mysqli_query($connection, $sql_statement);
    if ($result){
        echo "User Created!";
        header('Location: index.php');
    }
}
?>
