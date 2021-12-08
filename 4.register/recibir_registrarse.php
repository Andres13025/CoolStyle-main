<?php
    // require_once 'conexion.php';

    // $mensaje='';

    // if (!empty($_POST['nombre']) && !empty($_POST['usuario']) && !empty($_POST['pass'])){
    //     $sql = "INSERT INTO cliente (nombre, usuario, pass) VALUES (:nombre, :usuario, :pass)";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bindParam(':nombre',$_POST['nombre']);
    //     $stmt->bindParam(':usuario',$_POST['usuario']);
    //     $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);
    //     $stmt->bindParam(':pass', $password);

    //     if($stmt->execute()){
    //         /*$mensaje = 'Successfully created new user';*/
    //         header('Location: ../3.login/login.php');
    //     }else{
    //         $mensaje = 'Sorry there must have been an issue creating your password';
    //     }

    // }
    // echo $mensaje;

    
    include_once "../controller/crud.php";
    $modelo_r = new administrar();

    if (!empty($_POST['nombre']) && !empty($_POST['usuario']) && !empty($_POST['pass'])){
        $resultado = $modelo_r->agregar_usuarionuevo($_POST['nombre'], $_POST['usuario'], $_POST['pass']);
    }else{
        echo "error";
    }
?>