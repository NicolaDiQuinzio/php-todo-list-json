<?php 

$testo = file_get_contents('./data.json');



$phpArray = json_decode($testo, true );

if(isset($_POST['text'])) {
    $todoItem = [
      'text' =>  $_POST['text'],
      'complete'  => false
    ];
    array_push($phpArray, $todoItem);

    file_put_contents('./data.json', json_encode($phpArray));
}

header('Content-Type: application/json');


echo json_encode($phpArray);