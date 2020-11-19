<?php 
	require('Conexao.php');
	$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");

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

        <!-- Pagina central -->
        <div id="page-wrapper">
            <div class="row">
                <br>
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Filmes Cadastrados
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr Style="background-color:#535353; color:white">
                                            <th ><center>Título</center></th>
                                            <th><center>Categoria</center></th>
											<th><center>Oscar</center></th>
                                            <th><center>Classificação</center></th>
											<th><center>Decada</center></th>
											<th><center>Diretor</center></th>
											<th><center>Sinopse</center></th>
											<th><center>Alterar</center></th>
											<th><center>Deletar</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                           $t=$itens_por_paginas*$pagina;
                                           if($pagina==1){
                                              $inicio=0;
                                            }

                                            $resultado = mysqli_query($criar_con, "SELECT * FROM filme ORDER BY titulo ASC limit $inicio, $itens_por_paginas");
                                            
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
																								
													echo("<td><center><a href='alterarfilme.php?cod=$codigo'><button type=\"button\" class=\"btn btn-success\">Alterar</button></a></center></td>");
													echo("<td><center><a href='deletarfilme.php?cod=$codigo'><button type=\"button\" class=\"btn btn-danger\">Deletar</button></a></center></td></tr>");
											}
                                        ?>    
                                        </tbody>
                                </table>
									<!-- /.botão 1,2... -->
                                        <center> 
                                           <nav aria-label="Page navigation">
                                              <ul class="pagination">
                                                <li>
                                                  <a href="filmes_cadastrados.php?pagina=0" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                  </a>
                                                </li>
                                                <?php
                                                for($i=1;$i<=$numero_paginas;$i++){
                                                    $estilo = "";
                                                    if($pagina==$i)
                                                        $estilo = "class=\"active\"";
                                                    ?>
                                                <li <?php echo $estilo;?> ><a  href="filmes_cadastrados.php?pagina=<?php  echo  $i; ?>"><?php echo  $i; ?></a></li>
                                                <?php } ?>
                                                <li>
                                                  <a href="filmes_cadastrados.php?pagina=<?php echo $numero_paginas ?>" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                  </a>
                                                </li>
                                              </ul>
                                            </nav>
                                        </center>
										<!-- /.botão 1,2... fim-->
                            </div>
							<a href="cadastrar_filmes1.php">
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
