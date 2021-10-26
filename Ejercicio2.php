<?php
//Ejercicio 2
/* Crea un formulario donde se pidan las notas que has sacado 
en todas las asignaturas del curso. En la página PHP que recoge 
los datos, mostrar por pantalla la media de las notas y si todas 
las asignaturas están aprobadas. */

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Ejercicio2Recibe.php" method="POST">
        DWS: <input type="text" name="dws">
        DWC: <input type="text" name="dwc">
        DIW: <input type="text" name="diw">
        DAW: <input type="text" name="daw">
        EIE: <input type="text" name="eie">
        <input type="sumit" value ="Enviar">
    </form>
</body>
</html>