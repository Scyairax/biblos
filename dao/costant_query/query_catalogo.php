<?php
//costruzione comando sql
        $query = 'select titolo,genere,lingua,data_pubblicazione,autore.nome,cognome,casa_editrice.nome
         from libro,autore,edizione,casa_editrice where (id_casa_editrice=id_casa_editrice_fk)
         AND(id_libro=id_libro_fk)AND(id_autore=id_autore_fk)';
     // echo $query;   
?>


