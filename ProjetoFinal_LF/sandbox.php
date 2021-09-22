<?php  
	
	ini_set("display_errors",1);

	include_once 'models/Connect.class.php';
	include_once 'models/Manager.class.php';


	$manager = new Manager;

	
	// INSERT
	$insert['user_cpf'] = "03605618375";
	$insert['user_name'] = "Leonardo";
	
	$manager->insert_common("users",$insert, null);


	// DELETE 
	$ids = ['5','6','8','9'];
	foreach ($ids as $value) {
		# code...
		echo $manager->delete_common("users",array("id_user"=>$value),null)."<br>";
	}

	// UPDATE
	$novos['user_name'] = "Leonardo Forte da Siva";
	$novos['user_email'] = "leoforte@utd.com.br";
	$novos['user_cpf'] = "036.056.183-75";

	echo $manager->update_common("users",$novos,array("id_user"=>2),null);
	

	// SELECT
	$dados = $manager->select_common("users",null,null," ORDER BY user_name ASC");

	var_dump($dados);

?>