<?php
require_once "User.php";
class Controller{
    // Recupera todos los usuarios.
    // Invoca a vista con todos los usuarios.
    public function index(){
        $arrusers=User::all();//osea llama pero no le importa no hay include 
        require "views/index.php";
    }

    public function show(){
        $user=User::find($_GET["id"]);
        $user2=User::findOtra($_GET["id"]);
        require "views/show.php";
    }
}