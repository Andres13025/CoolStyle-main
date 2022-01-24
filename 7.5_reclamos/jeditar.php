<?php
include_once "../controller/crud.php";

if(isset($_POST['Submit'])){
    $modelo_e = new administrar();
    $id = $_POST['oculto'];
    $codigo_r = $_POST['codigo_r'];
    $observaciones = $_POST['observaciones'];
    $codigo_e1 = $_POST['codigo_e1'];
    $resultado = $modelo_e->editar_reclamos($id, $codigo_r, $observaciones, $codigo_e1);
    
}else{
    echo "no enviado";
}


?>