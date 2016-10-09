<?php

session_start();// iniciou sessão (deve ser usado em TODAS as telas sempre na primeira linha do php)
if(!isset($_SESSION['emailLogin'])) //validou sessão (deve conter em todas telas no início do código, logo após o start)
{
	echo "<script>location.href='login.html';</script>";
}
else{
	$_SESSION['emailLogin'];
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->

	<script src="jquery-3.1.1.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
	body{
		background-color: #ecf0f5;
	}
	#pesquisa{
		width: 99%;
		margin-left: 0.5%;
		margin-right: 0.5%; 
		margin-top: 1%; 		
	}
	#btn1{
		width: 100%;
		text-align: center;
		padding: 15px 20px;
		border: 1px solid #8cb8ff;
		border-radius: 6px;
		font-size: 15px;
		background-color: #8cb8ff;
	}
	.btn{
		width: 15%;
		border-radius: 2em;
		background-color: #bfd7ff;
		margin-top: 0.5%;
		margin-left: 25%;
	}
	.btn:hover{
		background-color: #eff5ff;
	}
	#submit{
		border-radius: 2em;
		background-color: #7795c6;
		width: 40%;
		font-size: 15px;
		margin-left: 30%;
	}
	#submit:hover{
		background-color: #8fa3c4;
	}
	#btn2{
	width: 99%;
	margin-left: 0.5%;
	margin-right: 0.5%; 
    text-align: center;
    padding: 15px 20px;
    border: 1px solid #FA5858;
    border-radius: 6px;
	font-size: 15px;
	background-color: #FA5858;
}
#btnAlterar{
	width: 100%;
	background-color: #dddd90;
	border-radius: 2em;
	border: 0px;
	e8e8b7
}
#btnAlterar:hover{
	background-color: #e8e8b7;
}
#btnSair{
	border: 0px;
	float: right;
	border-radius: 2em;
	background-color:  #FA5858;
}
#gravar{
	margin-top: 2%;
}
@media screen and (max-width: 1000px){
	.btn{
		width: 48%;
		margin-left: 0%;
	}
}
  #bloco{
	width: 80%;
	margin-left: 10%;
	margin-right: 10%;
	background-color: white;
	border-radius: 2em;
	padding: 2%;
  }
  @media screen and (max-width: 1000px){
	#bloco{
	width: 96%;
	margin-left: 2%;
	margin-right: 2%;
	margin-top: 15%;
  }
}
  </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div id="bloco">
	<?php
	include_once 'classProduto.php';
	
	$produto = new Produto(); //cria um novo produto com dados VAZIOS
	$resultado = $produto->executaLista();
	?>
	
	<?php
	if (isset($_POST['excluir'])) {
		$resultado = $produto->excluir($_POST['idProduto']);
		if ($resultado) {
			header('Location:index.php');
			echo "<script>alert('Excluído com sucesso!');</script>";
		} else {
			echo "<script>alert('Erro em: ');</script>" . $produto->conexao->error;
		}
	}
	?>
  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- logo for regular state and mobile devices -->
     
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
	<button type="button" class="btn" id="btnExibir">LISTAR</button>
	<button type="button" class="btn" id="btnEditar">CADASTRAR</button>
	<button type="button" id="btnSair">SAIR</button>
	  <script>
$( "#btnExibir" ).click(function() {
  $( "#all" ).show( "slow");
  $( "#gravar" ).hide( "slow");
});

$( "#btnEditar" ).click(function() {
  $( "#gravar" ).show( "slow");
  $( "#all" ).hide( "slow");
});

$( "#btnSair" ).click(function() {
  window.location.replace('/AdminLTE-2.3.6/login.html')
});
  </script>
    </nav>
  </header>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

	<!-- /.box-header -->
            <div id="all" class="box-body">
							<form action="index.php" method="POST">
					<div id="pesquisa">
						<input type="text" name="pesquisa" value="" placeholder="Pesquisar por descrição" class="form-control"></br>
						<input type="submit" value="PESQUISAR" id="btn1" name="pesquisar" />
					</div>
				</form>
				<?php        
					if (isset($_POST['pesquisar'])) {
						$resultado = $produto->executaPesquisa($_POST['pesquisa']);
					}
				?>
				<form action="index.php" method="POST" name="alterar"> 
				
				  <table id="example2" style="background-color: white;" class="table table-bordered table-hover">
					<thead>
						<tr>
						<th></th>
						<th>ID</th>
						<th>Descrição</th>
						<th>Preço</th>
						</tr>
					</thead>
					<tbody>
					<?php while ($dados = $produto->listaDados()) { ?>
					<tr>
					  <td><input type="radio" name="idProduto" value="<?php echo $dados['idProduto']; ?>"></td>
					  <td><?php echo $dados['idProduto']; ?></td>
					  <td><?php echo $dados['descricaoProduto']; ?></td>
					  <td><?php echo "R$".$dados['precoProduto']; ?></td>
				</form>
				
				<form action="alt_produto.php" method="POST" name="alterar">
					<td>
					  <input type="hidden" name="id" id="id" value="<?php echo $dados['idProduto'];?>">
					  <input type="hidden" name="descricao" id="descricao" value="<?php echo $dados['descricaoProduto'];?>">
					  <input type="hidden" name="preco" id="preco" value="<?php echo $dados['precoProduto'];?>">
					  <input type="submit" value = "Alterar" id="btnAlterar">
					  </td>
				</form>
					<?php } ?>
					</tr>
					</tbody>
				  </table>
				  <input type="submit" value="EXCLUIR" id="btn2" name="excluir" />
            </div>
	
	
	
	
	
	        <div id="gravar" style="display: none;" class="box box-primary">
				<div class="box-header with-border">
				<h3 class="box-title">Cadastro de produto</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="produto_ok.php" method="POST">
					<div class="box-body">
						
						<div class="form-group">
						<label for="exampleInputDescricao">Descrição do produto:</label>
						<input type="text" required="required"  class="form-control" id="descricaoProduto" name="descricaoProduto" placeholder="Descrição">
						</div>
						
						<div class="form-group">
						<label for="exampleInputPreco">Preço do produto:</label>
						<input type="text" required="required" class="form-control" id="precoProduto" name="precoProduto" placeholder="Preço">
						</div>
		
					</div>
					<!-- /.box-body -->
		
					<div class="box-footer">
						<button type="submit" id="submit"><STRONG>GRAVAR</STRONG></button>
					</div>
				</form>
            </div>
	
	
	
	
    <!-- /.content -->
  </div>

</div>
</body>
</html>
