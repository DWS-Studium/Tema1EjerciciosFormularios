<?php
/**
 * 1_ Crear en un archivo una clase Caja que:
 * Tenga un constructor al que se le pasen los argumentos de ancho, alto y largo.
 * Tenga un método getCapacidad que calcule el volumen que cabe en la caja.
 * 2_ Crear un script en otro archivo que llame a dicha clase para comprobar su funcionamiento.
*/
class Caja{
    private $ancho;
    private $alto;
    private $largo;

    public function __construct($ancho, $alto, $largo)
    {
        $this->ancho=$ancho;
        $this->alto=$alto;
        $this->largo=$largo;
    }
    public function getCapacidad(){
        return $this->ancho * $this->alto * $this->largo;
    }

    /**
     * Get the value of ancho
     */
    public function getAncho()
    {
        return $this->ancho;
    }

    /**
     * Set the value of ancho
     *
     * @return  self
     */
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;

        return $this;
    }

    /**
     * Get the value of alto
     */
    public function getAlto()
    {
        return $this->alto;
    }

    /**
     * Set the value of alto
     *
     * @return  self
     */
    public function setAlto($alto)
    {
        $this->alto = $alto;

        return $this;
    }

    /**
     * Get the value of largo
     */
    public function getLargo()
    {
        return $this->largo;
    }

    /**
     * Set the value of largo
     *
     * @return  self
     */
    public function setLargo($largo)
    {
        $this->largo = $largo;

        return $this;
    }
}