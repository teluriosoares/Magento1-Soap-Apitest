<?php
//SOAP V1
$client = new SoapClient('https://sualoja.com/api/soap/?wsdl');

$session = $client->login('user', 'password'); //chave definida no admin

$result = $client->call($session, 'catalog_product.update', array('teste-tas', array(
    // 'categories' => array(2),

    'color' => 32,
    'size' => 20
)));

var_dump ($result);
