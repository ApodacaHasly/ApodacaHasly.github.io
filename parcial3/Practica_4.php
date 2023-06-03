<?php

$nombre = $_POST[ "nombre"];
$calificacion = 0;

$Pregunta1 = $_POST["Pregunta1" ];

 $Pregunta2 = $_POST["Pregunta2" ];
$Pregunta3 = $_POST["Pregunta3" ];
$Pregunta4 = $_POST["Pregunta4" ];
$Pregunta5 = $_POST["Pregunta5" ];
$Pregunta6 = $_POST["Pregunta6" ];
$Pregunta7 = $_POST["Pregunta7" ];
$Pregunta8 = $_POST["Pregunta8" ];
$Pregunta9 = $_POST["Pregunta9" ];
$Pregunta10 = $_POST["Pregunta10"];
$Pregunta11 = $_POST["Pregunta11"];

echo "<h2>Alumno: " .$nombre. "<h2>";

echo "<h3>Resultado de examen PHP</h3><hr>";

  echo "<h3> Pregunta 1, respuesta seleccionada:(".$Pregunta1.")</h3>";


if($Pregunta1 == "b"){
    $calificacion ++;
    echo "<img src= 'correcta.png' width='3%>'";
}else{
    echo "<p> Respuesta es (b) </p>";
    echo "<img src='incorrecto.png' width='3%'><hr>";
}
if($Pregunta2 == "c"){
    $calificacion ++;
    echo "<img src= 'correcta.png' width='3%>'";
}else{
    echo "<p> Respuesta es (c) </p>";
    echo "<img src='incorrecto.png' width='3%'><hr>";
}
if($Pregunta3 == "d"){
    $calificacion ++;
    echo "<img src= 'correcta.png' width='3%>'";
}else{
    echo "<p> Respuesta es (d) </p>";
    echo "<img src='incorrecto.png' width='3%'><hr>";
}
if($Pregunta4 == "c"){
    $calificacion ++;
    echo "<img src= 'correcta.png' width='3%>'";
}else{
    echo "<p> Respuesta es (c) </p>";
    echo "<img src='incorrecto.png' width='3%'><hr>";
}
if($Pregunta5 == "c"){
    $calificacion ++;
    echo "<img src= 'correcta.png' width='3%>'";
}else{
    echo "<p> Respuesta es (c) </p>";
    echo "<img src='incorrecto.png' width='3%'><hr>";
}
if($Pregunta6 == "b"){
    $calificacion ++;
    echo "<img src= 'correcta.png' width='3%>'";
}else{
    echo "<p> Respuesta es (b) </p>";
    echo "<img src='incorrecto.png' width='3%'><hr>";
}
if($Pregunta7 == "b"){
    $calificacion ++;
    echo "<img src= 'correcta.png' width='3%>'";
}else{
    echo "<p> Respuesta es (b) </p>";
    echo "<img src='incorrecto.png' width='3%'><hr>";
}
if($Pregunta8 == "a"){
    $calificacion ++;
    echo "<img src= 'correcta.png' width='3%>'";
}else{
    echo "<p> Respuesta es (a) </p>";
    echo "<img src='incorrecto.png' width='3%'><hr>";
}
if($Pregunta9 == "a"){
    $calificacion ++;
    echo "<img src= 'correcta.png' width='3%>'";
}else{
    echo "<p> Respuesta es (a) </p>";
    echo "<img src='incorrecto.png' width='3%'><hr>";
}
if($Pregunta10 == "c"){
    $calificacion ++;
    echo "<img src= 'correcta.png' width='3%>'";
}else{
    echo "<p> Respuesta es (c) </p>";
    echo "<img src='incorrecto.png' width='3%'><hr>";
}
if($Pregunta11 == "c"){
    $calificacion ++;
    echo "<img src= 'correcta.png' width='3%>'";
}else{
    echo "<p> Respuesta es (c) </p>";
    echo "<img src='incorrecto.png' width='3%'><hr>";
}


if($calificacion >= 0 && $calificacion <= 5){
    echo "<h3>Calificacion:" .$calificacion.", No aprobado (Se requiere estudiar)</h3>";
    echo "<img src=' malo.png' width='10%'><hr>";
}else if($calificacion >=6 && $calificacion <=8){
    echo "<h3>Calificacion:" .$calificacion.", Aprobado regular (Serequiere mas esfuerzo)</h3>";
    echo "<img src='regular.png' width=' 10%'><hr>";
}else if($calificacion >=9 && $calificacion <=10){
    echo "<h3>Calificacion:" .$calificacion.", Aprobado felicidades </h3>";
    echo "<img src='bien.jpeg' width=' 10%'><hr>";
    
}
    

?>

