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
    <title>Filtrando elementos por categorias</title>

	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>
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
	<br><br><br>
    
	<div class="wrap">
		<h1>Escoge un producto</h1>
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todo</a>
				<a href="#" class="category_item" category="zapatos">Zapatos</a>
				<a href="#" class="category_item" category="tacones">Tacones</a>
				<a href="#" class="category_item" category="camisas">Camisas</a>
				<a href="#" class="category_item" category="pantalones">Pantalones</a>
				<a href="#" class="category_item" category="pantalonetas">Pantalonetas</a>
				<a href="#" class="category_item" category="accesorios">Accesorios</a>
				<a href="#" class="category_item" category="chaquetas">Chaquetas</a>
				<a href="#" class="category_item" category="abrigos">Abrigos</a>
				<a href="#" class="category_item" category="gaban">Gaban</a>
			</div>
			<section class="products-list">
				<div class="product-item" category="zapatos">
					<img src="images/zapatos.png" alt="" >
					
				</div>
				<div class="product-item" category="zapatos">
					<img src="images/zapatos1.png" alt="" >
					
				</div>
				<div class="product-item" category="tacones">
					<img src="images/tacones.png" alt="" >
					
				</div>
				<div class="product-item" category="tacones">
					<img src="images/tacones1.png" alt="" >
					
				</div>
				<div class="product-item" category="camisas">
					<img src="images/camisa.png" alt="" >
					
				</div>
				<div class="product-item" category="camisas">
					<img src="images/camisa1.png" alt="" >
					
				</div>
				<div class="product-item" category="pantalonetas">
					<img src="images/pantaloneta.png" alt="" >
					
				</div>
				<div class="product-item" category="pantalonetas">
					<img src="images/pantaloneta1.png" alt="" >
					
				</div>
				<div class="product-item" category="pantalones">
					<img src="images/pantalon.png" alt="" >
					
				</div>
				<div class="product-item" category="pantalones">
					<img src="images/pantalon1.png" alt="" >
					
				</div>
				<div class="product-item" category="accesorios">
					<img src="images/gafas.png" alt="" >
					
				</div>
				<div class="product-item" category="accesorios">
					<img src="images/bufanda.png" alt="" >
					
				</div>
				<div class="product-item" category="accesorios">
					<img src="images/cinturon.png" alt="" >
					
				</div>
				<div class="product-item" category="chaquetas">
					<img src="images/chaqueta.png" alt="" >
					
				</div>
				<div class="product-item" category="chaquetas">
					<img src="images/chaqueta1.png" alt="" >
					
				</div>
				<div class="product-item" category="abrigos">
					<img src="images/abrigo.png" alt="" >
					
				</div>
				<div class="product-item" category="abrigos">
					<img src="images/abrigo1.png" alt="" >
					
				</div>
				<div class="product-item" category="gaban">
					<img src="images/gaban.png" alt="" >
					
				</div>
				<div class="product-item" category="gaban">
					<img src="images/gaban1.png" alt="" >
					
				</div>
			</section>
		</div>
	</div>

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
                    <li><a href="../categorias/ropamujer.php" style="text-decoration: none; color: #fff;" >&#9898; ROPA DE MUJER </a></li>
                    <li><a href="../categorias/ropahombre.php" style="text-decoration: none; color: #fff;">&#9898; ROPA DE HOMBRE</a></li>
                    <li><a href="../categorias/ropaelegante.php" style="text-decoration: none; color: #fff;">&#9898; ROPA ELEGANTE</a></li>
                    <li><a href="../categorias/ropadeportiva" style="text-decoration: none; color: #fff;">&#9898; ROPA DEPORTIVA</a></li>
                    <li><a href="../categorias/accesorios" style="text-decoration: none; color: #fff;">&#9898; ACCESORIOS</a> </li>
                </ul>
            </nav>
        </div>
    </main>
    <br><br><br>
<style>
	body{
	background: white;
	font-family: 'Open Sans', sans-serif;
}
	.category_list{
	display: flex;
	flex-direction: column;
	width: 18%;
}

.category_list .category_item{
	display: block;
	width: 90%;
	padding: 15px 0;
	margin-bottom: 20px;
	background-color:black;

	text-align: center;
	text-decoration: none;
	color: white;
}

.category_list .ct_item-active{
	background: black;
}

</style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>


