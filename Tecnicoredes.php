<?php

include "Informatico.php";

class Tecnicoredes extends Informatico {

    public $auditarredes;
    public $experienciaredes;

    function __construct($nombre="", $apellido="", $altura="", $edad="",$lenguajes="", $experiProg="",$auditarredes="",$experienciaredes="")
    {
        parent :: __construct($nombre, $apellido, $altura, $edad,$lenguajes, $experiProg);
        $this->$auditarredes = $auditarredes;
        $this->$experienciaredes = $experienciaredes;
    }
    
}