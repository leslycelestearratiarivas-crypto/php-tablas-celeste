<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <style>
        body {
            background-color: #0000FF; /* Fondo azul */
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            margin: 0;
            padding: 20px;
        }
        h1 {
            margin-bottom: 30px;
            font-size: 40px;
            text-shadow: 2px 2px 4px #000;
        }
        .contenedor {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px; /* Espacio entre tablas */
        }
        .tabla {
            border: 2px solid white;
            padding: 10px;
            width: 120px;
        }
        .tabla div {
            font-family: monospace; /* Letra tipo código para que se alineen los números */
            font-size: 14px;
            margin-bottom: 3px;
        }
    </style>
</head>
<body>

    <h1>Tabla de multiplicar</h1>

    <div class="contenedor">
        <?php
        // Bucle para crear las tablas del 1 al 10
        for ($i = 1; $i <= 10; $i++) {
            echo "<div class='tabla'>";
            // Bucle para multiplicar del 1 al 10
            for ($j = 1; $j <= 10; $j++) {
                $resultado = $i * $j;
                echo "<div>{$i} x {$j} = {$resultado}</div>";
            }
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>