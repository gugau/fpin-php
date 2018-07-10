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
		<style>
					td{text-align: center}
			table, th, td {
				border: 1px solid black;
				border-collapse: collapse;
			}
		</style>
        
        
<div class="geral">      
    <table border = "1">
     <?php
					
		require_once 'config/conexao.class.php';
		require_once 'config/crud.class.php';

		$con = new conexao(); 
		$con->connect();
		
				
		$id = $_SESSION['login'];
		
		$consulta = mysql_query("SELECT * 
								FROM usuarios u
								INNER JOIN intermediario i ON i.cod_pessoa =  u.codigo_pessoa 
								INNER JOIN atividades a ON a.id_atv = i.id_atv
								WHERE i.cod_pessoa = $id");
								
			echo "<tr><th>Voluntario</th><th>Atividade Cadastrada</th><th>Email do voluntario</th></tr>";
								
			while ($row = mysql_fetch_assoc($consulta)) {
				
				
				echo "<tr>"."<td>".$row['nome']."</td>"."<td>".$row['nomeAtv']."</td>"."<td>".$row['email']."</td></tr>";	
			}
		?>
	</table>
	<p><a class="button" href="postloginpess.html">Voltar</a></p>
</div>        
        <footer>
        	<a href="leiame.txt">leiame.txt</a>
        </footer>
		

</body>
</html>

