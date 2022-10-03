<?php

class Coche
{
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;

    function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }


    //GETTER & SETTERS

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of velocidad
     */
    public function getVelocidad()
    {
        return $this->velocidad;
    }

    /**
     * Set the value of velocidad
     *
     * @return  self
     */
    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;

        return $this;
    }

    /**
     * Get the value of caballaje
     */
    public function getCaballaje()
    {
        return $this->caballaje;
    }

    /**
     * Set the value of caballaje
     *
     * @return  self
     */
    public function setCaballaje($caballaje)
    {
        $this->caballaje = $caballaje;

        return $this;
    }

    /**
     * Get the value of plazas
     */
    public function getPlazas()
    {
        return $this->plazas;
    }

    /**
     * Set the value of plazas
     *
     * @return  self
     */
    public function setPlazas($plazas)
    {
        $this->plazas = $plazas;

        return $this;
    }

    //METODOS

    function acelerar()
    {
        $this->velocidad + 1;
    }

    function frenar()
    {
        return $this->velocidad - 1;
    }

    function velocidad()
    {
        echo("la velocidad es de " . $this->velocidad . " km/");
    }

    function mostrarInfo()
    {
        if(is_object($this) == true || empty($this) == false){

            echo("El coche es de color " . $this->color . 
            ", su marca es " . $this->marca . 
            ", y el modelo es " . $this->modelo . 
            ", va a " . $this->velocidad . 
            " km/h, y a un ritmo de " . $this->caballaje . 
            ", y por ultimo, tiene " . $this->plazas . " plazas");

        }else{

            echo("no es un objeto orr está vacio... mete datos");

        }

        
        
    }

    function saludar(){
        echo("hoka");
    }
    
}
