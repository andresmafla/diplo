<?php
    function conectar(){
        $bd = mysqli_connect("finalbd.cmvwerakgrih.us-east-1.rds.amazonaws.com","root","Hola2023*", "diplomado");
        if (!$bd) {
            echo "<h3>Error de conexion</h3>";
            return NULL;
        }else{
            return $bd;
        }
    }
?>