<?php

session_start();

session_destroy();

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
                	<li><a href="index.php">Home</a></li>
                    <li><a href="facaparte.html">Faça parte</a></li>
                    <li><a href="form.html">Cadastre-se</a></li>
                    <li><a href="parceiras.php">ONGs parceiras</a></li>
                    <li><a href="contato.html">Contato</a></li>
                    <li style="float:right"><a href="login.html">Login</a></li>
                    <li style="float:right"><a href="leiame.txt">Sobre</a></li>
                </ul>
        </header>
        
<div class="geral">      
    	        <h3>Voce saiu do nosso sistema!!</h3>
				<p><a class="button" href="index.php">Voltar</a></p>
</div>
        <footer>
        	<a href="leiame.txt">leiame.txt</a>
        </footer>
		

</body>
</html>
