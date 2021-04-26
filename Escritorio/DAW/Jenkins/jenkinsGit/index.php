<?php 

$weatherApi = "";

$var1 = curl_init();

curl_setopt($var1, CURLOPT_HEADER, 0);
curl_setopt($var1, CURLOPT_RETURNTRANSFER, 1);
curl_settpt($var1, CURLOPT_URL, $weatherApi);
curl_settpt($var1, CURLOPT_VERBOSE, 0);
curl_settpt($var1, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($var1);

curl_close($var1);
$data = json_decode($response);
echo "Temperatura actual a Lleida: " . $data->main->temp . " ºC";

?>