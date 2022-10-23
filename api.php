<?php
$endpoint = 'endpoint_test';
$url = "https://myapp01.microcms.io/api/v1/" . $endpoint;
$apiKey = 'xxxxxxxxxxxxxx';
$headers = array(
  'X-MICROCMS-API-KEY:'.$apiKey
);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
$result = json_decode($response);
// var_dump($response);
// var_dump($result);