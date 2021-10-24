<?php
//ESTRUCTURADO
$server = 'btibuy9uvhaujjwxul6o-mysql.services.clever-cloud.com';
$database = 'btibuy9uvhaujjwxul6o';
$usuario = 'uvk3cic7kntjqwio';
$password = 'jUsHhVPat7EFnHyBwOOc';
    
try{
    $conn = new PDO("mysql:host=$server;dbname=$database;",$usuario, $password);
}catch(PDOException $e){
    die('Connected failed: '.$e->getMessage());
}

//ORIENTADO A OBJETOS
class Conexiondb {
    public function conectar(){
        $localhost = "btibuy9uvhaujjwxul6o-mysql.services.clever-cloud.com";
        $database = "btibuy9uvhaujjwxul6o";
        $user = "uvk3cic7kntjqwio";
        $password = "jUsHhVPat7EFnHyBwOOc";
        $link = new PDO("mysql:host=$localhost;dbname=$database",$user,$password);
        //return var_dump($link);
        return $link;
    }
}
//$obj = new Conexiondb();
//$obj -> conectar();

?>
