<?php
//costruzione comando sql
        $query = 'INSERT INTO utente (id_user_fk,nome, cognome,telefono) VALUES
        ((SELECT id_user FROM user WHERE email= ? ),?,?,?)';
	$bound=[$email,$nome,$cognome,$telefono];
        // echo $query;   
?>

