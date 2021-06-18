<?php

//SOAP V1
$client = new SoapClient('https://sualoja.com/api/soap/?wsdl');

$session = $client->login('user', 'password'); //chave definida no admin

$result = $client->call($session, 'catalog_product.update', array('pilhas-aa', array('price' => '100'),'2'));
print "<pre>";
print_r($result);
print "</pre>";

?>
