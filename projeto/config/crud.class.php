<?php
  
  class crud
  {
	private $sql_ins="";
	private $tabela="";
	private $sql_sel="";

    
  	public function __construct($tabela)
  	{
  		$this->tabela = $tabela;
		return $this->tabela;
	}
  		
	
	public function inserir($campos, $valores)
	{
		$this->sql_ins = "INSERT INTO " . $this->tabela . " ($campos) VALUES ($valores)";
		if(!$this->ins = mysql_query($this->sql_ins))
		{
			die ("<center>Erro na inclusão " . '<br>Linha: ' . __LINE__ . "<br>" . mysql_error() . "</center>");
		}else{
			print "<script language='javascript' type='text/javascript'>alert('Sucesso!!');</script>";
		}
	}

	public function atualizar($camposvalores, $where = NULL)
	{
		if ($where)
		{
			$this->sql_upd = "UPDATE  " . $this->tabela . " SET $camposvalores WHERE $where";			
		}else{
			$this->sql_upd = "UPDATE  " . $this->tabela . " SET $camposvalores";
	  	}
	  	
		if(!$this->upd = mysql_query($this->sql_upd))
		{
			die ("<script language='javascript' type='text/javascript'>alert('erro!!');</script>");
		}else{
			print "<script language='javascript' type='text/javascript'>alert('Sucesso!!');</script>";
		}
	}  	
	
	public function excluir($where = NULL) 
	{
		if ($where)
		{
			$this->sql_sel = "SELECT * FROM " . $this->tabela . " WHERE $where";
			$this->sql_del = "DELETE FROM " . $this->tabela . " WHERE $where";
		}else{
			$this->sql_sel = "SELECT * FROM " . $this->tabela;
			$this->sql_del = "DELETE FROM " . $this->tabela;
	  	}
	  	$sel=mysql_query($this->sql_sel);
		$regs=mysql_num_rows($sel);
		
	  if ($regs > 0){
		if(!$this->del = mysql_query($this->sql_del))
		{
			die ("<center>Erro na exclusão " . '<br>Linha: ' . __LINE__ . "<br>" .mysql_error() ."<br>
				<a href='index.php'>Voltar ao Menu</a></center>" );
		}else{
			print "<script language='javascript' type='text/javascript'>alert('Sucesso!!');</script>";
		}
	  }else{
			print "<script language='javascript' type='text/javascript'>alert('Erro!!');</script>";
	  }
	}  	
		
 }  		
  	
?>