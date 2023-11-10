<?php
//varios controladores por lo del htaccess
require "core/App.php";
$app=new App();//enrutador



/*require_once "Controller.php"; //esto esta bien
$app=new Controller();

//url: http://mvc.local?method=[index/show]&id=[usuario]
if(isset($_GET['method'])){
    $method=$_GET['method'];
}else{
    $method="index";
}
try {    
    if(method_exists($app,$method)){
        $app->$method();
    }else{
        throw new Exception("Metodo no encontrado.");
    }
} catch (Exception $th) {
    http_response_code(404);
    echo "Error: <br>$th";
}
*/

/*
require "User.php";
echo "<h3>Contenido privado</h3>";
echo "<p>Rueba recuperación:</p>";//start llama a todos seguramente

pre();
var_dump(User::all());
erp();
pre();
var_dump(User::find(3));
erp();
pre();
var_dump(User::findOtra(3));
erp();
function pre(){
    echo "<pre>";
}
function erp(){
    echo "</pre>";
}*/