<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../2.view/css/registro.css"> 
</head>
<body>
    <section>
        <div>
            <h1>Registrate</h1>
            <form action="../controller/recibir_registrarse.php" method="post">
                <input name="nombre" class="caja" placeholder="Nombre Completo" type="text">
                
                <input name="usuario" class="caja" placeholder="Correo Electronico" type="text">
                
                <input name="pass" class="caja" placeholder="Contraseña" type="password">

                <input class="boton" type="submit" value="Registrate">
            </form>
            <p>Al registrarse, aceptas nuestras Condiciones de uso y Politicas de privacidad</p>
            <p id="final">¿Ya tienes una cuenta? <a href="login.php">Iniciar Sesion</a></p>
        </div>
    </section>
    <?php
        if(!empty($message)):
    ?>
    <p><?php $message ?></p>
    <?php
        endif;
    ?>
</body>
</html>