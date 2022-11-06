<?php
function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function createToken() {
  if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
  }
}

function validateToken() {
  if (
    empty($_SESSION['token']) ||
    $_SESSION['token'] !== filter_input(INPUT_POST, 'token')
  ) {
    exit('Invalid post request');
  }
}

session_start();

function GetContent($endpoint, $id)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://myapp01.microcms.io/api/v1/' . $endpoint . "/" . $id);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
  $apiKey = 'db9d7f88d4584e75b31c50bf396f8ab38843';
  $headers[] = 'X-MICROCMS-API-KEY:'.$apiKey;
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $response = curl_exec($ch);
  curl_close($ch);
  $result = json_decode($response, true);
  // var_dump($result);
  return $result;
}

$newIconOn = new DateTime();
$newIconOn->sub(new DateInterval('P0Y0M7D'));
$newIconOn->setTimezone(new DateTimeZone('Asia/Tokyo'));
$newIconOn->format('y/m/d');
// var_dump($newIconOn);

$host = $_SERVER['HTTP_HOST'];
// var_dump($host);

