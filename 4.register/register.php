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
            <form action="recibir_registrarse.php" method="post">
                <input required name="nombre" class="caja" placeholder="Nombre Completo" type="text">
                
                <input required name="usuario" class="caja" placeholder="Correo Electronico" type="text">
                
                <input required name="pass" class="caja" placeholder="Contraseña" type="password">

                <input required id="boton_register" class="boton" type="submit" value="Registrate">
            </form>
            <p> Aceptar <a href="../2.view/reg/politicas.php"><b><i>Al registrarse Aceptar los Terminos Y Condiciones de privacidad</i></b></a></p>
            <p id="final">¿Ya tienes una cuenta? <a href="../3.login/login.php">Iniciar Sesion</a></p>
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