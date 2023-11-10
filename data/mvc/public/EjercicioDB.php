<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require "../DBTestClient.php";
        try{ 
            $dbhc=new PDO(dsn,username,password);
            $dbhc->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql="SELECT * FROM clients";
            $filas="SELECT count(*) FROM clients";
            
            $cont=$dbhc->query($filas);
            echo "<pre>";
            var_dump($cont);
            echo "</pre>";

            $statementoooor=$dbhc->prepare($sql);
            $statementoooor->execute();        
            //fecth all como array
            $arra=$statementoooor->fetchAll(PDO::FETCH_ASSOC);

            echo "<h2>Número de registros: ";
            foreach($cont as $a){
                for($i=0;$i<count($a)-1;$i++){
                    echo $a[$i];
                }
            }
            echo " O con ROW COUNT: ".$statementoooor->rowCount();
            echo "</h2>";
            echo "<pre>";
            echo "<table border='1'><th>ID</th><th>NAME</th><th>DNI</th><th>Adress</th><th>Age</th><th>Telephone</th><th>Sex</th><th>Work</th><th>Mail</th><th>Rizz</th>";
            foreach($arra as $row){
                echo "<tr><td>".$row["ID"]."</td>";
                echo "<td>".$row["NAME"]."</td>";
                echo "<td>".$row["DNI"]."</td>";
                echo "<td>".$row["Adress"]."</td>";
                echo "<td>".$row["Age"]."</td>";
                echo "<td>".$row["Telephone"]."</td>";
                echo "<td>".$row["Sex"]."</td>";
                echo "<td>".$row["Work"]."</td>";
                echo "<td>".$row["Mail"]."</td>";
                echo "<td>".$row["Rizz"]."</td>";
                echo"<td>".$row["date"]."</td></tr>";
            }
            echo "</table>";
            echo "</pre>";

            $stat=$dbhc->prepare("INSERT INTO clients 
            VALUES (null, 'Juan Manolo','53452349O'
            ,'gdfgjdflgjdlfk','54','985433','Hombre','isdjfisjfse','6tert34@re','0',null)");
            echo $stat->execute()."<br>";

            $b= $dbhc->query("SELECT MAX(ID) FROM clients");
            foreach($b as $c){
                echo "El ultimo id insertado: ".$c[0];
            }
            echo "<br>O con metodo: ".$dbhc->lastInsertId();
        } catch (Exception $th) {
            echo "<br>NOnooNOOooNOooO: ".$th->getMessage();
        }finally{
            $dbhc=null; //así se cierran las conextiones php
        }
    ?>
</body>
</html>