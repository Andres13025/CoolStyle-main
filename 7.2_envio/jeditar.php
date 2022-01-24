<?php
include_once "../controller/crud.php";

if(isset($_POST['Submit'])) {

    $modelo_a = new administrar();
    $id = $_POST['oculto'];
    $fecha = $_POST['fecha'];
    $metodo = $_POST['metodo'];
    $codigo = $_POST['codigo'];
    $resultado = $modelo_a->actualizar($id, $fecha, $metodo, $codigo);
    
}else {
    echo "no enviado";
}


?>