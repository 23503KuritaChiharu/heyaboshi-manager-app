<?php

$host = '127.0.0.1:57332'; //127.0.0.1:[ポート番号]でも良い
$dbname = 'library_db';
$dbuser = 'root';
$dbpassword = ' ';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8","$dbuser","$dbpassword");
    echo "SUCCESS";
}catch(PDOException $e){
   var_dump($e -> getMessage());
    die();
}