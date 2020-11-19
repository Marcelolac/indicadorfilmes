
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
                <center><a class="navbar-brand" href="index.php"> Indicador de Filmes </a><center>
            </div>
<!-- barra superior Fim -->  
<!-- Menu inicio -->       
		<div class="navbar-default sidebar" role="navigation"  Style="background-color:transparent">
		<div class="sidebar-nav navbar-collapse">
			<ul class="nav" id="side-menu"> 
				<li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Modo Usuário </a></li>
				<li><a href="cadastrar_filmes1.php"><span class="glyphicon glyphicon-user"></span> Modo Especialista </a></li>
				
							
				
			</ul>
		</div>
	</div>
<!-- Menu fim -->
		</nav>
	</div>
        <!-- Pagina central -->
        <div id="page-wrapper">
            <div class="row">
                <br>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="col-lg-6">
                      <div class="panel panel-primary">
                        <div class="panel-heading">
                        <span class="glyphicon glyphicon-film"></span> Indicador de Filmes  
                        </div>
                        <div class="panel-body body-panel">
                          <form action="resultado.php" method="POST">
                            <div class="form-group">
								<label>Categoria Desejada:</label>
								
								<select class="form-control" name="categoria" id="categoria" >
								  <option value="todas">Todas</option>
								  <option value="acao">Ação</option>
								  <option value="comedia">Comédia</option>
								  <option value="drama">Drama</option>
								  <option value="romance">Romance</option>
								  <option value="terror">Terror</option>
								  
								</select>
								 <br><label>Indicação ao Oscar:</label><br>
									<select class="form-control" name='oscar'>
										<option value="tanto faz">Tanto faz</option>
										<option value="sim">Sim</option>
										<option value="nao">Não</option>
								  
									</select>
							
						   		<br><label>Classificação:</label><br>
								<select class="form-control" name='classificacao'>
								  <option value="todas">Todas</option>
								  <option value="livre">Livre</option>
								  <option value="12">12anos</option>
								  <option value="16">16anos</option>
								  <option value="18">18anos</option>
								</select>
								
								<br><label>Qual Década:</label><br>
								<select class="form-control" name='decada'>
								  <option value="todas">Todas</option>
								  <option value="70">Anos 70</option>
								  <option value="80">Anos 80</option>
								  <option value="90">Anos 90</option>
								  <option value="2000">Anos 2000</option>
								  <option value="2010">Anos 2010</option>
								</select>
								 
								<br><label>Diretor:</label><br>
								<div class="form-group">
									<select class="form-control" name='diretor'>
									<option value="todos">Todos</option>
									<?php
									require("conecta.inc.php");
	$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
									
									$resultado=mysqli_query($criar_con, "Select distinct diretor from filme order by diretor") or die ("Não é possível consultar.");
										while ($linha=mysqli_fetch_array($resultado))
										{
										
										$pk_filme=$linha["pk_filme"];
										$diretor=$linha["diretor"];
										
										echo("<option value='$diretor'>$diretor</option>");
										}
									?>
									
									  
									</select>
								</div>
								
							 
							</div>
							<button type="submit" name="submit" class="btn btn-primary">Resultado</button>
                         
						 <button type="reset" name="reset" class="btn btn-warning">Limpar</button>
                         </form>
						
                         
                       </div> 
					   

                       <!-- formulario de cadastro -->
                      </div>
					  
						
                    </div>
					
                  </div>

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
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!-- AQUI VAI SER APLICADO O NOSSO JQUERY -->
	

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
