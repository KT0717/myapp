<?php
$endpoint = 'endpoint_test';
$url = "https://myapp01.microcms.io/api/v1/" . $endpoint;
$apiKey = '';
$headers = array(
  'X-MICROCMS-API-KEY:'.$apiKey
);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
$result = json_decode($response);
$posts = $result->contents;
// function formatDate($date) {
//   $t = new DateTime($date);
//   $t->setTimezone(new DateTimeZone('Asia/Tokyo'));
//   return $t->format('Y');
// }
// $postsYear=[];
// for ($i=0; $i < count($posts); $i++) { 
//   array_push($postsYear,formatDate($posts[$i]->date));
// }
// var_dump($postsYear);


// var_dump($posts);
// var_dump($response);
// var_dump($result);