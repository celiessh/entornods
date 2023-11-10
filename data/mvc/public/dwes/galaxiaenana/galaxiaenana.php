<?php
namespace Dwes\Galaxiaenana;//como los nombres se comparten con galaxia.php
//hay conflicto de nombres, al escribir \Galaxiaenanan lo diferenciamos y deja de haber problemas

//ejemplo namespaces, se coloca arriba la primera sentencia 
//y Dwes corresponde con la carpeta dwes (simillar a package)

const RADIO = 35.88; //millones de km xd si acaso años luz


function observar($nombre){
    echo"<br>MiniObservando $nombre una bonita minigalaxia.";
}

class galaxia{
    function __construct()
    {
        $this->nacer();   
    }
    function nacer(){
        echo "<br>Acabo minide nacer, soy una MINIgalaxia.";
    }
    static function muerte(){
        echo"<br>Valí mini verga galacticamente galactica....";
    }
}