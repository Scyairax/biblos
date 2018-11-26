<?php
               require_once('../include/init.php');
               require_once('connection_db.php');
            // echo $email;
             //echo $pass;
             require_once('../dao/costant_query/query_catalog.php'); //includo la query che si trova dentro una cartella che conterrà tutte le query
        $stmt = $conn->prepare($query);
        $stmt->execute($bound);
       //---da qui tutto quello che vedi serve per salvare  i dati dell'utente 
       
        $result = $stmt->fetch(PDO::FETCH_ASSOC);//solo quando voglio dati indietro
        //metto i dati prelevati dalla query in un array associativo e dopo li inserisco in un array
        $utenteLog = [] ;
        $totale_righe = $stmt->rowCount();
            echo '<h2>il numero di utenti trovate sono  :'.$totale_righe.'</h2>';
            if($totale_righe!=0)
            {
                $utente = new stdClass();
                $utente->id = $result['id_utente'];
                $utente->nome = $result['nome'];
                $utente->cognome = $result['cognome'];
                array_push($utenteLog, $utente);     
            }else{
                $outputHTML = 'errore , ritenta il login';
                 echo $outputHTML;
            }

            $_SESSION['autenticato'] = true;
            $_SESSION['data_accesso'] = date("d/m/Y H:i:s");//y minuscola esce 18
            $_SESSION['nome'] = $utenteLog[0]->nome;
            $_SESSION['cognome'] = $utenteLog[0]->cognome;
            echo $_SESSION['nome'],$_SESSION['cognome'],$_SESSION['data_accesso'];
            //print_r($utenteLog)
?>

