<?php
    include_once "../controller/crud.php";
    $modelo_i = new administrar();

    if(isset($_POST['Submit'])){
        $fecha = $_POST['fecha'];
        $metodo = $_POST['metodo'];
        $codigo = $_POST['codigo'];
        $resultado = $modelo_i->insertar($fecha, $metodo, $codigo);

    }else{

    }
?>

