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
                	<li><a href="index.php">Home</a></li>
                    <li><a href="facaparte.html">Faça parte</a></li>
                    <li><a href="form.html">Cadastre-se</a></li>
                    <li><a href="parceiras.php">ONGs parceiras</a></li>
                    <li><a href="contato.html">Contato</a></li>
                    <li style="float:right"><a href="login.html">Login</a></li>
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
<table width="850" border=1>
    
    <caption style="font-size:24px">Conheça nossas parceiras</caption>
        
   <?php
					
		require_once 'config/conexao.class.php';
		require_once 'config/crud.class.php';

		$con = new conexao(); 
		$con->connect();
		
	
		
		$consulta = mysql_query("SELECT * 
								FROM usuarios 
								WHERE tipo = 2");
								
				echo "<tr><th>Nome</th><th>Telefone</th><th>Email da ONG</th><th>Endereço</th><th>UF</th></tr>";
				
			while ($row = mysql_fetch_assoc($consulta)) {
								
				echo "<tr>"."<td>".$row['nome']."</td>"."<td>".$row['tel']."</td>"."<td>".$row['email']."</td>"."<td>".$row['endereco']."</td>"."<td>".$row['listaEstados']."</td>"."</tr>";	
			}
		?>

        
        </table>
</div>        
        <footer>
        	<a href="leiame.txt">leiame.txt</a>
        </footer>
		

</body>
</html>

