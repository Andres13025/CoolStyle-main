<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../2.view/css/estilos_login.css">
</head>
<body>
    <section>
        <form action="../6.verificacion/verificacion.php" method="post">
            <div class="contenido">
                <h1 class="titulo">Inicio</h1>
                    <input autofocus type="text" class="caja1" placeholder="Username o email" name="usuario" value="" required><br>
            
                    <input type="password" class="caja2" placeholder="Password" name="pass" value="" required><br>
        
                    <input class="boton" type="submit" value="Ingresar"><br>
                    
                <a class="direccion" href="../4.register/register.php">crear cuenta</a>
            </div>   
        </form>
    </section>
</body>
</html>