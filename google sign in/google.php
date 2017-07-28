<?php

header('Location:../index.php');
echo "hi";

$idtoken = $_GET["idtoken"];
//print_r($idtoken);
$url = "https://www.googleapis.com/oauth2/v3/tokeninfo?id_token=".$idtoken;
$head = file_get_contents($url);
//var_dump($head);

$json = json_decode($head, true);
$name = $json['name'];
$email = $json['email'];
$id = $json['sub'];


echo $name;



?>