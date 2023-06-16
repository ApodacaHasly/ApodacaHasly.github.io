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
    </style>
</head>
<body>
    <?php
        $colores = ["#ffd4e5", "#d4ffea", "#eecbff", "#feffa3","#dbdcff"];
    ?>
     <div class="container">
        <h1>Práctica 7 - Tablero de serpientes y escaleras</h1><hr>
            <form action="practica7.php" method="POST">
                    <input type="submit" value="Jugar" class="btn btn-success"><hr>
                <div class="row">
                <?php
                    for($i=100; $i>0; $i--){
                        if($i==2 || $i==7 || $i==32 || $i==15 || $i==36 || $i==54 || $i==71 || $i==78 || $i==87 || $i==40){
                            echo "<div class = 'col-1 card m-1 casilla escalera' style = 'background-color: ".$colores[rand(0,3)].";'>".$i."</div>";
                        }else if($i==23 || $i==46 || $i==49 || $i==62 || $i==64 || $i==90 || $i==95 || $i==99){
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