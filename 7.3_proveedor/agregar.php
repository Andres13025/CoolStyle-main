<?php
    include_once "../controller/crud.php";
    $modelo_a = new administrar();


    if(isset($_POST['Submit'])){
        $nombre_proveedor = $_POST['nombre_proveedor'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $resultado = $modelo_a->agregar_proveedor($nombre_proveedor, $direccion, $telefono, $correo);
        
    }else{
        
    }

?>
