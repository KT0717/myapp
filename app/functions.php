<?php
require('/app/apiKey.php');
$endpoint = 'news';
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
// var_dump($posts);
$newIconOn = new DateTime();
$newIconOn->sub(new DateInterval('P0Y0M7D'));
$newIconOn->setTimezone(new DateTimeZone('Asia/Tokyo'));
$newIconOn->format('y/m/d');
// var_dump($newIconOn);

// $host = $_SERVER['HTTP_HOST'];
// var_dump($host);

