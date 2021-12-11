<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="../fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../1.menu/style.css">
</head>
    <header>
        <a id="titulo" href="index.html" class="logo">CoolStyle</a>
        <nav class="site-nav">
          <ul>
            <li><a href="../7.1_producto/producto.php" >PRODUCTO</a></li>
            <li><a href="../7.2_envio/envio.php" >ENVIO</a></li>
            <li><a href="../7.3_proveedor/proveedor.php" >PROVEEDOR</a></li>
            <li><a href="../7.4_pedido_p/pedido_p.php" >PEDIDO</a></li>
            <li><a href="../7.5_reclamos/reclamos.php" >RECLAMOS</a></li>
            <li><a href="../5.logout/logout.php">Logout</a></li>
          </ul>
        </nav>
      </header>
<?php
    include_once "../controller/crud.php";
    $modelo = new administrar();
    $resultado = $modelo->visualizar();
    echo "<center>";
    echo "<table class='table table-bordered' style='width:60%; border:solid; margin-top:50px'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'><a data-bs-toggle='modal' data-bs-target='#exampleModal'><i class='fas fa-file' style='color:black'></i></a></th>";
    echo "</tr>";
    echo"</thead >";
    echo"<thead >";
    echo "<th>Fecha</th>";
    echo "<th>Metodo envio</th>";
    echo "<th>Codigo producto</th>";
    echo "<th>Accion</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>"; 
    if($resultado){
        foreach ($resultado as $row => $item){
            echo '
            <td>'.utf8_encode($item["fecha_e"]).'</td>
            <td>'.utf8_encode($item["metodo_e"]).'</td>
            <td>'.utf8_encode($item["codigo_p3"]).'</td>
            <td><a href="quitar.php?id='.$item["codigo_e"].'"><i class="fas fa-trash" style="color:black"></i></a> | <a href="actualizar.php?id='.$item["codigo_e"].'"><i class="fas fa-edit" style="color:black"></i></a>

            </tr>
            </tbody>
            ';
        }
        echo "</table>";
        echo "</center>";
    }
?>

<!-- Modal -->
<form action='insertar.php' method='post'>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Envio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
      <table>
        <tr>
            <td>Fecha envio</td>
            <td><input type='date' class="form-control" name='fecha'></td>
        </tr>
        <tr>
            <td>Metodo envio</td>
            <td><input type='text' class="form-control" name='metodo'></td>
        </tr>
        <tr>
            <td>Codigo producto</td>
            <td><input type='text' class="form-control" name='codigo'></td>
        </tr>
    </table>
    

      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" name="Submit" name='Submit'class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
</form>
