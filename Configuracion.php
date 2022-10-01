<?php

class Configuracion
{

    public static $color;
    public static $newsletter;
    public static $entorno;

    function __construct($color, $newsletter, $entorno)
    {
        $this->color = $color;
        $this->newsletter = $newsletter;
        $this->newsletter = $newsletter;        
    }


    //GETTERS & SETTERS

    public static function setColor($color)
    {
        self :: $color = $color;
    }

    public static function getColor()
    {
        return self :: $color;
    }

    public static function setNewsletter($newsletter)
    {
        self::$newsletter = $newsletter;
    }

    public static function getNewsletter($newsletter)
    {
        return self::$newsletter;
    }

    public static function setEntorno($entorno)
    {
        self::$entorno = $entorno;
    }

    public static function getEntorno($entorno)
    {
        return self::$entorno;
    }

    public static function mostrarInfo(){
        return print("Hola! El color es " . self::$color . " el nesletter es " . self::$newsletter . " y el entorno es " . self::$entorno . " .");
    }
}
