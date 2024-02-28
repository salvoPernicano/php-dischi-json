<?php
// trasformazione contenuto json in una stringa interpretabile da PHP
$string = file_get_contents("dischi.json");



//conversione in array associativo della stringa
$arrayDischiPhp = json_decode($string, true);



//La funzione Header() permette a Javascript di leggere correttamente i dati 
//Ri-conversione da array associativo PHP in formato json
header('Content-Type: application/json');
echo json_encode($arrayDischiPhp);


