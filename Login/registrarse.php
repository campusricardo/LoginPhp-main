<?php 
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST["registrarse"])){
    require_once("RegistroUser.php");

    $registrar = new RegistroUser();

    $registrar->setIdCamper($_POST["idEstudiante"]);
    $registrar-> setEmail($_POST["email"]);
    $registrar-> setUsername($_POST["username"]);
    $registrar-> setPassword($_POST["password"]);

    $registrar-> insertData();

    echo "<script> alert('El usuario se registro correctamente'); document.location = 'loginRegister.php' </script>";
}

?>