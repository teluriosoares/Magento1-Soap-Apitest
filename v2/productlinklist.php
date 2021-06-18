<?php
$proxy = new SoapClient('https://sualoja.com/api/v2_soap/?wsdl'); //change url
$sessionId = $proxy->login('user', 'password'); //change login and pwd if necessary
$result = $proxy->catalogProductLinkList($sessionId, 'related', '194');
var_dump($result);

 ?>
