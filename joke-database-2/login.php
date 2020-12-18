<?php
session_start();

require_once 'db_connector.php';

if ($connection) {
    $attemptedLoginName = addslashes($_POST['login-name']);
    $attemptedPassword = addslashes($_POST['login-password']);
    
    //echo "Connected to " . $dbname . " as " . $username;
    //echo "<br> login name: " . $attemptedLoginName . "<br>" . $attemptedPassword . "<br>";
    $sql_statement = "SELECT * FROM `users_table` WHERE `userName` = '$attemptedLoginName' AND `userPassword` = '$attemptedPassword' LIMIT 1";
    $result = mysqli_query($connection, $sql_statement);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            //echo "Login successful<br>";
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['userName'];
            $_SESSION['user_id'] = $row['id'];
            header('Location: index.php');
        }
        else {
            echo "Login unsuccessful<br>";
            exit;
        }
    }
    else {
        echo "error" . mysqli_error($connection);
        exit;
    }
}
else {
    echo "Error connecting " . mysqli_connect_errno();
    exit;
}
?>