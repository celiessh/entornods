<?php
namespace Dwes;
//ejemplo namespaces, se coloca arriba la primera sentencia 
//y Dwes corresponde con la carpeta dwes (simillar a package)

const RADIO = 126.88; //millones de km xd si acaso años luz


function observar($nombre){
    echo"<br>Observando $nombre una bonita galaxia.";
}

class galaxia{
    function __construct()
    {
        $this->nacer();   
    }
    function nacer(){
        echo "<br>Acabo de nacer, soy una galaxia.";
    }
    static function muerte(){
        echo"<br>Valí verga galacticamente galactica....";
    }
}
function time(){//vs la funcion de php time()
    echo "a payo te estoy timando, me qa mucha vía por delante (8745348438934 años)";
}