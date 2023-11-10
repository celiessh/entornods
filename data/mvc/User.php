<?php
class User
{
    const USERS=[
        array(1,"Pedro"),
        array(2,"Elena"),
        array(3,"Francisco"),
        array(4,"Blanca")
    ];

    // @return Array con los datos de los usuarios
    public static function all(){
        return User::USERS;//self o User
    }
    // @return un usuario en particular
    // @param $id los arrays son de 0 a x osea el 2 es el 3 
    public static function find($id){
        return self::USERS[$id-1];
    }
    // @return un usuario en particular
    // @param $id
    public static function findOtra($id){
        foreach(User::USERS as $key => $user){
            if($user[0]==$id){
    //cada vuelta saca el array en 0 es la clave de los nombres
                return $user;
            }
        }
        return null;
    }
    
}
