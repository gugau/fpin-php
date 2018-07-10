	<?php
		session_start();
	?>
		<?php
			
		require_once 'config/conexao.class.php';
		require_once 'config/crud.class.php';

		$con = new conexao(); 
		$con->connect();
		
				
		$idVoluntario = $_SESSION['login'];
			
			
	if(isset($_POST["nome"])){
		
			foreach($_POST["nome"] as $nome){
				$crud = new crud('intermediario');
				$crud->inserir("cod_pessoa,id_atv", "'$idVoluntario','$nome'");
				echo"<script language='javascript' type='text/javascript'>window.location.href='postloginpess.html';</script>";
			}
	}
		else{
			echo "Você não escolheu nenhuma atividade!";
		}
		?>