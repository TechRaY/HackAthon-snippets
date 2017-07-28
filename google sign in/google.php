<?php


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

//echo $name;                                first check in whether the sign up has been done before or not depending on that insert it 
                                              // and redirect the page.
//header('Location:../index.php');

?>
