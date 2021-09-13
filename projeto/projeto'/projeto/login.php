<?php  

	// Acesso Master
	$master['email'] = "anthony@email.com";
	$master['senha'] = "12345";
	$master['cpf'] = "60393507335";
	$master['tipoAcesso'] = "admin";


	// Recebendo os dados do formulário
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	// Validando o acesso
	if($email != $master['email']){
		header("location: index.php?msg=usuario_incorreto");
	}elseif($senha != $master['senha']){
		header("location: index.php?msg=senha_incorreta");
	}else{
		//echo "Acesso Permitido!";	
		session_start();
		// Chamando a variavel de sessão
		$_SESSION['utdexec3'] = $master;

		header("location: index.php");

	}	



?>