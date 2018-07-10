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
 	
	<?php 
	
		require_once 'config/conexao.class.php';
		require_once 'config/crud.class.php';

		$con = new conexao(); 
		$con->connect();
  
		$login = $_POST['login'];
		$entrar = $_POST['entrar'];
		$senha = $_POST['senha'];
		$tipo = $_POST['tipo'];

    if (isset($entrar)) {
            
      $verifica = mysql_query("SELECT * FROM usuarios WHERE codigo_pessoa = '$login' AND senha = '$senha' AND tipo = $tipo");

		switch ($tipo){
			
			case 1:
			
				if(mysql_num_rows ($verifica) > 0 )
				{
					$_SESSION['login'] = $login;
					$_SESSION['senha'] = $senha;
					header('location:postloginpess.html');
				}else{	  				  
					echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos 1');window.location.href='login.html';</script>";
					unset ($_SESSION['login']);
					unset ($_SESSION['senha']);
				}
				break;
				
			case 2:
				if(mysql_num_rows ($verifica) > 0 )
				{
					$_SESSION['login'] = $login;
					$_SESSION['senha'] = $senha;
					header('location:postloginong.html');
				}else{	  				  
					echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos 1');window.location.href='login.html';</script>";
					unset ($_SESSION['login']);
					unset ($_SESSION['senha']);
				}
				break;
		}
	}
	
?>
	
</div>        
        <footer>
        	<a href="leiame.txt">leiame.txt</a>
        </footer>
		

</body>
</html>

