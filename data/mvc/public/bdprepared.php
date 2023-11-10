<?php
require "../dbcon.php";//DBTestClient
    /*
    1-preparar la sentencia (para prevenir la injección de sql)
        - named placeholder :    :nomvariable
        - question mark placeholder : ?
    2- Vincular valores a variables
        - bindParam
        - binValue
    3- Ejecutar la sentencia -> execute
    */
    try{ //TODO ESTO FUNCIONA
        $dbhc=new PDO(dsn2,username,password);
        $dbhc->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //podria poner el orden de las filas de la tabla antes de values pero deberia servir
        //FORMA A: NAMED PLACEHOLDER
        $sql="INSERT INTO ".TABLACLIENTES ."
        VALUES(:id,:nombre,'2342das',:direccion,:edad,:telefono,'fds','eaw','ewsf',0,null)";

        //FORMA B: QUESTION MARK PLACEHOLDER
        $sql2="INSERT INTO ".TABLACLIENTES."
        VALUES(?,?,'423423',?,?,?,'232d3e','232e2','32ew',null,null)";

        $statement = $dbhc->prepare($sql);
        //OPCION 1: bindParam -> variable es una referencia
        //valores que vendran de POST COOKIE etc ($_POST, $_GET, $_COOKIE,...)
        $id=null;
        $nombre="FranciscoS";
        $direccion="Avenida Navarra";
        $edad=43;
        $telefono="934949";

        $statement->bindParam(":id",$id);//se puede cambiar el orden de estas lineas
        $statement->bindParam(":nombre",$nombre);
        $statement->bindParam(":direccion",$direccion);
        $statement->bindParam(":edad",$edad);
        $statement->bindParam(":telefono",$telefono);

        $edad=64;//binParam enlaza etc osea que esto antes de execute cambia el valor

        $statement->execute();

        //OPCION 2: bindValue -> asocio los valores.

        $statement->bindValue(":id",$id); 
        $statement->bindValue(":nombre",$nombre);
        $statement->bindValue(":direccion",$direccion);
        $statement->bindValue(":edad",$edad);
        $statement->bindValue(":telefono",$telefono);

        $edad=76;//no lo cambiara
        $nombre="naoifns";

        $statement->execute();

        //CON QUESTION MARK PLACEHOLDER
        $statement=$dbhc->prepare($sql2);

        $statement->bindParam(1,$id);
        //se puede cambiar el orden de estas lineas, sino se cambian los numeros
        $statement->bindParam(2,$nombre);
        $statement->bindParam(3,$direccion);
        $statement->bindParam(4,$edad);
        $statement->bindParam(5,$telefono);
        //ojo si hay 5 interrogaciones del 1 al 5

        $edad=64;//binParam enlaza etc osea que esto antes de execute cambia el valor

        $statement->execute();

        //OPCION 2: bindValue -> asocio los valores.

        $statement->bindValue(1,$id); //primera interrogacion este valor
        //se puede cambiar el orden de estas lineas, sino se cambian los numeros
        $statement->bindValue(2,$nombre);
        $statement->bindValue(3,$direccion);
        $statement->bindValue(4,$edad);
        $statement->bindValue(5,$telefono);

        $edad=76;//no lo cambiara
        $nombre="naoifns";

        $statement->execute();

        echo"acbado con exito";

    }catch(Exception $Er){
        echo $Er->getMessage();
    }finally{
        $dbhc=null; //así se cierran las conextiones php
    }
?>