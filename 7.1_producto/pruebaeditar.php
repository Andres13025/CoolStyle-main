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


    echo '<script language="javascript">alert("hola")</script>';
    echo '<script language="javascript">alert('.$id.')</script>';
    echo '<script language="javascript">alert('.$codigo.')</script>';
    echo '<script language="javascript">alert('.$nombre.')</script>';
    echo '<script language="javascript">alert('.$cantidad.')</script>';
    echo '<script language="javascript">alert('.$precio.')</script>';
    echo '<script language="javascript">alert('.$talla.')</script>';
    

    try {
        $modelo_asd->editar($id, $codigo, $nombre, $cantidad, $precio, $talla);
    } catch (Exception $th) {
        echo $th->getMessage();
        echo '<script language="javascript">alert('.$th->getMessage().');</script>';
    }
    
    
    
}else{
    echo "no enviado";
}


?>