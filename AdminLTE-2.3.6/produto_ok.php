<?php
session_start();// iniciou sessão (deve ser usado em TODAS as telas sempre na primeira linha do php)
if(!isset($_SESSION['emailLogin'])) //validou sessão (deve conter em todas telas no início do código, logo após o start)
{
	echo "<script>alert('Favor fazer login!');</script>";
	echo "<script>location.href='pages/examples/login.html';</script>";
}
else{
	

$descricaoProduto = $_POST['descricaoProduto'];
$precoProduto = $_POST['precoProduto'];


$conexao = mysqli_connect('localhost','root','');

mysqli_select_db($conexao,'ditiz');

if($descricaoProduto != '' && $precoProduto != '')
	{
		$sql = "insert into produto (descricaoProduto, precoProduto) values('".$descricaoProduto."','".$precoProduto."');";

		$retorno = mysqli_query($conexao, $sql);

		if($retorno == true){
			echo "<script>alert('Gravado com sucesso!'); </script>";
			//echo "<script>location.href='index.php';</script>";
			header("Location: index.php");
		}
		else{
			echo 'Erro!';
		}
	}
else{
	echo "<script>alert('Preencha todos os campos!'); </script>";
}
}

?>