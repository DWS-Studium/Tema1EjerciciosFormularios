<HTML>
    <!-- Crea un formulario que solicite el nombre y permita seleccionar 
    un idioma (Español, Inglés y Francés). En función del idioma seleccionado, 
    devolverá un saludo personalizado en dicho idioma (Hi Ana!). -->
<head>
<title>Respuesta a la petición de datos</title>
</head>
<body>
<?php
$nombre=$_POST['nombre'];
$idioma=$_POST['idioma'];
switch ($idioma){
    case 'es':
        echo '<p>Hola '.$nombre.'</p>';
        break;
    case 'en':
        echo '<p>Hi '.$nombre.'</p>';
        break;
    case 'fr':
        echo '<p>Salut '.$nombre.'</p>';
        break;
}
?>
</body>
</HTML>