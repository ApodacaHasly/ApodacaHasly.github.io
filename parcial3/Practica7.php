<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 7</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        .casilla{
            height: 100px;
            font-weight: bold;
        }
        .escalera{
            background-image: url('escalera.png');
            background-size: cover;
        }
        .serpiente{
            background-image: url('serpiente.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center; 
        }
        .ficha{
            background-image: url('ficha.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Práctica 7 - Tablero de serpientes y escaleras</h1><hr>
        <form action="Practica7.php" method="POST">
                <input type="submit" value="Jugar" class="btn btn-success" style="background-color:#ff71ce"><hr>
            <div class="row">
            <?php
             $colores = ["#ffd4e5", "#d4ffea", "#eecbff", "#feffa3","#dbdcff"];
                if(isset($_POST["casilla"])){
                $dado = rand(1,12);
                echo "<h2>Resultado del DADO =".$dado."</h2>";
                $casilla = $dado + intval($_POST["casilla"]);
                echo "<h3>El jugador estaba en la casilla".intval($_POST ["casilla"])."y paso a la casilla".$casilla."</h3>";
                //Valida si gano el jugador 
                if($casilla >=100){
                echo "<h1> El jugador gano</h1>";
                $casilla = 100;
            }
            //Valida la escalera de la casilla 2
            if($casilla ==2 ){
                $casilla =5;
                echo "<h3> El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la escalera de la casilla 7
            if($casilla ==7 ){
                $casilla =13;
                echo "<h3> El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la escalera de la casilla 15
            if($casilla ==15 ){
                $casilla =22;
                echo "<h3> El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la escalera de la casilla 32
            if($casilla ==32 ){
                $casilla =35;
                echo "<h3> El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la escalera de la casilla 36
            if($casilla ==36 ){
                $casilla =38;
                echo "<h3> El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la escalera de la casilla 40
             if($casilla ==40 ){
                $casilla =45;
                echo "<h3> El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la escalera de la casilla 54
             if($casilla == 54 ){
                $casilla =60;
                echo "<h3> El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la escalera de la casilla 71
             if($casilla == 71 ){
                $casilla =75;
                echo "<h3> El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la escalera de la casilla 78
             if($casilla == 78 ){
                $casilla =84;
                echo "<h3> El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la escalera de la casilla 87
            if($casilla == 87 ){
                $casilla =93;
                echo "<h3> El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la serpiente de la casilla 23
            if($casilla == 23 ){
                $casilla =3;
                echo "<h3> El jugador cayo en una <img src='serpiente.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la serpiente de la casilla 46
            if($casilla == 46 ){
                $casilla =30;
                echo "<h3> El jugador cayo en una <img src='serpiente.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la serpiente de la casilla 49
            if($casilla == 49 ){
                $casilla =25;
                echo "<h3> El jugador cayo en una <img src='serpiente.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la serpiente de la casilla 62
            if($casilla == 62 ){
                $casilla =50;
                echo "<h3> El jugador cayo en una <img src='serpiente.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la serpiente de la casilla 64
            if($casilla == 64 ){
                $casilla =40;
                echo "<h3> El jugador cayo en una <img src='serpiente.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la serpiente de la casilla 90
            if($casilla == 90 ){
                $casilla =10;
                echo "<h3> El jugador cayo en una <img src='serpiente.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la serpiente de la casilla 95
            if($casilla == 95 ){
                $casilla =5;
                echo "<h3> El jugador cayo en una <img src='serpiente.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            //Valida la serpiente de la casilla 99
            if($casilla == 99 ){
                $casilla =1;
                echo "<h3> El jugador cayo en una <img src='serpiente.png' width='50px'> y subio a la casilla ".$casilla."</h3>";
            }
            




            }else{
              $casilla = 0;
           }
           for($i=100; $i>0; $i--){
            if($casilla == $i){
                echo "<div class = 'col-1 card m-1  casilla ficha' style = 'background-color: ".$colores[rand(0,4)].";'>".$i."</div>";
                }else if($i==2 || $i==7 || $i==32 || $i==15 || $i==36 || $i==54 || $i==71 || $i==78 || $i==87 || $i==40){
                    echo "<div class = 'col-1 card m-1 casilla escalera' style = 'background-color: ".$colores[rand(0,4)].";'>".$i."</div>";
                }else if($i==23 || $i==46 || $i==49 || $i==62 || $i==64 || $i==90 || $i==95 || $i==99){
                     echo "<div class = 'col-1 card m-1 casilla serpiente' style = 'background-color: ".$colores[rand(0,4)].";'>".$i."</div>";
                }else{
                    echo "<div class = 'col-1 card m-1 casilla' style = 'background-color: ".$colores[rand(0,4)].";'>".$i."</div>";
                    }
                }
            ?>
            </div>
                <input type="hidden" name="casilla" value="<?php echo $casilla; ?>">
        </form>
   </div>
</body>
</html>