<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 7</title>
    <link rel="stylesheet" href="css/bootstrap.css">
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
    </style>
</head>
<body>
    <?php
        $colores = ["#ff71ce", "#01cdfe", "#05ffa1", "#b967ff","#fffb96"];
    ?>
     <div class="container">
        <h1>Práctica 7 - Tablero de serpientes y escaleras</h1><hr>
            <form action="">
                <div class="row">
                <?php
                    for($i=100; $i>0; $i--){
                        if($i==2 || $i==7 || $i==8 || $i==15 || $i==36 || $i==54 || $i==71 || $i==78 || $i==87){
                            echo "<div class = 'col-1 card m-1 casilla escalera' style = 'background-color: ".$colores[rand(0,3)].";'>".$i."</div>";
                        }else if($i==16 || $i==46 || $i==49 || $i==62 || $i==64 || $i==74 || $i==95 || $i==99){
                            echo "<div class = 'col-1 card m-1 casilla serpiente' style = 'background-color: ".$colores[rand(0,3)].";'>".$i."</div>";
                        }else{
                            echo "<div class = 'col-1 card m-1 casilla' style = 'background-color: ".$colores[rand(0,4)].";'>".$i."</div>";
                        }
                    }
                ?>
                </div>
            </form>
     </div>
</body>
</html>