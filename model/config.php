<?php
//ESTRUCTURADO
$server = 'localhost';
$database = 'coolstyle';
$usuario = 'root';
$password = '';
    
try{
    $conn = new PDO("mysql:host=$server;dbname=$database;",$usuario, $password);
}catch(PDOException $e){
    die('Connected failed: '.$e->getMessage());
}

//ORIENTADO A OBJETOS
class Conexiondb {
    public function conectar(){
        $localhost = "localhost";
        $database = "coolstyle";
        $user = "root";
        $password = "";
        $link = new PDO("mysql:host=$localhost;dbname=$database",$user,$password);
        //return var_dump($link);
        return $link;
    }
}
//$obj = new Conexiondb();
//$obj -> conectar();

?>