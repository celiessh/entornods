<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="nom">Nombre: </label>
        <input id="nom" name="nombre" type="text">
        <br>
        <label for="dni">DNI: </label>
        <input id="dni" name="DNI" type="text">
        <br>
        <label for="direc">Dirección: </label>
        <input id="direc" name="direccion" type="text">
        <br>
        <label for="ed">Edad: </label>
        <input id="ed" name="edad" type="number">
        <br>
        <label for="tel">Telefono: </label>
        <input id="tel" name="telefono" type="number"></input>
        <br>
        <label for="sex">Sexo: </label>
        <input id="sex" name="sexo" type="text">
        <br>
        <label for="trab">Trabajo: </label>
        <input id="trab" name="trabajo" type="text">
        <br>
        <label for="corr">Correo: </label>
        <input id="corr" name="correo" type="text">
        <br>
        <label for="fe">Fecha: </label>
        <input id="fe" name="fecha" type="date">
        <br>
        <input name="enviar" type="submit" value="Enviar">
    </form>
    <?php
    require "../dbcon.php";
/*
Añadir columna fecha a la tabla con formato dd/mm/YYYY
Insertar 5 filas con bindParam y 5 con binfValue
datos recogidos por un formulario
*/      
    if(isset($_POST["enviar"]) && !empty($_POST["enviar"])){
        try{
            $db=new PDO(dsn2,username,password);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            $sql="INSERT INTO".TABLACLIENTES."() VALUES(null,?,?,?,?,?,?,?,?,?,null,?)";

            $statement=$db->prepare($sql);

            //echo $_POST["fecha"];
            $statement->bindValue(1,$_POST[""]);



        }catch(Exception $Er){
            echo $Er->getMessage();
        }finally{
            $dbhc=null; //así se cierran las conextiones php
        }
    }
    ?>
</body>
</html>