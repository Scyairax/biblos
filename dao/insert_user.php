<?php
            require_once('../include/init.php');
            require_once('connection_db.php');
    $email = $_POST ["variabile1"];				//acquisizione variabili dal form login_magazzino.php
    $pass = $_POST ["variabile2"];                //queste variabili vengono dal form di registrazione

    require_once('../dao/costant_query/query_insert_user.php');
    //vanno le query

    $stmt = $conn->prepare($query);
    $stmt->execute($bound);

?>
