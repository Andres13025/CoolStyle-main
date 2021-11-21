<?php
    $server = 'localhost';
    $database = 'coolstyle';
    $usuario = 'root';
    $password = '';
    

    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;",$usuario, $password);
    }catch(PDOException $e){
        die('Connected failed: '.$e->getMessage());
    }



?>