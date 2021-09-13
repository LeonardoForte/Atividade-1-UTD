<?php  
	
	session_start();

	if(!isset($_SESSION['utdexec3'])){
		header("location: index.php?msg=acesso_nao_permitido");
	}

	echo " Você esta na area admin !!!";
?>
<br>
<br>
<a href="form.php"> Cadastrar </a> | 
<a href="listagem.php"> Listar </a> | 
<a href="logout.php"> SAIR </a> |