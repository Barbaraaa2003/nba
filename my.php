<?php 
$name = $_POST['sirname']; 
$email = $_POST['email']; 
$message = $_POST['message']; 
 
$mysql = new mysqli('localhost', 'root', '', 'epl'); 
$mysql->query("INSERT INTO feedback (`name`, email, `message`) VALUES('$name', '$email', '$message')"); 
 
$mysql->close(); 
header('Location: /') 
?>