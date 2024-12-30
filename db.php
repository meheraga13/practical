<?php
$host = 'localhost';
$db = 'book_inventory';
$user = 'root';
$password = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db",$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $e){
    die("The connection failed: $e->getMessage()");

}