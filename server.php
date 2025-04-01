<?php


//leggo il file dei dischi e li salvo in una variabile
$json_text = file_get_contents('./dischi.json');


//converto la stringa json in struttura dati PHP

$discs = json_decode($json_text, true);

//modifico la struttura dei dati
//inserisco quindi un nuovo disco
$discs[] = $_POST;

// var_dump($discs);

// riconverto la struttura dati php in stringa JSON
$json_text_updated = json_encode($discs);

// sovrascrivo il contenuto del file .json

file_put_contents('./dischi.json', $json_text_updated);

//redirect alla pagina index con la lista aggiornata

header('Location: ./index.php')

    ?>