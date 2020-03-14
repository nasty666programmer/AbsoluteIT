<?php 
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
 

//Connect to database
$mysql =  new mysqli('localhost','root','root','family_task');
//Insert data
$result = $mysql->query("SELECT * FROM `users` WHERE `name` = '$name' AND `pass` = '$pass'");
//conversion to array
$user = $result->fetch_assoc();
if(count($user) == 0) {
    echo 'such user was not found';
    exit();
}

//Close database
$mysql->close();

header("Location: ../header.php");


?>