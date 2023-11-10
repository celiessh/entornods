<?php
/*
//esto llevarlo a otro fichero etc
//desde xampp host=localhost
//mejor en constantes
$dsn = "mysql:host=db;dbname=demo";
$username="root";
$password="password";
//myswli, PDO
*/
require "../dbcon.php";

echo "Bbbdd con PHP<br><pre>";
print_r(PDO::getAvailableDrivers());
echo "</pre>";

try {
    $dbhc=new PDO(dsn,username,password);//Driver acceso de bases de datos (PDO)
    echo "<br>Conectado";
    $dbhc->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//importante
    $sql="SELECT * FROM city";
    
    //QUERY
    $devoQ=$dbhc->query($sql);

    echo "<pre>";
    foreach($devoQ as $row){
        echo "<p>id: ".$row["ID"];
        echo ", nombre: ".$row["Name"];
        echo ", distrito: ".$row["District"];
        echo ", población: ".$row["Population"]."</p>";
    }
    echo "</pre>";
    $devoQ=$dbhc->query($sql);
    tabla($devoQ);

    //PREPARE
    $statementoooor=$dbhc->prepare($sql);
    $devoP=$statementoooor->execute();//devoP es true

    //fecth all como array
    $arr=$statementoooor->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // var_dump($arr);
    // echo "</pre>";
    tabla($arr);

    //fetch all como objeto
    $devoP=$statementoooor->execute();//porque al hacer fetch se borra
    $obj=$statementoooor->fetchAll(PDO::FETCH_OBJ);
    echo "<pre>";
    foreach($obj as $row){
        echo "<p>id: ".$row->ID;
        echo ", nombre: ".$row->Name;
        echo ", distrito: ".$row->District;
        echo ", población: ".$row->Population."</p>";
    }
    echo "</pre>";


} catch (Exception $th) {
    echo "<br>NOnooNOOooNOooO: ".$th->getMessage();
}finally{
    $dbhc=null; //así se cierran las conextiones php
    echo "<br>Conexion terminada";
}
function tabla($arra){
    echo "<pre>";
    echo "<table border='2'><th>id</th><th>nombre</th><th>distrito</th><th>población</th>";
    foreach($arra as $row){
        echo "<tr><td>".$row["ID"]."</td>";
        echo "<td>".$row["Name"]."</td>";
        echo "<td>".$row["District"]."</td>";
        echo "<td>".$row["Population"]."</td></tr>";
    }
    echo "</table>";
    echo "</pre>";
}