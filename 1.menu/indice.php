<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css” rel=”nofollow” integrity=”sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I” crossorigin=”anonymous”>
    <script src=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js” integrity=”sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/” crossorigin=”anonymous”></script>
    <link href="../fontawesome/css/all.css" rel="stylesheet"> 
</head>
<body>

<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h1 style="color:#ffffff">CoolStyle</h1>
        <a href="../5.logout/logout.php">
            <label style="top: 98px; left: 1000px; width:50px;">Logout_admin</label><br>
        </a>
        <a href="../7.1_producto/producto.php">PRODUCTO</a><br>
        <a href="../7.2_envio/envio.php">ENVIO</a><br>
        <a href="../7.3_proveedor/proveedor.php">PROVEEDOR</a><br>
        <a href="../7.4_pedido_p/pedido_p.php">PEDIDO</a><br>
        <a href="../7.5_reclamos/reclamos.php">RECLAMOS</a>
</nav>   -->


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CoolStyle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="producto">PRODUCTO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="envio">ENVIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="proveedor">PROVEEDOR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pedido">PEDIDO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="reclamos">RECLAMOS</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
            <li class="nav-item" >
              <a class="nav-link" href="../5.logout/logout.php">Logout_admin &nbsp;<i class="fas fa-sign-out-alt" ></i></a>
            </li>
      </ul>
    </div>
  </div>
</nav>

<center>
<div  class="container" style ="height:1000px"> 
<iframe id="iframe1" title="Inline Frame Example"style="width:100%;" height="100%" >
</iframe>
</div>
</center>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" hidden>Open modal for @mdo</button>

</body>
</html>
<script>
    $(document).ready(function () {
        $("#button").click();
        $("iframe1").attr("src","indice.php");
        $("#producto").on("click", function(){
            $("#iframe1").attr("src","../7.1_producto/producto.php"); 
        });
        $("#envio").on("click", function(){
          $("#iframe1").attr("src","../7.2_envio/envio.php");
        });
        $("#proveedor").on("click", function(){
          $("#iframe1").attr("src","../7.3_proveedor/proveedor.php");
        });
        $("#pedido").on("click", function(){
          $("#iframe1").attr("src","../7.4_pedido_p/pedido_p.php");
        });
        $("#reclamos").on("click",function(){
          $("#iframe1").attr("src","../7.5_reclamos/reclamos.php");
        });
    });
    
</script>

