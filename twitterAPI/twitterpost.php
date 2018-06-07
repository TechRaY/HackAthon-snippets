<?php
require_once('TwitterAPIExchange.php');
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/

	
$settings = array(
    'oauth_access_token' => "128821827-09n4WUJbETIsqLTj9XTw9e7TZZiuAkrAr4ZPtRRY",
    'oauth_access_token_secret' => "UO1PBIi5JnNV5wt5XFa70I6aHDVjATGYWNl4cPaCbNHRw",
    'consumer_key' => "ABRg3LljqERNmKNLAYy3aO1Gc",
    'consumer_secret' => "QL9qujtWjFbac07xmgMxYnJYFKOQmfJ4PO1lXT8PWx6Zb37FQU"
    );
	
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
$getfield = '?screen_name=iagdotme&count=2';
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);
if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
echo "<pre>";
print_r($string);
echo "</pre>";
		
			
?>
