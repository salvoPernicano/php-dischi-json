<?php
// trasformazione contenuto json in una stringa interpretabile da PHP
$string = file_get_contents("dischi.json");


//conversione in array associativo della stringa
$arrayDischiPhp = json_decode($string, true);

