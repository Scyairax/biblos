<?php
//costruzione comando sql
        $query = 'INSERT INTO user (email,pass,active)
                    VALUES (?,?,1)';
	$bound=[$email,$pass];
        // echo $query;   
?>