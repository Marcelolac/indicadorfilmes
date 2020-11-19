<?php 
	session_start();
	include('inc/Conexao.php');

	

	

	$tudo = mysqli_query($criar_con, "SELECT * FROM filme");
	//verifica quantas linhas a busca retornou
	$total = mysqli_num_rows($tudo);
	
	
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

        <!-- Pagina central -->
        <div id="page-wrapper">
            <div class="row">
                <br>
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Filmes Indicados
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
										<tr Style="background-color:#337ab7; color:white">
											<th><center>Título</center></th>
											<th><center>Categoria</center></th>
											<th><center>Oscar</center></th>
											<th><center>Classificação</center></th>
											<th><center>Decada</center></th>
											<th><center>Diretor</center></th>
											<th><center>Sinopse</center></th>
										</tr>
									</thead>
                                    <tbody>

                                        <?php
                                           
										
											$categoria = $_POST['categoria'];
											if ($categoria == 'comedia' || $categoria == 'romance'){
												$comediaromantica = 'comediaromantica';
											}else{
												$comediaromantica = 'categoria';
											}
											$oscar = $_POST['oscar'];
											$classificacao = $_POST['classificacao'];
											$decada = $_POST['decada'];
											$diretor = $_POST['diretor'];
											
											$resultado = mysqli_query($criar_con, "SELECT * FROM filme WHERE ('$categoria' = 'todas'  or categoria = '$categoria' or categoria = '$comediaromantica') AND ('$oscar' = 'tanto faz' or oscar = '$oscar') AND ('$classificacao' = 'todas' or classificacao = '$classificacao') AND ('$decada' = 'todas' or decada = '$decada') AND ('$diretor' = 'todos' or diretor = '$diretor') ORDER BY titulo ASC");
                                            
                                             while ($linha=mysqli_fetch_array($resultado)) {
												
												$codigo = $linha["pk_filme"];
                                                $titulo  =  $linha["titulo"];
                                                $categoria  =  $linha["categoria"];
                                                $oscar  =  $linha["oscar"];
												$classificacao  =  $linha["classificacao"];
												$decada  =  $linha["decada"];
												$diretor  =  $linha["diretor"];
												$sinopse  =  $linha["sinopse"];
													
													echo("<tr><td><center>$titulo</td>");
													echo("<td><center>$categoria</td>");
													echo("<td><center>$oscar</td>");
                                                    echo("<td><center>$classificacao</td>");
													echo("<td><center>$decada</td>");
													echo("<td><center>$diretor</td>");
													echo("<td>$sinopse</td>");
											 										
													
											}
											if(!empty($codigo)){
												echo ("<p>Os Filmes a serem Indicados São:</p>");
											}else{
												echo ("<p>Não há nenhum Filme na Base de dados a ser Indicado com essas Caracteristicas!</p>");
											}
											
                                        ?>    
                                        </tbody>
																				
                                </table>
									
								
									<!-- /.botão 1,2... -->
									
                                        
										<!-- /.botão 1,2... fim-->
                            </div>
							<a href="index.php">
								 <button type="button" class="btn btn-success">Voltar</button>
							</a>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
					
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
