	<?php
		session_start();
	?>
<?php
		require_once 'config/conexao.class.php';
		require_once 'config/crud.class.php';

		$con = new conexao(); 
		$con->connect();
		
		$nome = $_POST['nome']; 
       	$email = $_POST['email'];
		$senha = $_POST['senha'];
		$endereco = $_POST['endereco'];
		$listaEstados = $_POST['listaEstados'];
		
		$codigo_pessoa = $_SESSION['login'];
		
        $crud = new crud('usuarios'); 
        $crud->atualizar("nome='$nome',email='$email', senha='$senha', endereco='$endereco', listaEstados='$listaEstados'", "codigo_pessoa='$codigo_pessoa'");
		echo "<script language='javascript' type='text/javascript'>window.location.href='postloginong.html';</script>";
?>