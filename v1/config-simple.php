<?php

//SOAP V1
$client = new SoapClient('http://seudominio.agilex.jn2.xyz/api/soap/?wsdl');

$session = $client->login('teste', 'teste123'); //chave definida no admin

/* grupo de atributos default*/
$attr_g = 4;

/*criando o configuravel primeiro*/

$client->call($session, 'catalog_product.create', array('configurable', $attr_g, 'teste-sku', array(
	'categories' => array(4),
	'websites' => array(1),
	'name' => 'TESTE',
	'description' => '<h2><strong> CARACTERÍSTICAS </strong></h2><p><span style="font-family: helvetica;"> Tipos de amostras: soro e plasma </span></p>...',
	'short_description' => '<p><b>Finalidade:</b></p><p>Determinação Quantitativa da Capaci...',
	'weight' => '0.18',
	'status' => '1', // 1 => 'Habilitado', 2 => 'Desabilitado'
	'visibility' => '4', // 1 => 'Not Visible Individually', 2 => 'Catalog', 3 => 'Search', 4 => 'Catalog, Search'
	'price' => '208.7',
	'meta_title' => 'TEESTE AUTOMAÇÃO - K111',
	'meta_description' => '<p><b>Finalidade:</b></p><p>Determinação Quantitativa da Capaci...',
	'guest_hide_price' => 1
)));
/***** determinando atributos configuraveis *****/
$atributos_conf = array('color'); //usado atributo color
$result = $client->call($session, 'catalog_product_configurable.setConfigurableAttributes', array('teste-sku', array('color'))); //setando atributo configurável e o atributo associado

/**************IMPORTANTE ***************/
//Os produtos simples ja devem estar criados e preenchidos com o atributo da regra de negocio


/* associando os simples ao configuravel */

$client->call($session, 'catalog_product_configurable.associateSimpleChildren', array('teste-sku', array('teste-sku-1-preto','teste-sku-2-marron'))); //sku config - skus simple


var_dump ($result); //retorna a string 'success' ou a exception relacionada