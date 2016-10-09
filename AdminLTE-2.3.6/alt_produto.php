<?php

session_start();// iniciou sessão (deve ser usado em TODAS as telas sempre na primeira linha do php)
if(!isset($_SESSION['emailLogin'])) //validou sessão (deve conter em todas telas no início do código, logo após o start)
{
	echo "<script>location.href='login.html';</script>";
}
else{
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
	#btnVoltar{
		width: 20%;
		border-radius: 2em;
		background-color: #bfd7ff;
		margin-top: 0.5%;
		margin-left: 40%;
		margin-right: 40%;
	}
	#btnVoltar:hover{
		background-color: #eff5ff;
	}
	#submit{
		border: 1px dotted;
		border-radius: 2em;
		background-color: #fff69b;
		width: 40%;
		font-size: 15px;
		margin-left: 30%;
	}
	#submit:hover{
		background-color: #fff8b2;
	}
@media screen and (max-width: 1000px){
	#btnVoltar{
		width: 100%;
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



  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- logo for regular state and mobile devices -->
      
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
	<button type="button" class="btn" id="btnVoltar">VOLTAR</button>
	  <script>
$( "#btnVoltar" ).click(function() {
	$(location).attr('href', 'index.php')
});
  </script>
    </nav>
  </header>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

			<div id="alt" class="box box-primary">
				
				<form role="form" action="alt_produto_ok.php" method="POST">
					<div class="box-body">
						<input type="hidden" name="id" id="id" value="<?php echo $_POST['id'];?>">
						<div class="form-group">
						<label for="exampleInputDescricao">Descrição do produto:</label>
						<input type="text" required="required"  class="form-control" id="descricaoProduto_alt" name="descricaoProduto_alt" value="<?php echo $_POST['descricao'];?>">
						</div>
						
						<div class="form-group">
						<label for="exampleInputPreco">Preço do produto:</label>
						<input type="text" required="required" class="form-control" id="precoProduto_alt" name="precoProduto_alt" value="<?php echo $_POST['preco'];?>">
						</div>
		
					</div>
					<!-- /.box-body -->
		
					<div class="box-footer">
						<button type="submit" id="submit"><STRONG>ALTERAR</STRONG></button>
					</div>
				</form>
				
			</div>
	
	
	
	
    <!-- /.content -->
  </div>
</div>

</body>
</html>
