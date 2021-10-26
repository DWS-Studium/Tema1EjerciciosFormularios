<?php

/**
 * Crea un formulario donde pregunte al usuario cuál es su equipo favorito 
 * y en función de cuál elija muestre una pantalla con el fondo dibujado del color del equipo.
 */
if (isset($_POST['equipo'])) {
    $equipo=$_POST['equipo'];
    $color="#FFFFFF";
    switch($equipo){
        case "betis":
            $color="#42C300";
            break;
        case "sevilla":
            $color="#C30006";
            break;
        case "barcelona":
            $color="#002291";
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
    <title>Ejercicio7</title>
</head>
<?php
echo '<body bgcolor='.$color.'>';
?>
    <form action="Ejercicio7.php" method="post">
        <label>¿De que equipo eres?</label></br>
            <select id="equipo" name="equipo" required>
                <option value="betis">Betis</option>
                <option value="sevilla">Sevilla</option>
                <option value="barcelona">Barcelona</option>
            </select>
             <!-- Boton Enviar -->
             <div class="col-12 col-lg-1 pt-2 pb-5">
                            </br><input type="submit" value="Enviar">
                        </div>
    </form>
</body>

</html>