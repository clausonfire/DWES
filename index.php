<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    require "Coche.php";
    require "Persona.php";
    require "Tecnicoredes.php";


    echo ("<b> >>>>>>>>>>>>>>>>>>>>   EJERCICIO 1   <<<<<<<<<<<<<<<<<<<<< </b><br><br>");

    $coche = new Coche("Amarillo", "renault", "clio", 150, 200, 5);
    $coche1 = new Coche("Verde", "seat", "panda", 250, 200, 5);
    $coche2 = new Coche("Azul", "Citroen", "Xara", 100, 220, 4);
    $coche3 = new Coche("Rojo", "Mercedes", "Clase A", 350, 100, 3);

    // $coche -> color = "Rosa";
    // $coche -> setMarca("Audi");
    //echo $coche->mostrarInfo("Hola mundo desde un metodo");
    // //var_dump($coche->getModelo());
    // //var_dump($coche);
    // //var_dump($coche1);
    // //var_dump($coche2);
    // //var_dump($coche3);
    echo $coche->mostrarInfo();
    echo "<br>";
    echo "<br>";
    echo $coche1->mostrarInfo();
    echo "<br>";
    echo "<br>";
    echo $coche2->mostrarInfo();
    echo "<br>";
    echo "<br>";
    echo $coche3->mostrarInfo();



    echo ("<br><br><br><b> >>>>>>>>>>>>>>>>>>>>   EJERCICIO 2   <<<<<<<<<<<<<<<<<<<<< </b><br>");

    echo "<br>";

    $informatico1 = new Informatico();
    $tecnicoredes1 = new Tecnicoredes();

    echo $informatico1->hablar();
    echo "<br>";
    echo $tecnicoredes1->caminar();



    echo ("<br><br><br><b> >>>>>>>>>>>>>>>>>>>>   EJERCICIO 3   <<<<<<<<<<<<<<<<<<<<< </b><br>");

    include "Configuracion.php";
   
    Configuracion :: setColor("ROJO");
    Configuracion :: setNewsletter("EL PAIS");
    Configuracion :: setEntorno (" DIGITAL");
    echo(Configuracion :: getColor());
    echo "<br>";
    Configuracion :: mostrarInfo();

    echo ("<br><br><br><b> >>>>>>>>>>>>>>>>>>>>   EJERCICIO 4   <<<<<<<<<<<<<<<<<<<<< </b><br>");



    ?>

</body>

</html>