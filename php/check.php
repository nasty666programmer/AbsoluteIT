<?php 
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
$type = filter_var(trim($_POST['family']),FILTER_SANITIZE_STRING);

// length check
if(mb_strlen($name) < 3 && mb_strlen($name) > 10){
    echo "Error ";
    exit();
}
//hashing password
//$pass = md5($pass."asdqwe"); 

//Connect to database
$mysql =  new mysqli('localhost','root','root','family_task');
//Insert data
$mysql->query("INSERT INTO `users` (`name`,`pass`,`type`) VALUES('$name','$pass','$type')");
//Close database
$mysql->close();

header("Location: /");

?>