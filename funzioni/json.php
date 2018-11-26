<?php
//avvio sessione

//variabili accesso al database
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "biblos";

//apertura connessione al database
try {
    $conn = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$query = 'SELECT * FROM autore';
//echo $query;
$stmt = $conn->prepare($query);
$stmt->execute();//o niente o il bound

$listaAutori = [];
if ($stmt->rowCount()>0) {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $autore = new stdClass();
        $autore->id = $result['id_autore'];
        $autore->nome = $result['nome'];
        $autore->cognome = $result['cognome'];
        array_push($listaAutori, $autore);
    }
}


//print_r($listaAutori);
$response = [ 
    "success" => true,
     "data" => $listaAutori
];

$myJSON = json_encode($response);

echo $myJSON;// questa variabile myjson contiene una stringa che rappresenta tutti i niei dati
//appena caricaricati dentro un array associativo 
//successivamente posso trasmettere questa stringa ad un altria pagina php o html che può recuperare 
//tutte le informazioni possono essere parsate nella pagina dopo



?>