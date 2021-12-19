<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

try {
    $client = new Client([
        'base_uri' => 'http://127.0.0.1:8000',
        'timeout' => 5
    ]);
    $response =  $client->request('POST', '/api/handphone2', [
        'json' => [
            'Merk' => $_POST['merk'],
            'Jenis' => $_POST['jenis'],
            'Harga' => $_POST['harga'],
        ]
    ]);

    $body = $response->getBody();
    //$data_body = json_decode($body, true);
    header('location:index_hp.php');

} catch (RuntimeException $e) {
    echo $e->getMessage();
}