<?php

/**
 * Crea un formulario que solicite el nombre y permita seleccionar un idioma (Español, Inglés y Francés). 
 * En función del idioma seleccionado, devolverá un saludo personalizado en dicho idioma (Hi Ana!).
 */
if (isset($_POST['nombre'])&&isset($_POST['idioma'])) {
    $nombre = $_POST['nombre'];
    $idioma = $_POST['idioma'];
    switch ($idioma) {
        case 'es':
            echo '<p>Hola ' . $nombre . '</p>';
            break;
        case 'en':
            echo '<p>Hi ' . $nombre . '</p>';
            break;
        case 'fr':
            echo '<p>Salut ' . $nombre . '</p>';
            break;
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>

<body>
    <form action="Ejercicio4.php" method="post">
        <label>Nombre: </label>
        <input type="text" name="nombre"><br>
        <p>
            Selecciona el idioma:<br>

            <input type="radio" name="idioma" value="es" checked> <label>Español</label> <br>
            <input type="radio" name="idioma" value="en"> <label>English</label><br>
            <input type="radio" name="idioma" value="fr"> <label>Français</label>
        </p>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>