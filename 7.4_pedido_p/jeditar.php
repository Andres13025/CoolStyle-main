<?php
include_once "../controller/crud.php";

if(isset($_POST['Submit'])){

    $modelo_e = new administrar();
    $id = $_POST['oculto'];
    $codigo_p = $_POST['codigo_p'];
    $calle = $_POST['calle'];
    $ciudad = $_POST['ciudad'];
    $fecha_p = $_POST['fecha_p'];
    $marca = $_POST['marca'];
    $color = $_POST['color'];
    $carrito = $_POST['carrito'];
    $resultado = $modelo_e->editar_pedido($id, $codigo_p, $calle, $ciudad, $fecha_p, $marca, $color, $carrito);
    
}else{
    echo "no enviado";
}


?>