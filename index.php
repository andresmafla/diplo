<!DOCTYPE html>
<html>

<head>
        <title>Insertar Usuario</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
        <div class="container">
                <!--tomamos los datos del usuario activo -->
                <?php
                include("conectar.php");
                include("menu.php");
                $bd = conectar();
                ?>

                <h1> <br></h1>
                <h3>Listar Usuarios</h3>
                <hr>

                <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                                        <table class="table table-striped">
                                                <thead>
                                                        <tr>
                                                                <th>ID</th>
                                                                <th>NOMBRE</th>
                                                                <th>CORREO</th>
                                                                <th>CELULAR</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        <?php
                                                        $sql = "select * from usuarios";
                                                        $datos = mysqli_query($bd, $sql);
                                                        while ($arr = mysqli_fetch_array($datos)) {
                                                                echo "<tr>";
                                                                echo "<td>$arr[0]</td>";
                                                                echo "<td>$arr[1]</td>";
                                                                echo "<td>$arr[2]</td>";
                                                                echo "<td>$arr[3]</td>";
                                                                echo "</tr>";
                                                        }
                                                        ?>
                                                </tbody>
                                        </table>
                                <?php
                                
                                ?>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6"></div>
                </div>


                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>