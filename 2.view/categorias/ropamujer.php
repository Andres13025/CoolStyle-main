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
                    <li><a href="#" style="text-decoration: none; color: #fff;" >&#9898; ROPA DE MUJER </a></li>
                    <li><a href="ropahombre.php" style="text-decoration: none; color: #fff;">&#9898; ROPA DE HOMBRE</a></li>
                    <li><a href="ropaelegante.php" style="text-decoration: none; color: #fff;">&#9898; ROPA ELEGANTE</a></li>
                    <li><a href="ropadeportiva.php" style="text-decoration: none; color: #fff;">&#9898; ROPA DEPORTIVA</a></li>
                    <li><a href="accesorios.php" style="text-decoration: none; color: #fff;">&#9898; ACCESORIOS</a> </li>
                </ul>
            </nav>
        </div>
    </main>

    <br><br><br><br><br><br><br>
    <div>
    <h2>Ropa Mujer</h2>
      <p>
        Mujer
      </p>
    </div>

