	<?php
		session_start();
	?>
<!doctype html>
<html>
    <head>
   		<meta charset="utf-8">
   		<title>Agência Amiga</title>
        <link rel="stylesheet" type="text/css" href="agenciaamiga.css">
    </head>
    
    <body>
    	
        <header id="menu">
            	<ul>
                    <li style="float:right"><a href="logout.php">Log-out</a></li>
                    <li style="float:right"><a href="leiame.txt">Sobre</a></li>
                </ul>
        </header>
        
<div class="geral">      
    <table border = "1">
     <?php
					
		require_once 'config/conexao.class.php';
		require_once 'config/crud.class.php';

		$con = new conexao(); 
		$con->connect();
		
				
		$codigo_pessoa = $_SESSION['login'];
		
		$consulta = mysql_query("SELECT * 
								FROM usuarios 
								WHERE codigo_pessoa = $codigo_pessoa");
		while ($row = mysql_fetch_assoc($consulta)) {
					
			echo "<form action='alteraong.php' method='post'>";
			echo "<p>Nome completo/Nome da ong:</p>";
			echo "<input type='text' name='nome' value = ".$row['nome'].">";
			echo "<p>E-mail:</p>";
			echo "<input type='text' name='email' value = ".$row['email'].">";
			echo "<p>Senha:</p>";
			echo "<input type='text' name='senha' value = ".$row['senha'].">";
			echo "<p>Endereco:</p>";
			echo "<input type='text' name='endereco' value = ".$row['endereco'].">";
			echo "<p>Estado:</p>";
			echo "<input type='text' name='listaEstados' value = ".$row['listaEstados'].">";
			echo "<p><input type='Submit' value = 'Alterar'></p>";
		}
		
		?>
	</table>
	<p><a class="button" href="postloginong.html">Voltar</a></p>
</div>        
        <footer>
        	<a href="leiame.txt">leiame.txt</a>
        </footer>
		

</body>
</html>