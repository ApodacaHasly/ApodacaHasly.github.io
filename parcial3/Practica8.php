<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 8 - Juego de la Loteria</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
         .ficha{
            background-image: url('ficha.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center; 
        }
        .color{
            opacity: 0.3;
        }
    </style>
</head>
<body style="background-color:#b6fcd5">
<div class="container">
        <h1>Juego de la Loteria</h1>
    <form action="Practica8.php" method="POST">
        <?php
         if(isset($_POST["carta1"])){
            $carta1 = $_POST["carta1"];
            $carta2 = $_POST["carta2"];
            //Aquí empieza la lógica del juego
            $carta=randa(1,54);
            if(isset($_POST["cartas_dadas"])){
                $cartas_dadas = $_POST ["cartas_dadas"];

            }else{
                $cartas_dadas = [];
            }
           

            array_push($cartas_dadas, $carta);

         }else {
            $carta1 = [];
            $total = 0;
            while($total < 16){
                $numero = rand(1,54);
                if(array_search($numero, $carta1) === false){
                    $carta1[$total] = $numero;
                    $total ++;
                }
            }
         }
         $carta2 = [];
            $total = 0;
            while($total < 16){
                $numero = rand(1,54);
                if(array_search($numero, $carta2) === false){
                    $carta2[$total] = $numero;
                    $total ++;
                }
            }
        ?>
            <input type="submint" value="Dar carta" name="carta" class="btn btn-primary" style="background-color:#ff71ce">
        <div class="row">
            <div class="col-6">
                <div class="row m-1">
                        <?php
                         //Pintar Carta 1 
                        for($i=0; $i<16; $i++){
                            if(array_search($carta1[$i], $cartas_dadas) ===false){
                                echo "<div class='col-3 p-0'><img src='fotos_loteria/".$carta1[$i].".jpeg' class='img-thumbnail'></div>";
                            }else{
                                echo "<div class='col-3 p-0'><img src='fotos_loteria/".$carta1[$i].".jpeg' class='img-thumbnail'></div>";
                            }    
                            echo "<input type='hidden' name='cartas_dadas[]' value='" .$carta1."'>"; 
                            echo "<input type='hidden' name='carta1[]' value='" .$carta1[$i]."'>"; 
                        }
                        ?>
                </div>
            </div>
            <div class="col-6">
                <div class="row m-1">
                            <?php
                             //Pintar Carta 2
                        for($i=0; $i<16; $i++){
                            $numero = rand(1,54);
                            echo "<div class='col-3 p-0'><img src='fotos_loteria/".$carta2[$i].".jpeg' class='img-thumbnail'></div>";
                            echo "<input type='hidden' name='carta2[]' value='" .$carta2[$i]."'>";
                        }
                        ?>
                </div>
            </div>
        </div>   
    </form>
</div>
</body>
</html>