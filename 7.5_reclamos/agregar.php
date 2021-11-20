<?php
    include_once "../controller/crud.php";
    $modelo_a = new administrar();


    if(isset($_POST['Submit'])){
        $observaciones = $_POST['observaciones'];
        $codigo_e1 = $_POST['codigo_e1'];
        $resultado = $modelo_a->agregar_reclamos($observaciones, $codigo_e1);
        
    }else{
        
    }

?>
