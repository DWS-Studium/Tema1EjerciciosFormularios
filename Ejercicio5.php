<?php
/**
 * Crea un formulario que solicite un nombre de usuario y contraseña. 
 * Se debe comprobar que ningún campo se envíe vacío y que la contraseña comience por un número. 
 * Si todo es correcto, se indicará mediante un mensaje. En caso contrario, se mostrará un mensaje de error.
 */
if (isset($_POST['nombre'])&&isset($_POST['passwd'])) {
    $usuario = $_POST['nombre'];
    $password = $_POST['passwd'];
 
    $primer_caracter = substr($password,0,1);
    if($usuario != "" && $password != "" && is_numeric($primer_caracter)) {
        echo "Es correcto";
    } else {
        echo "Error";
    }
  }else{
    echo '<p>Usuario o contraseña incorrectos</p>';
}

 ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>

<body>
    <form action="Ejercicio5.php" method="post">
        <label>Nombre: </label>
        <input type="text" name="nombre" pattern="[0-9]*[A-z]*" minlength="1" require><br>
        <label>Contraseña: </label>
        <input type="password" name="passwd" pattern="[0-9]{1}[0-9]*[A-z]*" minlength="1" require><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>

</html>