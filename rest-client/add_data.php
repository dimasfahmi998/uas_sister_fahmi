<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

try {
    $client = new Client([
        'base_uri' => 'http://127.0.0.1:8080',
        'timeout' => 5
    ]);
    $response =  $client->request('POST', '/api/pembeli2', [
        'json' => [
            'Nama' => $_POST['nama'],
            'Jenis' => $_POST['jenis'],
            'Jumlah' => $_POST['jumlah'],
        ]
    ]);

    $body = $response->getBody();
    //$data_body = json_decode($body, true);
    header('location:index.php');

} catch (RuntimeException $e) {
    echo $e->getMessage();
}