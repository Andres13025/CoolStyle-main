<?php
    include_once "../controller/crud.php";
    $modelo_a = new administrar();


    if(isset($_POST['Submit'])){
        $calle = $_POST['calle'];
        $ciudad = $_POST['ciudad'];
        $fecha_p = $_POST['fecha_p'];
        $marca = $_POST['marca'];
        $color = $_POST['color'];
        $carrito = $_POST['carrito'];
        $resultado = $modelo_a->agregar_pedido($calle, $ciudad, $fecha_p, $marca, $color, $carrito);
        
    }else{
        
    }

?>
