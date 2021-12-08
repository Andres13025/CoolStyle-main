<?php
session_start();
require_once '../model/config.php';

$records = $conn->prepare('SELECT codigo_c, usuario, pass FROM cliente WHERE usuario=:usuario');
$records->bindParam(':usuario',$_POST['usuario']);
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);

if(password_verify($_POST['pass'], $results['pass']) && $results['codigo_c']==1){
    $_SESSION['admin'] = $results;
    //echo "cuenta admin <br>";
    header('Location: ../1.menu/indice.php');
}elseif(password_verify($_POST['pass'], $results['pass']) && $results['codigo_c']!=1){
    $_SESSION['cliente'] = $results; 
    //echo "cuenta user <br>";
    header('Location: ../index.php');
}else{
    echo "error";
}
?>