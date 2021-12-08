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
    <div class="cajasterminos">
    <h2 id="titlle">Aviso de privacidad</h2>
      <p class="ali" >
        El tratamiento que realizará coolstyle., con la información personal será
        el siguiente: La recolección, almacenamiento, uso, circulación o
        supresión. La transmisión o transferencia se podrá realizar a terceros
        que la compañía considere pueden contribuir con las finalidades
        establecidas o para dar cumplimiento a la prestación del servicio
        acordado con el cliente.
        Las finalidades bajo las cuales se va a realizar el tratamiento de los
        datos son:
        Gestionar trámites como solicitudes, quejas y/o reclamos, gestionar las
        solicitudes de retracto; actividades de cobranza; consulta,
        almacenamiento, envío de comunicaciones a través de mensajes de
        texto y correos electrónicos, para fines internos como auditorías,
        desarrollar actividades fidelización o marketing; análisis de información
        tendiente a la prospección de clientes; análisis de datos e
        investigaciones para mejorar los productos o los canales de
        comercialización, para estudios de viabilidad en cuanto a nuevos
        productos o servicios; para llevar un historial de consumo de los
        clientes de las tiendas, de los clientes institucionales, de e-commerce y
        en general los clientes de cualquiera de los canales de contacto; para
        realizar ofrecimientos de promociones, productos, servicios o
        novedades de la compañía ajustados a sus necesidades; conservar
        registros históricos y mantener contacto comercial; crear copias de
        seguridad de la información de los datos personales de los clientes y
        entregarlos a otros proveedores, con quien contrata coolstyle., con el
        fin de almacenarlos, resguardarlos y garantizar la protección de la
        información; para la gestión del servicio postventa, lo que implica las
        tallas, la toma de medidas para el arreglo de las prendas compradas o
        para el cambio de los productos, en caso de aplicar. En general la
        información será objeto del tratamiento que se requiera con el fin de
        desarrollar el objeto social de Permoda Ltda. Las anteriores finalidades
        son enunciativas y no taxativas.
      </p>
    </div>
    <div class="cajasterminos">
    <h2>Estatus del servicio</h2>
      <p class="ali" >
      Debido a la emergencia sanitaria, estamos buscando optimizar nuestra
      comunicación para evitar la saturación de nuestros canales poderte
      brindar un mejor servicio, recuerda que nuestros tiempos de envío han
      cambiado ahora son de 7 a 10 días hábiles.
      Quisiéramos poder dar respuesta a todas tus preguntas de Servicio al
      Cliente vía
      WhatsApp, sin embargo por la alta congestión que presenta este canal
      te hacemos un par de recomendaciones:
      Si tu pedido no lleva más de 4 días, por favor confía en que las cosas
      van bien.
      Estamos informando el estado de cambio de tu pedido al correo
      electrónico que registraste, si no lo ves, por favor revisa el correo no
      deseado.
      Si tu consulta va más allá de un estado de pedido, te recomendamos
      utilices nuestro canal de Chat, en él te podemos ofrecer mejores
      tiempos de atención, incluso te recomendamos hacer consulta en este
      sitio de AYUDA que, estamos actualizándolo constantemente para ti.
      </p>
    </div>
    <div class="cajasterminos">
    <h2>Uso De Cookies</h2>
      <p>Una cookie es un pequeño archivo de texto que se introduce en tu ordenador la primera vez que visitas una página, en
          cada ordenador hay una carpeta destinada a guardar todas las cookies que se van introduciendo. Por favor, ten en cuenta
          que No puede haber virus en una cookie.</p>
      <h3>¿Para Que Sirve?</h3>
      <p>Sirve para que cuando vuelvas a entrar en la web podamos ofrecerte la información que más te interesa, ya que guarda
          información sobre un usuario. Para más información acerca de las cookies, visita la página www.allaboutcookies.org</p>
      <h3>Eliminacion de Cookies es los Distintos Navegadores</h3>
      <h4>Internet Explorer:</h4>
      <p>Hay que acudir desde el menú Herramientas a Opciones de Internet, una vez de allí, a la pestaña de Privacidad, donde se
          puede adaptar el nivel de seguridad que deseamos para navegar por Internet. Además, en la pestaña General del mismo
          menú se pueden borrar tanto las cookies como el historial con las páginas visitadas.</p>
      <h4>Internet Explorer 8:</h4>
      <p>Se incluye el modo de navegación In Private que evita que el navegador almacene cookies, archivos temporales de
          Internet, historial y otros datos.</p>
      <h4>Firefox:</h4>
      <p>Desde el menú Herramientas seleccionamos Opciones, y por último, Privacidad desde donde el usuario puede decidir qué
          cookies acepta, de quién y hasta cuándo quiere almacenarlas en su equipo. Asimismo, si se pulsa el botón eliminar
          cookies de forma individual, se accede a otro menú que permite borrar estos ficheros del ordenador. Firefox 3.5 incluye la
          posibilidad de navegación privada desde el menú herramientas.</p>
      <h4>Google Chrome:</h4>
      <p>Hay que seleccionar el menú Herramientas, luego Opciones, hacer clic en la pestaña Avanzadas e ir a la sección
          Seguridad, desde Configuración de cookies, hacer clic en el botón Mostrar cookies y eliminar todas las cookies de la lista,
          haciendo clic en el botón Eliminar todo. También puedes eliminar todas las cookies que hayas creado en un periodo
          determinado con la opción Eliminar datos de navegación del menú Herramientas.</p>
      <h4>Opera(Windows):</h4>
      <p>Hacer clic en el menú Herramientas, luego seleccionar eliminar información personal, a continuación volver a hacer clic
          en Opciones detalladas, seleccionar Borrar todas las huellas, desmarcar la casilla del resto de opciones de Datos
          privados que no desee eliminar y clicar en Eliminar.</p>
      <h4>Safari(Windows):</h4>
      <p>Hacer clic en el menú Edición, seleccionar Preferencias, luego Seguridad, mostrar cookies, clicar en Eliminar todo y
          aceptar para cerrar la lista de cookies.</p>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>


