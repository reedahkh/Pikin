<?php
$url = "http://maps.google.com/maps/api/geocode/json?address=163+Adetola+Street+Aguda,+Surulere&sensor=true&region=Nigeria";
$response = file_get_contents($url);
$response = json_decode($response, true);

//print_r($response);

$lat = $response['results'][0]['geometry']['location']['lat'];
$long = $response['results'][0]['geometry']['location']['lng'];

echo "latitude: " . $lat . " longitude: " . $long;
?>
