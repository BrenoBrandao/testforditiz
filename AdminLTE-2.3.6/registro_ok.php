<?php
session_start();

$nomeLogin = $_POST['nomeLogin'];
$emailLogin = $_POST['emailLogin'];
$senhaLogin = $_POST['senhaLogin'];
$senha2Login = $_POST['senha2Login'];


$conexao = mysqli_connect('localhost','root','');

mysqli_select_db($conexao,'ditiz');

if($senhaLogin == $senha2Login)
	{
		$sql = "INSERT INTO login (nomeLogin, emailLogin, senhaLogin) VALUES ('".$nomeLogin."','".$emailLogin."','".$senhaLogin."')";

		$retorno = mysqli_query($conexao, $sql);

		if($retorno == true){
			echo "<script>alert('Cadastrado com sucesso!'); </script>";
			header("Location: login.html");
		}
		else{
			echo 'Erro!';
		}
	}
else{
	echo "<script>alert('Preencha todos os campos!'); </script>";
}
?>
