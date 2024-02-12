<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
    include_once('conexion.php');
    $sql = "SELECT id,nombre,apellido FROM usuarios";
    $resultado=$conexion->query($sql);
    if($resultado->num_rows > 0){
        echo "<div class='container mt-5'>";
            echo "<div class='row'>";
                echo "<div class='col-12'>";
                    echo "<table border='1px' class='table table-striped table-bordered'>";
                        echo "<thead class='table-primary'>";
                            echo "<tr class='table-primary'>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                            </tr>";
                            echo "</thead>";
                            while ($row = $resultado->fetch_assoc()) {
                                echo "<tr>"; 
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['nombre'] . "</td>";
                                echo "<td>" . $row['apellido'] . "</td>";
                                echo "</tr>";
                            }
                    echo "</table>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    }else {
        echo "Sin información ingresada aún";
    }
    $conexion->close();
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>