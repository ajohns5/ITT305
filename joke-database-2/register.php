<?php 

session.start();

//require_once 'db_connector.php';

$userName = $_GET['registerName'];
$userPassword = $_GET['registerPassword'];

$servername = "localhost";
$username = "root";
$password = "root";
$database_name = "jokes-database";

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