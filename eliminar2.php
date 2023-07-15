<h3>Resultado de la eliminación</h3>
<?php
        include("conectar.php");
        include("menu.php");
        $bd = conectar();
        $id=$_POST["id"];

        $sql = "delete from usuarios where id=$id";
        $res = mysqli_query($bd,$sql);

        if (!$res){
            echo "<div class='alert alert-danger' role='alert'>
                <h4 class='alert-heading'>Error</h4>
                <p>Registro no eliminado.</p>
                <hr>
                <p class='mb-0'>Upps, tenemos problemas el usuario no ha sido eliminado.</p>
            </div>";
        
        }
        else {
            echo "<div class='alert alert-success' role='alert'>
                <h4 class='alert-heading'>¡Bien hecho!</h4>
                <p>Eliminacion exitosa.</p>
                <hr>
                <p class='mb-0'>El usuario se a eliminado con exito.</p>
            </div>";
        }
        mysqli_close($bd);
?>
<a href="index.php">Volver</a>


