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
                	<li><a href="postloginong.html">Voltar</a></li>
                    <li style="float:right"><a href="logout.php">Log-out</a></li>
                    <li style="float:right"><a href="leiame.txt">Sobre</a></li>
                </ul>
        </header>
        
<div class="geral">      
    	
        <h1>Cadastre Atividades</h1>
        <br>

        <form action="cadastroAtv.php" method = "post">
		
        <p>Nome Da Atividade:</p> 
        	<input name="nome_atv" type="text">
       	
        <p>Descriçao da atividade</p>
           	<input name="desc_atv" type="text" style="height: 60px" size="60">
     	<p>
        <input type="submit" Value="Cadastrar atividade">
        <input type="reset" value="Cancelar">  
        </p>
        
        </form>   
		

     
</div>        
        <footer>
        	<a href="leiame.txt">leiame.txt</a>
</footer>
		

</body>
</html>

