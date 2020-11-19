<?php

include('inc/Conexao.php');

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$oscar = $_POST['oscar'];
$classificacao = $_POST['classificacao'];
$decada = $_POST['decada']; 
$diretor = $_POST['diretor'];
$sinopse = $_POST['sinopse'];

if(mysqli_connect_errno($criar_con))
{
	echo 'Nao conectou';
}
//busca todos os dados do aluno onde o email for igual ao recebido  
$filme = mysqli_query($criar_con, "SELECT titulo FROM filme WHERE titulo='$titulo'") or die ("nao deu para selecionar o banco");


//armazena os dados retornados do aluno
$rows = mysqli_fetch_array($filme);


//verifica quantas linhas a busca retornou
$check = mysqli_num_rows($filme);

if ($check == 0){

		if($filme = mysqli_query($criar_con ,"INSERT INTO filme (titulo,categoria,oscar,classificacao,decada,diretor,sinopse) VALUES ('$titulo','$categoria','$oscar','$classificacao','$decada','$diretor','$sinopse')")){

			echo "<script>
				   alert('Filme cadastrado com sucesso!');
				   window.location.href='cadastrar_filmes1.php';
				   </script>";
		}
		else{
	        echo "Filme nao inserido";
	    }
}
else{
	echo "<script>
		    alert('Este Filme ja esta cadastrado!');
			window.location.href='cadastrar_filmes1.php';
			</script>";
}

?>