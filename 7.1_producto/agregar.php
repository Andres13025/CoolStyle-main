<?php
    include_once "../controller/crud.php";
    $modelo_a = new administrar();

    if(isset($_POST['Submit'])){
        $nombre = $_POST['nombre'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $talla = $_POST['talla'];
        $resultado = $modelo_a->agregar($nombre, $cantidad, $precio, $talla);
        
    }else{
        
    }

?>