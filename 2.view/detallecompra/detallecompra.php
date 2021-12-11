<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coolstyle</title>
    <link rel="stylesheet" href="../css/estilos_index.css">
    <link rel="icon" type="image/png" href="../image/index/favicon3.png"/>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f91ac1b471.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilosdetallesdecompra.css">
    <link rel="icon" type="image/png" href="favicon3.png"/>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    
   <style>
      #titlle{
        margin-top: 100px;
      }

    .cajasterminos{
      margin: 5px auto;
      width: 95%;
      text-align: justify;
      }
    </style>
</head>
<body>

<div class="card12 " style="width: 50rem; left: 50%; position: absolute; top: 190px; background-color: #fff;
      background-clip: border-box;
      border: 0px solid rgba(0,0,0,.125);
      border-radius: .25rem; ">
      <h2>camiseta de algodon-nike</h2>
      <br>
      <H2>color <button type="button" class="btn btn-dark">negra</button><button type="button" class="btn btn-dark">amarrilla</button><button type="button" class="btn btn-dark">azul</button>
      <br>
      <h2>presio $$$$$$$</h2>
      <br>
      <h2>talla <button type="button" class="btn btn-warning">XL  </button><button type="button" class="btn btn-warning">L</button><button type="button" class="btn btn-warning">M</button><button type="button" class="btn btn-warning">S</button></h2>
      <br>
      <h2>tipo de envio</h2>
      <br>
      <h2> metodos de envio  </h2>
      <button type="button" class="btn btn-warning"><h1>COMPRAR</h1></button>
      
    </div>
    <div class="carrusel">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="width: 250px; height: 350px; display: block; left: 120px;">
    <ol class="carousel-indicators" style="left: 20%;">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active" style="display: flex;"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="width: 400px; height: 450px;">
      <div class="carousel-item active" style="width: 271px; border: solid;">
        <img src="camisanegra.PNG" class="d-block w-100%" alt="..." style="height: 400px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>camiseta nike</h5>
          <p>NEGRA</p>
        </div>
      </div>
      <div class="carousel-item" style="width: 271px; border: solid;">
        <img src="camisaamarilla.PNG" class="d-block w-100%" alt="..." style="height: 400px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>camiseta nike</h5>
          <p>AMARILLA</p>
        </div>
      </div>
      <div class="carousel-item" style="width: 271px; border: solid;">
        <img src="camisaazul.PNG" class="d-block w-100%" alt="..." style="height: 400px;" >
        <div class="carousel-caption d-none d-md-block">
          <H5>camiseta nike</H5>
          <p>AZUL</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev" style="left: 10%; height: 400px;" >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next" style="left: 80%; height: 400px;">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>









    <!-- BOTONES DE NAVEGACION -->
    <!-- -------------------------------------------------------------------------------- -->
    <div>
      <div >
        <header class="carrito">
          <a href="https://www.google.es">
            <input  type="image" src="../image/index/carrito.PNG.jpg" width="100px" height="60px">
          </a>
        </header>
      </div>
      <div >
          <header class="nombre" style="heigth:90px;" >
              <input type="image" src="../image/index/favicon2.png" width="130px" height="90px">
              <a href="../../index.php">
                <input type="image" src="../image/index/tituloCoolStyle.PNG" width="300px" height="90px" >
              </a>
          </header>
      </div>
      <div class="text-center">
          <header class="fondodelbuscador">
              <form action="">
                  <fieldset>
                      <br>
                      <input type="search" class="botonbuscador" value=""placeholder="Buscar...">
                      <button  type="submit" class="botondelbuscador" value="" >&#x2315;</button>
                  </fieldset>
              </form>
          </header>
      </div>
      <div >
          <header class="login">
              <a href="3.login/login.php">
                  <input type="image" src="../image/index/login.PNG" width="165px" height="50px">
              </a>
          </header>
          <header class="registro">
              <a href="4.register/register.php">
                  <input type="image" src="../image/index/registro.PNG" width="165px" height="50px">
              </a>
          </header>
      </div>
      <div >
          <header class="soporte">
              <a href="2.view/soporte/soporte.php">
                  <input type="image" src="../image/index/soporte.PNG" width="200px" height="90px">
              </a>
          </header>
      </div>
    </div>
    <!-- FIN DE LOS BOTONES -->
    <!-- -------------------------------------------------------------------------------- -->
    <!--menu-->
    <main>
        <div class="content-all">
            <header class="menupri" ></header>
            <input style="display: none" type="checkbox" id="check" >
            <label style="top: 98px; left: 20px; width:50px;" for="check" class="">&#x2630;</label>

            <?php if(isset($_SESSION['cliente'])): ?>
            <a href="5.logout/logout.php">
              <label style="top: 98px; left: 1000px; width:50px;">Logout_c</label>
            </a>
            <?php endif; ?>

            <nav class="menu">
                <ul>
                    <li><a href="ropamujer.php" style="text-decoration: none; color: #fff;" >&#9898; ROPA DE MUJER </a></li>
                    <li><a href="ropahombre.php" style="text-decoration: none; color: #fff;">&#9898; ROPA DE HOMBRE</a></li>
                    <li><a href="ropaelegante.php" style="text-decoration: none; color: #fff;">&#9898; ROPA ELEGANTE</a></li>
                    <li><a href="ropadeportiva.php" style="text-decoration: none; color: #fff;">&#9898; ROPA DEPORTIVA</a></li>
                    <li><a href="#" style="text-decoration: none; color: #fff;">&#9898; ACCESORIOS</a> </li>
                </ul>
            </nav>
        </div>
    </main>

    <br><br><br>
    <h2>DETALLE COMPRA</h2>
    <a href="../metodopago/metodopago.php">Boton de comprar</a>
    
    </html>

