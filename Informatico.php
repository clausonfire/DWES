<?php

include_once "Persona.php";

class Informatico extends Persona
{
    public $lenguajes;
    public $experiProg;

    function __construct($nombre = "", $apellido = "", $altura = "", $edad = "", $lenguajes = "", $experiProg = "")
    {
        parent::__construct($nombre, $apellido, $altura, $edad);
        $this->lenguajes = $lenguajes;
        $this->experiProg = $experiProg;
    }


    //GETTER & SETTERS


    /**
     * Get the value of lenguajes
     */
    public function getLenguajes()
    {
        return $this->lenguajes;
    }

    /**
     * Set the value of lenguajes
     *
     * @return  self
     */
    public function setLenguajes($lenguajes)
    {
        $this->lenguajes = $lenguajes;

        return $this;
    }

    /**
     * Get the value of experiProg
     */
    public function getExperiProg()
    {
        return $this->experiProg;
    }

    /**
     * Set the value of experiProg
     *
     * @return  self
     */
    public function setExperiProg($experiProg)
    {
        $this->experiProg = $experiProg;

        return $this;
    }


    //METODOS

    function programar()
    {
        echo ("hola estoy programando");
    }

    function repararOrdenador()
    {
        echo ("Arreglando el Ordenador");
    }

    function hacerOfimatica()
    {
        echo ("Haciendo Ofimatica");
    }
}
