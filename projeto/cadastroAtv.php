	<?php
		session_start();
	?>

		<?php
			
		require_once 'config/conexao.class.php';
		require_once 'config/crud.class.php';

		$con = new conexao(); 
		$con->connect();
		
					
		$nome = $_POST['nome_atv'];
		$descricao = $_POST['desc_atv'];
					
			$crud = new crud('atividades');
			$crud->inserir("nomeAtv,descricaoAtv", "'$nome','$descricao'");
			echo"<script language='javascript' type='text/javascript'>window.location.href='postloginong.html';</script>";
			
		?>