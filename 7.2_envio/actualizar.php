<?php
    include_once "../controller/crud.php";
    $id = $_GET['id'];
    $modelo_I = new administrar();
    $datos = $modelo_I->ImprimirDatos($id);

    echo "<form action='jeditar.php' method='post'>
    <table>
        <tr>
            <td>Fecha envio</td>
            <td><input type='text' name='fecha' value='".$datos['fecha_e']."'></td>
        </tr>
        <tr>
            <td>Metodo envio</td>
            <td><input type='text' name='metodo' value='".$datos['metodo_e']."'></td>
        </tr>
        <tr>
            <td>Codigo producto</td>
            <td><input type='text' name='codigo' value='".$datos['codigo_p3']."'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' name='Submit' value='Editar'></td>
            <td><input type='hidden' name='oculto' value='".$datos['codigo_e']."'></td>
        </tr>
    </table>
</form>";

?>