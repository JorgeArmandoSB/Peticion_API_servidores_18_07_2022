<?php
    header('Access-Control-Allow-Origin: *');
    $_DATA = file_get_contents("php://input");
    $_DATA = json_decode($_DATA, true);
    extract($_DATA);
    echo "Hola usuario $nombres $apellidos soy el archivo php recolectado tus datos #$cedula tu numero de identificacion  ". " ciudad de expedicion $ciudadexp en la fecha $expedicion nacido en la ciudad de $ciudad  tu fecha de nacimiento es:$fecha". " direccion actual donde vives $direccion tu numero de contacto es $movil y finalmente tu correo electronico es $email servidor = ".$_SERVER['HTTP_HOST'];
?>