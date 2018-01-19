<?php
// check if required parameters have been set

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); 

$API_KEY = '1a5359d8b8712bab25d8a50d35d2a323a24e6cea'; /* add your client secret here for testing */
$errors = [];
extract($_POST);

if (empty($lang)) {
    $errors[] = 'you need to provide the "lang" parameter.';
}
if (empty($source)) {
    $errors[] = 'you need to provide the "source" parameter.';
}
if ($API_KEY === "YOUR_API_KEY") {
    $errors[] = 'you need to set the "client_secret" inside `post.php`.';
}
if (count($errors)) {
    die(implode("<br>", $errors));
}
//set up post data
$post_data = http_build_query([
    'client_secret' => $API_KEY,
    'lang' => $lang,
    'source' => $source
]);
$context_options = [
    'http' => [
        'method' => 'POST',
        'header'=> "Content-type: application/x-www-form-urlencoded\r\n"
                . "Content-Length: " . strlen($post_data) . "\r\n",
        'content' => $post_data
    ]
];
$context = stream_context_create($context_options);
$c_result = file_get_contents('http://api.hackerearth.com/code/compile/', false, $context);
$c_result=json_decode($c_result,true);
//var_dump($c_result);

if($c_result["compile_status"]!="OK")
{
    echo "Compilation Error";
    var_dump($c_result);
    echo $c_result["compile_status"];
}
else
{
    $r_result = file_get_contents('http://api.hackerearth.com/code/run/', false, $context);
    /*$r_reult=json_decode($r_result);
    var_dump($r_result);
    echo $r_result;*/
	
	$jsonAsObject=json_decode($r_result);
	
    echo $jsonAsObject->run_status->output_html;
}
