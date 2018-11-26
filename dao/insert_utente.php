<?php
            require_once('../include/init.php');
            require_once('connection_db.php');
    $email = $_POST ["variabile1"];				//acquisizione variabili dal form login_magazzino.php
    $nome = $_POST ["variabile3"];                //queste variabili vengono dal form di registrazione
    $cognome = $_POST ["variabile4"];
    $telefono = $_POST ["variabile5"];
    require_once('../dao/costant_query/query_insert_utente.php');
    //vanno le query

    $stmt = $conn->prepare($query);
    $stmt->execute($bound);
   
?>