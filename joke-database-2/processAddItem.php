<?php 
// the purpose of this module is to insert a new recipe into the recibies_table
// this module accepts input from the showAddForm.php page.  
// show a success message with a link to the index.php page

session_start();

require_once 'db_connector.php';

$jokeText = addslashes($_GET['jokeText']);
$jokeAnswer = addslashes($_GET['jokeAnswer']);
$user_id = $_SESSION['user_id'];

echo "The joke is:<br> " . $jokeText . "<br>";
echo "The answer is:<br> " . $jokeAnswer . "<br>".
    
    //define variables for local server connection
$servername = "localhost";
$username = "root";
$password = "root";
$database_name = "jokes-database";

//Create Connection
$connection = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<br><br>Connected successfully<br><br>";

//sql statement for insert to joke table
$sql_statement = "INSERT INTO `jokes_table` (`id`, `jokeText`, `jokeAnwer`, `users_table_id`) VALUES (NULL, '$jokeText', '$jokeAnswer.', '$user_id')";

//input to database
if (mysqli_query($connection, $sql_statement)) {
    echo "<br>New record created successfully<br>";
} else {
    echo "Error: " . $sql_statement . "<br>" . mysqli_error($connection);
}


?>