<?php 

//Temperatura de Lleida

$weatherApiLleida = "http://api.openweathermap.org/data/2.5/weather?q=Lleida&appid=1190757424d6d05aab4cb8447d8acfc3";

$var1 = curl_init();

curl_setopt($var1, CURLOPT_HEADER, 0);
curl_setopt($var1, CURLOPT_RETURNTRANSFER, 1);
curl_settpt($var1, CURLOPT_URL, $weatherApiLleida);
curl_settpt($var1, CURLOPT_VERBOSE, 0);
curl_settpt($var1, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($var1);

curl_close($var1);
$dataLleida = json_decode($response);
echo "Temperatura actual a Lleida: " . $dataLleida->main->temp . " ºC";

//Temperatura de Madrid

$weatherApiMadrid = "http://api.openweathermap.org/data/2.5/weather?q=Madrid&appid=1190757424d6d05aab4cb8447d8acfc3";

var2 = curl_init();

curl_setopt($var2, CURLOPT_HEADER, 0);
curl_setopt($var2, CURLOPT_RETURNTRANSFER, 1);
curl_settpt($var2, CURLOPT_URL, $weatherApiMadrid);
curl_settpt($var2, CURLOPT_VERBOSE, 0);
curl_settpt($var2, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($var2);

curl_close($var2);
$dataMadrid = json_decode($response);
echo "Temperatura actual a Londres: " . $dataMadrid->main->temp . " ºC";

//Comparar temperatura

echo "Diferencia: " . abs($dataLleida->main->temp - $dataMadrid->main->temp) . " ºC";

?>