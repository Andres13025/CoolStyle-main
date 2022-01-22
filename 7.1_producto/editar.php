<?php
    include_once "../controller/crud.php";
    require_once '../model/config.php';
    $id = $_GET['id'];
    $modelo_o = new administrar();
    $modelo_e = new administrar();
    $datos = $modelo_o->ObtenerDatos($id);//este solo trae los datos que seran editados

    //print_r($datos);
    //echo $datos['identificacion'];

    

    echo "<form action='editar.php' method='post'>
    <table>
        <tr>
            <td>Codigo</td>
            <td><input type='text' name='codigo' value='".$datos['codigo_pr']."'></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><input type='text' name='nombre' value='".$datos['nombre_producto']."'></td>
        </tr>
        <tr>
            <td>cantidad</td>
            <td><input type='text' name='cantidad' value='".$datos['cantidad']."'></td>
        </tr>
        <tr>
            <td>precio</td>
            <td><input type='text' name='precio' value='".$datos['precio']."'></td>
        </tr>
        <tr>
            <td>talla</td>
            <td><input type='text' name='talla' value='".$datos['talla']."'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' name='Submit' value='Editar'></td>
            <td><input type='hidden' name='oculto' value='".$datos['codigo_pr']."'></td>
        </tr>
    </table>
</form>";

if(isset($_POST['Submit'])){
    
    $id = $_POST['oculto'];
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $talla = $_POST['talla'];

    //$resultado = $modelo_e->editar($id, $codigo, $nombre, $cantidad, $precio, $talla);

    
        $records =$conn->prepare("UPDATE producto SET codigo_pr=:codigo_pr, 
        nombre_producto=:nombre, cantidad=:cantidad, precio=:precio, talla=:talla WHERE codigo_pr=:id");
        $records->bindParam(':id',$_POST['oculto']);
        $records->bindParam(':codigo_pr',$_POST['codigo']);
        $records->bindParam(':nombre',$_POST['nombre']);
        $records->bindParam(':cantidad',$_POST['cantidad']);
        $records->bindParam(':precio',$_POST['precio']);
        $records->bindParam(':talla',$_POST['talla']);

        if($records->execute()){
            /*$mensaje = 'Successfully created new user';*/
            header('Location: ../7.1_producto/producto.php');
        }else{
            $mensaje = 'Sorry there must have been an issue creating your password';
        }
    
}else{
    echo "no enviado";
}

?>