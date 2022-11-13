<?php
// $username = 'lijetheal'; 
// $password = 'lijetheal12345'; 
// $host = "db4free.net:3306"; 
// $dbname = 'todoapp'; 

$username = 'root'; 
$password = ''; 
$host = "localhost:3306"; 
$dbname = 'test'; 

$pdo = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
// $pdo = new PDO('mysql:host = localhost; port=3306; dbname=test','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);