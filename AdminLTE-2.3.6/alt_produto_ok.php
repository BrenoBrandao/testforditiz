<?php
session_start();// iniciou sessão (deve ser usado em TODAS as telas sempre na primeira linha do php)// adicionou variável na sessão (logo após fazer login)
if(!isset($_SESSION['emailLogin'])) //validou sessão (deve conter em todas telas no início do código, logo após o start)
{
	echo "<script>alert('Favor fazer login!');</script>";
	echo "<script>location.href='../bootstrap/index.php';</script>";
} // iniciou sessão (deve ser usado em TODAS as telas sempre na primeira linha do php)

$conexao = mysqli_connect ('localhost', 'root', '');

mysqli_select_db ($conexao, 'ditiz');

$sql = "update produto set 
		descricaoProduto = '".$_POST ['descricaoProduto_alt']."',
		precoProduto = '".$_POST ['precoProduto_alt']."'
		where idProduto = '".$_POST ['id']."' ";


$retorno = mysqli_query($conexao, $sql);


if ($retorno == true) 
{
echo " <script>alert('Alterado com sucesso!'); </script>";
echo " <script>location.href='index.php'; </script>";
} else{
echo 'Erro!';
}

?>