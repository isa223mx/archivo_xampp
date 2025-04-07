<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = strtoupper($_POST['p_name']);
    $primerApellido = strtoupper($_POST['p_apellido']);
    $segundoApellido = strtoupper($_POST['s_apellido']);
    $dia = str_pad($_POST['fecha'], 2, '0', STR_PAD_LEFT);
    $mes = str_pad($_POST['mes'], 2, '0', STR_PAD_LEFT);
    $anio = substr($_POST['anio'], -2);
    $sexo = strtoupper(substr($_POST['sexo'], 0, 1));
    $estado = strtoupper($_POST['estado']);
    $verificador = 'A5';

    
    $curp = substr($primerApellido, 0, 2) .
            substr($segundoApellido, 0, 1) .
            substr($nombre, 0, 1) .
            $anio . $mes . $dia .
            $sexo .
            substr($estado, 0, 2) .
            substr($primerApellido, 2, 1) .
            substr($segundoApellido, 2, 1) .  
            substr($nombre, 2, 1) .
            $verificador;


    echo "<h1>Tu CURP es: $curp</h1>";
} else {
    echo "Método no permitido.";
}
?>