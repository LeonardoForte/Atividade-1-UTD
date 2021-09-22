<?php  
	
	// Adicionando os arquivos principais
	include_once dirname(__DIR__).'/models/Connect.class.php';
	include_once dirname(__DIR__).'/models/Manager.class.php';

	// Busca no banco de dados
	$manager = new Manager;
	$log = $manager->select_common("users",null,array("user_email"=>$_POST['email']), " LIMIT 1");

	var_dump($log);


?>