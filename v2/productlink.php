<?php
/*
$proxy = new SoapClient('https://www.cashbox.com.br/api/v2_soap/?wsdl');
$sessionId = $proxy->login((object)array('username' => 'testejn2', 'apiKey' =>
'teste123123'));
$result = $proxy->catalogProductLinkAssign((object)array('sessionId' => $sessionId-
>result, 'type' => 'related', 'productId' => '853', 'linkedProductId' => '873','871'));
var_dump($result->result);
*/


$proxy = new SoapClient('https://sualoja.com/api/v2_soap/?wsdl'); //change url
$sessionId = $proxy->login('user', 'password'); //change login and pwd if necessary
$result = $proxy->catalogProductLinkAssign($sessionId, 'related', '194', '187');
var_dump($result);

 ?>
