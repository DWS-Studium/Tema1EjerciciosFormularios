<HTML>
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