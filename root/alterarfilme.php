
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
            
<!-- barra superior Fim -->  
<!-- Menu inicio -->       
		
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
                        <span class="glyphicon glyphicon glyphicon-user"></span> Alterando Filme: 
                        </div>
                        <div class="panel-body body-panel">
							
														
							<?php
								$cod=$_GET['cod'];
								require("inc/Conexao.php");
								
								$result=mysqli_query($criar_con, "select * from filme where pk_filme='$cod'") or die ("Não é possível retornar dados do Filme!");
								$linha=mysqli_fetch_array($result);
								$cod=$linha["pk_filme"];
								$titulo  =  $linha["titulo"];
                                $categoria  =  $linha["categoria"];
                                $oscar  =  $linha["oscar"];
								$classificacao  =  $linha["classificacao"];
								$decada  =  $linha["decada"];
								$diretor  =  $linha["diretor"];
								$sinopse  =  $linha["sinopse"];
								
								print("Alterando os dados do Filme:</h3><p>");
							?>

							<form action="confirma_alterarfilme.php" method="POST">

								<div class="form-row">
									
									  <label class="col-form-label">Código:</label>
									  <input type="text" class="form-control" name="cod_alter" value="<?php print($cod)?>" readonly>
									
									  <label class="col-form-label">Título:</label>
									  <input type="text" class="form-control" name="titulo_alter" value="<?php print($titulo)?>" required>
									
									  <label class="col-form-label">Categoria:</label>
									  <input type="text" class="form-control" name="categoria_alter" value="<?php print($categoria)?>" required>
									  
									  <label class="col-form-label">Oscar:</label>
									  <input type="text" class="form-control" name="oscar_alter" value="<?php print($oscar)?>" required>
									  
									  <label class="col-form-label">Classificação:</label>
									  <input type="text" class="form-control" name="classificacao_alter" value="<?php print($classificacao)?>" required>
									  
									  <label class="col-form-label">Decada:</label>
									  <input type="text" class="form-control" name="decada_alter" value="<?php print($decada)?>" required>
									  
									  <label class="col-form-label">Diretor:</label>
									  <input type="text" class="form-control" name="diretor_alter" value="<?php print($diretor)?>" required>
									  
									  <label class="col-form-label">Sinopse:</label>
									  <input type="text" class="form-control" name="sinopse_alter" value="<?php print($sinopse)?>" required>
									  									  
									</div>

								<br><center><input class="btn btn-success" role="button" type="submit" value="Alterar">
								   
								<a href="filmes_cadastrados.php"><button type="button" class="btn btn-warning">Cancelar e Voltar</button></a>	</center>
							</form>
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
