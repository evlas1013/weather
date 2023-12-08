<?php
$curl = curl_init();
$location = $_REQUEST['location'];
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.weatherapi.com/v1/current.json?key=a0d9ceb9913c43c8a57124022232611&q='.$location,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>