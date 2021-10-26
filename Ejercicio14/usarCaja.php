<?php
/**
 * 1_ Crear en un archivo una clase Caja que:
 * Tenga un constructor al que se le pasen los argumentos de ancho, alto y largo.
 * Tenga un método getCapacidad que calcule el volumen que cabe en la caja.
 * 2_ Crear un script en otro archivo que llame a dicha clase para comprobar su funcionamiento.
*/
require_once('Caja.php');
$my_caja = new caja(2,3,4);
echo $my_caja->getCapacidad();