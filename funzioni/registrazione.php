<?php
    
    require_once('../dao/insert_user.php');
    require_once('../dao/insert_utente.php');
    
   ob_start();//A partire dal momento della chiamata ad ob_start() tutti gli output verranno deviati verso il buffer e spediti al client soltanto al termine dell’ esecuzione dello script, od ogniqualvolta vi sia una chiamata ad una funzione *_flush() 
   echo "Se il tuo browser non supporta il redirect clicka <a href=\"index.php\">qui</a>.";
   header( "refresh:2;url=../login.php" );
   ob_end_flush();

?>