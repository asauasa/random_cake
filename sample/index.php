<?php
require_once __DIR__.'/php-oauth2-example/vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();

$client = new Google_Client();
$client->setAuthConfig('client_secrets.json');
$client->addScope(Google_Service_People::CONTACTS);

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
  $people = new Google_Service_People($client);
  var_dump($people);exit();
  
  $files = $people->people->get('aaa', $people);
  echo json_encode($files);
} else {
  $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}