
<?php 
	session_start();
	include('inc/Conexao.php');

	

	$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;

	$itens_por_paginas=10;
		if (!$pagina) {
			$pagina = 1;
		} else {
			$pagina = $pagina;
		}

	$tudo = mysqli_query($criar_con, "SELECT * FROM filme");
	//verifica quantas linhas a busca retornou
	$total = mysqli_num_rows($tudo);
	$numero_paginas = ceil($total/$itens_por_paginas);
	$inicio = ($itens_por_paginas*$pagina)-($itens_por_paginas); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Indicador de Filmes</title>
     <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Barra superior -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> Indicador de Filmes </a>
            </div>
            
<!-- Menu fim -->
		</nav>
	</div>
	
	<!--============== -->
	<div id="page-wrapper">
            <div class="row">
                <br>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="col-lg-6">
                      <div class="panel panel-primary">
                        <div class="panel-heading">
                        <span class="glyphicon glyphicon glyphicon-user"></span> Alterando Filme  
                        </div>
                        <div class="panel-body body-panel">
							<?php
								$cod=$_POST['cod_alter'];
								$titulo_alter=$_POST['titulo_alter'];
								$categoria_alter=$_POST['categoria_alter'];
								$oscar_alter=$_POST['oscar_alter'];
								$classificacao_alter=$_POST['classificacao_alter'];
								$decada_alter=$_POST['decada_alter'];
								$diretor_alter=$_POST['diretor_alter'];
								$sinopse_alter=$_POST['sinopse_alter'];
								
								require("inc/Conexao.php");
																
								print("Alterações do Filme realizada Com Sucesso!<p>");
								print("Código: $cod<br> Título: <b>$titulo_alter</b> <br>Categoria: $categoria_alter <br>Oscar: $oscar_alter <br>Classificação: $classificacao_alter <br>Decada: $decada_alter <br>Diretor: $diretor_alter <br>Sinopse: $sinopse_alter<p>");
								
								mysqli_query($criar_con, "update filme set titulo='$titulo_alter', categoria='$categoria_alter', oscar='$oscar_alter', classificacao='$classificacao_alter', decada='$decada_alter', diretor='$diretor_alter', sinopse='$sinopse_alter' where pk_filme='$cod'") or die ("Não é possível alterar dados do Filme!");
								print("Dados do Filme alterados com sucesso!");
							?>
							
							<p><center><a href="filmes_cadastrados.php"><button type="button" class="btn btn-success">Voltar</button></a></center>
                       </div> 
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>


     <!-- jQuery -->
    <script src="jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="raphael/raphael.min.js"></script>
    <script src="morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
