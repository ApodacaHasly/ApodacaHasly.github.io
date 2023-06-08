<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego del Ahorcado</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <?php
    $nombre = $_POST["jugador"];
    $palabra = $_POST["palabra"];
    $Oportunidades = $_POST["Oportunidades"];
    ?>

    <div class="container">
        <div class="row">
            <h1>Juego del Ahorcado</h1><hr>
            <h4>Nombre del Jugador: <?php echo $nombre; ?></h4>
            <h4>Oportunidades: <?php echo $Oportunidades; ?></h4>
            <?php
            $letras = str_split($palabra); // [0] = 'H', [1]= 'O', [2] = 'L', [3] = 'A';
            for($i=0; $i<(count($letras)); $i++){
                echo "<input type=' text' name=' frase[ ]'; style='width:5%;'>" ;
            }

            ?>
        </div>

        <div class="row mt-4">
            <input type="text" name="letra" maxlength="1">
            <input type="submit" value="Enviar letra " class="btn btn-primary" style="width:10%">
        </div>    
    </div>
    
    
</body>
</html>