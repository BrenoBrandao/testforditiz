<?php
session_start();


$emailLogin = $_POST['emailLogin'];
$senhaLogin = ($_POST['senhaLogin']);

$conexao = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexao, 'ditiz');

$sql = " SELECT emailLogin, senhaLogin FROM login
			WHERE senhaLogin = '".$senhaLogin."' and emailLogin = '".$emailLogin."' ";
			
$dados = mysqli_query($conexao, $sql);

$qtde_linhas = mysqli_num_rows($dados);

if($emailLogin=="" || $senhaLogin==""){
	echo " <script>alert('Preencha todos os campos!'); </script>";
	echo " <script>location.href ='/AdminLTE-2.3.6/pages/examples/login.html'; </script>";
} else{

if($qtde_linhas == 0){

	echo " <script>alert('Usuario e senha incorretos!'); </script>";
	echo " <script>location.href ='/AdminLTE-2.3.6/pages/examples/login.html'; </script>";
}else{
	$_SESSION['emailLogin'] = $emailLogin; // adicionou variável na sessão (logo após fazer login)
	echo " <script>alert('Seja bem vindo(a) $emailLogin'); </script>";
	echo " <script>location.href= 'index.php'; </script>";
	
}
}
?>