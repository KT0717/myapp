<?php
$apiKey = 'db9d7f88d4584e75b31c50bf396f8ab38843';
$endpoint = 'endpoint_test';
$url = "https://myapp01.microcms.io/api/v1/" . $endpoint;
$headers = array(
  'X-MICROCMS-API-KEY:'.$apiKey
);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
$result = json_decode($response);
$posts = $result->contents;