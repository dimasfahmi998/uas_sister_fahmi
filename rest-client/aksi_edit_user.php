<?php

require __DIR__. '/vendor/autoload.php';
use GuzzleHttp\Client;
$id = $_GET['id'];
$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response = $client->request('PUT','/api/pembeli2',[
    'json' => [
        'id' => $id,
        'Nama' => $_POST['nama'],
        'Jenis' => $_POST['jenis'],
        'Jumlah' => $_POST['jumlah']
    ]
]);

$body = $response->getBody();

header('location:index.php');

?>