<?php
//costruzione comando sql
	    $query = 'SELECT nome,cognome,id_utente
		    	   FROM utente,user
			       WHERE (email=?)AND(pass=?)AND(active=1)AND(id_user=id_user_fk)';
	$bound=[$email,$pass];


        // echo $query;   
?>