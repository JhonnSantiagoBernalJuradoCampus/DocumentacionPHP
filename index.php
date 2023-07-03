<?php
    /**
     * *sprintf()
     * ? Esta función es similar a printf(), pero en lugar de imprimir la cadena formateada en la salida estándar, devuelve la cadena formateada como resultado.
     */
    $texto = "Mundo";
    $mensaje = sprintf("Hola %s", $texto);
    echo $mensaje;
?>