<?php
include_once "../controller/crud.php";
if(isset($_POST['Submit'])){
    
    $modelo_asd = new administrar();
    $id = $_POST['oculto'];
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $talla = $_POST['talla'];  

    try {
        $modelo_asd->editar($id, $codigo, $nombre, $cantidad, $precio, $talla);
    } catch (Exception $th) {
        echo $th->getMessage();
    }
}else{
    echo "no enviado";
}


?>