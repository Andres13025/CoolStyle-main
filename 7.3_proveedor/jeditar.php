<?php
include_once "../controller/crud.php";

if(isset($_POST['Submit'])){
    $modelo_e = new administrar();
    $id = $_POST['oculto'];
    $codigo_a = $_POST['codigo_a'];
    $nombre_proveedor = $_POST['nombre_proveedor'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $resultado = $modelo_e->editar_proveedor($id, $codigo_a, $nombre_proveedor, $direccion, $telefono, $correo);
    
}else{
    echo "no enviado";
}


?>