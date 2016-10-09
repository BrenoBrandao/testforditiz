<?php
	Class Produto{
		private $idProduto;
		private $descricaoProduto;
		private $precoProduto;
		
		public $conexao;
		private $resource;
		private $dados;
		
		public function __construct($id='',$dp='',$pp='') {
           $this->conexao = new mysqli('localhost','root','','ditiz');
           
           $this->idProduto = $id;
           $this->descricaoProduto = $dp;
           $this->precoProduto = $pp;
       }
	   
	    public function executaLista(){
           $sql = "SELECT idProduto, descricaoProduto, precoProduto FROM produto ORDER BY descricaoProduto;";
           $this->resource = $this->conexao->query($sql);
           
           return $this->resource;
       }
	   
	    public function excluir($id) {
			if($id!='')
		{
           $sql = "DELETE FROM produto WHERE idProduto=$id";
           $resultado = $this->conexao->query($sql);
           
           return $resultado;
		}
		else{
			header("Location: index.php");
			echo "<script>alert('Selecione um produto!'); </script>";
		}
       }
	   
	    public function listaDados(){
           //transformando o resource em vetor
           $this->dados = $this->resource->fetch_array(MYSQL_ASSOC);
           return $this->dados;
       }
	          public function __destruct() {
           $this->conexao->close();//fecha a conexão com o BD
       }
	   
	   
		public function executaPesquisa($descricao) {
            $sql = "SELECT * FROM produto WHERE descricaoProduto LIKE '%$descricao%' ORDER BY descricaoProduto";
           $this->resource = $this->conexao->query($sql);
           
           return $this->resource;
           
       }
	}
?>