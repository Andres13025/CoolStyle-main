<?php
//ESTRUCTURADO
 //$server = 'btibuy9uvhaujjwxul6o-mysql.services.clever-cloud.com';
 //$database = 'btibuy9uvhaujjwxul6o';
 //$usuario = 'uvk3cic7kntjqwio';
 //$password = 'CrcLHSIuGW6tDsUJ5fPQ';

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
         //$localhost = "btibuy9uvhaujjwxul6o-mysql.services.clever-cloud.com";
         //$database = "btibuy9uvhaujjwxul6o";
         //$user = "uvk3cic7kntjqwio";
         //$password = "CrcLHSIuGW6tDsUJ5fPQ";

        $localhost = "localhost";
        $database = "coolstyle";
        $user = "root";
        $password = "";
        
        try{
            $link = new PDO("mysql:host=$localhost;dbname=$database;",$user, $password);
            return $link;
        }catch(PDOException $e){
            die('Connected failed: '.$e->getMessage());
            return var_dump($link);
        }
        
    }
}
//$obj = new Conexiondb();
//$obj -> conectar();

?>
