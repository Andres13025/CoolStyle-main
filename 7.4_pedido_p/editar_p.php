<?php
    include_once "../controller/crud.php";
    $id = $_GET['id'];
    $modelo_o = new administrar();
    $datos = $modelo_o->ObtenerDatos_pedido($id);//este solo trae los datos que seran editados

    //print_r($datos);
    //echo $datos['identificacion'];

    

    echo "<form action='jeditar.php' method='post'>
    <table>
        <tr>
            <td>codigo_p</td>
            <td><input type='text' name='codigo_p' value='".$datos['codigo_p']."'></td>
        </tr>
        <tr>
            <td>calle</td>
            <td><input type='text' name='calle' value='".$datos['calle']."'></td>
        </tr>
        <tr>
            <td>ciudad</td>
            <td><input type='text' name='ciudad' value='".$datos['ciudad']."'></td>
        </tr>
        <tr>
            <td>fecha_p</td>
            <td><input type='text' name='fecha_p' value='".$datos['fecha_p']."'></td>
        </tr>
        <tr>
            <td>marca</td>
            <td><input type='text' name='marca' value='".$datos['marca']."'></td>
        </tr>
        <tr>
            <td>color</td>
            <td><input type='text' name='color' value='".$datos['color']."'></td>
        </tr>
        <tr>
            <td>carrito</td>
            <td><input type='text' name='carrito' value='".$datos['carrito']."'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' name='Submit' value='Editar'></td>
            <td><input type='hidden' name='oculto' value='".$datos['codigo_p']."'></td>
        </tr>
    </table>
</form>";

?>