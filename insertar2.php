<?php

include("conectar.php");
include("menu.php");
$bd = conectar();
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
?>
<h1> </h1>
<h3>Resultado de agregar usuario</h3>
<hr>
<?php

$sql = "insert into usuarios values ('','$nombre','$correo','$telefono')";
try {
        $res = mysqli_query($bd, $sql);
        if (!$res) {
                echo "<div class='alert alert-danger' role='alert'>
                    <h4 class='alert-heading'>Error</h4>
                    <p>Error de registro.</p>
                    <hr>
                    <p class='mb-0'>El usuario no se pudo registrar revisa nuevamente los datos.</p>
                    </div>";
        } else {
                echo "<div class='alert alert-success' role='alert'>
                    <h4 class='alert-heading'>¡Bien hecho!</h4>
                    <p>Registro exitoso.</p>
                    <hr>
                    <p class='mb-0'>El usuario se ha registrado con exito.</p>
                </div>";
        }
} catch (\Throwable $th) {
        echo "<div class='alert alert-danger' role='alert'>
                    <h4 class='alert-heading'>Error</h4>
                    <p>Numero de telefono duplicado.</p>
                    <hr>
                    <p class='mb-0'>Los datos ingrsados ya se encuentran en nuestra base de datos, por favor verifica nuevamente los datos ingresados.</p>
                </div>";
}
mysqli_close($bd);
?>