<?php

/**
 * Hacer un euroconversor de euros:
 * 1. De euros a pesetas.
 * 2. De euros a pesetas o a dólares (que el usuario elija una moneda).
 * 3. Realizar el conversor de monedas en una única página.
 */
if (isset($_POST['divisa']) && isset($_POST['euros'])) {
    $divisa = $_POST['divisa'];
    $euros = $_POST['euros'];
    $conv = 0.0;
    if ($divisa == "peseta") {
        $conv = $euros * 166.386;
    } else if ($divisa == "dolar") {
        $conv = $euros * 1.16;
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio9</title>
</head>

<body>
    <form action="Ejercicio9.php" method="post">
        <label>Euros: </label>
        <input type="text" name="euros"><br />
        <?php
        if ($divisa == "peseta") {
            echo '<p>' . $conv . ' Pesetas</p>';
        } else if ($divisa == "dolar") {
            echo '<p>' . $conv . ' Dolares</p>';
        }
        ?>
        <p>De euros a:</p>
        <div>
            <input type="radio" id="peseta" name="divisa" value="peseta" checked>
            <label for="peseta">Peseta</label>
        </div>

        <div>
            <input type="radio" id="dolar" name="divisa" value="dolar">
            <label for="dolar">Dolar</label>
        </div>
        <!-- Boton Enviar -->
        <div class="col-12 col-lg-1 pt-2 pb-5">
            </br><input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>