<?php
    $server = 'btibuy9uvhaujjwxul6o-mysql.services.clever-cloud.com';
    $database = 'btibuy9uvhaujjwxul6o';
    $usuario = 'uvk3cic7kntjqwio';
    $password = 'CrcLHSIuGW6tDsUJ5fPQ';
    
    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;",$usuario, $password);
    }catch(PDOException $e){
        die('Connected failed: '.$e->getMessage());
    }

?>