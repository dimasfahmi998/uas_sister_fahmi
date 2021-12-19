<?php

require __DIR__. '/vendor/autoload.php';
use GuzzleHttp\Client;
$id = $_GET['id'];
$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response = $client->request('PUT','/api/handphone2',[
    'json' => [
        'id' => $id,
        'Merk' => $_POST['merk'],
        'Jenis' => $_POST['jenis'],
        'Harga' => $_POST['harga']
    ]
]);

$body = $response->getBody();

header('location:index_hp.php');

?>