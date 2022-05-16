<?php
$username ='root_urian';
$password ='Desarrollo2022.*';
$URLAPI ='http://localhost/Metodo-de-autetificacion-http-API-REST-Http_Authentication_Using_Php/api/';


//Forma nativa de CURL curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, $URLAPI);
curl_setopt($ch1, CURLOPT_USERPWD, $username.':'.$password);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$resp1 = curl_exec($ch1);
curl_close($ch1);

$jsonData1 = json_decode($resp1,true);

echo '<pre>';
	print_r($jsonData1);
echo '</pre>';


echo '<pre>';
	print_r($resp1);
echo '</pre>';
echo '------------------------ <br>';



//OTRA FORMA EN CURL CURLOPT_HTTPHEADER
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL, $URLAPI);
curl_setopt($ch2, CURLOPT_HEADER, 1);
curl_setopt($ch2, CURLOPT_HTTPHEADER, array(  
	'Content-Type:application/json',                                                                        
    'Authorization: Basic '. base64_encode($username.':'.$password)                                                                           
   )                                                                       
);  
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
$respons = curl_exec($ch2);
curl_close($ch2);
echo '<pre>';
	print_r($respons);
echo '</pre> <br>';
echo '------------------------ <br>';




$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$URLAPI);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

$result=curl_exec ($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close ($ch);
echo '<pre>';
	print_r($result);
echo '</pre>';


?>

