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
					<li style="float:left"><a href="postloginpess.html">Voltar</a></li>
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

	<h1>Atividades</h1>
        <br>
        <h2>Escolha abaixo as atividades que deseja participar!</h2>
        <p class="justify">Depois de se cadastrar em atividades as ongs parceiras entrarao em contato para mais informaçoes, voce pode usar nossa central de notificaçao para acompanhar suas noticias de acordo com atividades registradas!</p>
        <br>
        <br>
		
		<form action="cadastrado.php" method = "post">	
		<table border = "1">
		
		<?php
		
		require_once 'config/conexao.class.php';
		require_once 'config/crud.class.php';

		$con = new conexao(); 
		$con->connect();
		
		$consulta = mysql_query("SELECT * FROM atividades");
		
		echo "<tr><th></th><th>ID</th><th>Nome</th><th>Descriçao</th></tr>";
		
		while ($row = mysql_fetch_assoc($consulta)) {
			
			
			echo "<tr><td>"."<input type='checkbox' name='nome[]' value='".$row['id_atv']."'>"."</td>"."<td>".$row['id_atv']."</td>"."<td>".$row['nomeAtv']."</td>"."<td>".$row['descricaoAtv']."</td></tr>";	
		}
		?>
		
		</table>
		<input type = 'submit' value = 'Cadastrar'>
		</form>

</div>        
        <footer>
        	<a href="leiame.txt">leiame.txt</a>
        </footer>
		

</body>
</html>

