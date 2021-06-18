<?php

$proxy = new SoapClient('https://sualoja.com/api/v2_soap/?wsdl'); //change url
$sessionId = $proxy->login('user', 'password'); //change login and pwd if necessary

$result = $proxy->salesOrderAddComment($sessionId, '1000054', 'processing', 'teste comente');
var_dump($result);
