<?php
namespace Dwes;//todo ha de estar debajo de esta linea

require "galaxia.php";
require "galaxiaenana/galaxiaenana.php";

echo "Namespace actural ".__NAMESPACE__;

echo"<h2>Acceso SIN cualificar</h2>";//clases del mismo paquete

//http://mvc.local/dwes/accesogalaxia.php
observar("Via Lactea");
echo "El radio es ".RADIO;
$fl=new Galaxia();
galaxia::muerte();

echo "<h2>Acceso cualificado desde donde estas</h2>";//absoluto desde mi ubicacion

Galaxiaenana\observar("DASDASD");
echo "El radio es ".Galaxiaenana\RADIO;
$fl=new Galaxiaenana\Galaxia();
Galaxiaenana\galaxia::muerte();

echo "<h2>Acceso cualificado absoluto</h2>";//absoluto desde la raiz

\Dwes\Galaxiaenana\observar("fsfs");
echo "El radio es ".\Dwes\Galaxiaenana\RADIO;
$fl=new \Dwes\Galaxiaenana\Galaxia();
\Dwes\Galaxiaenana\galaxia::muerte();

//Importar las claes : comando use
use function \Dwes\Galaxiaenana\observar;
use const \Dwes\Galaxiaenana\RADIO;
echo "<h2>Acceso con use (importar)</h2>puedes importar constantes, funciones, las clases,..";
observar("MAS GALXIAS");
echo"<br>El radio: ".RADIO;


echo "<h2>Apodar / alias namespace</h2>";
use function \Dwes\Galaxiaenana\observar as mirar;
observar("mirando a");


echo "<h2>Namespace GLOBAL</h2>";//distinguir entre time() y time()
//hubo que sacar la funcion time de la clase
echo "Hora actual: ".time();//con los namespaces y la linea de justo encima 
//entiende que es del names pace por el conflicto
echo "<br>hora actual ".\time();//le indica que la del global osea debolvera la hora
echo "<br>lanzar exceptciones".\Throwable::class." namespace ".__NAMESPACE__;//esta clase la puedes sobre escribir
//y la tendrias que ejecutar usando \ para la de php
