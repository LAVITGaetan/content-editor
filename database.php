<?php 
 $host = 'localhost';
 $dbname = 'content-editor';
 $username = 'root';
 $password = '';
   
 $dsn = "mysql:host=$host;dbname=$dbname";
 $pdo = new PDO($dsn, $username, $password);

?>