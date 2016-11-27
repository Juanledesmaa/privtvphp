<?php

 /*LLamamos a la Conexion*/
require_once("Conexion.php");

$usuario= $_POST["usuario"];
$pass= $_POST["contraseña"];

            
    $result = mysql_query("SELECT * from clientes where usuario='" . $usuario . "'");
           
        if($row = mysql_fetch_array($result)){
            if($row['password'] == $pass){
                $verificar = true;
                session_start();
                $_SESSION['usuario'] = $usuario;
                header("Location: contenido.php");
                }else{
                header("Location: index.html");
            exit();
            }
            }else{
            header("Location: index.html");
        exit();
}

 mysqli_close($conectar);

?>