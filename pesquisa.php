<!DOCTYPE html>
<?php
	require_once "conexao.php";
	$produto = $_GET['produto'];
	$categoria = $_GET['cate'];
	$pag = $_GET['pag'];
	$filtro = $_GET['filtro'];
	if($produto == 'tds'){
			$query = "SELECT * FROM produto WHERE generoProd='$categoria' ORDER BY dataCadProd DESC";
	}
	else{
		$query = "SELECT * FROM produto WHERE tipoProd='$produto' AND generoProd='$categoria' ORDER BY dataCadProd DESC";
	}
	$trazer = mysqli_query($con, $query);

?>

<html lang="pt-br">
<head>
	<title>ORP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--<link href="js/sweetalert.min.css" rel="stylesheet">-->
	<!-- bootstrap css -->

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- inicio menu -->
<?php
	require_once "menu.php";
?>
<!-- fim menu -->
<!-- inicio conteudo -->

<body>
<!-- inicio carousel -->
<div id="carroselsite" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner mt-2">
			<div class="d-none d-md-block">
				<ol class="carousel-indicators">
					<li data-target="#carroselsite" data-slide-to="0" class="active"></li>
					<li data-target="#carroselsite" data-slide-to="1"></li>
					<li data-target="#carroselsite" data-slide-to="2"></li>
					<li data-target="#carroselsite" data-slide-to="3"></li>
					<li data-target="#carroselsite" data-slide-to="4"></li>
				</ol>
			</div>
			<div class="carousel-item active">
				<img class="d-block img-fluid" src="img/carousel/slide-1.png">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="img/carousel/slide-2.png">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="img/carousel/slide-3.png">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="img/carousel/slide-4.png">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="img/carousel/slide-5.png">
			</div>
		</div>
		<div class="d-none d-md-block">
			<a href="#carroselsite" class="carousel-control-prev" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a href="#carroselsite" class="carousel-control-next" role="button" data-slide="next">
				<span class="carousel-control-next-icon"></span>
				<span class="sr-only">Proximo</span>
			</a>
		</div>
</div>
<div class="conteiner-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active"><?php echo $pag?></li>
		<li class="breadcrumb-item active"><?php echo $filtro?></li>
  </ol>
</nav>
<div class="row sessionConteudo">
	<div class="col-sm-2">
		<!-- Categorias -->
		<div class="single category">
			<h3 class="side-title">Dia a Dia</h3>
			<ul class="list-unstyled">
				<li><a href="">Camiseta</a></li>
				<li><a href="">Bermuda</a></li>
				<li><a href="">Camisa</a></li>
				-
			</ul>
		</div>
	</div>
	<?php
		while($quebrar = mysqli_fetch_array($trazer)){
	?>
	<div class="col-sm-3">
		<div class="card mb-3" style="width: 18rem; height: 25rem; text-align:center;">
			<!--Card e o Tamanho dele-->
			<br/>
			<a href="especificacao.php?idProd=<?php echo $quebrar["idProd"]?>" class="card-link">
				<!--Link de Visualização-->
				<img src="produtos/<?php echo $quebrar["imgProd"]?>" style="width: 14rem; height: 15rem;"/>
				<!--Imagem do Produto-->
				<div class="card-body desc">
					<h5 class="card-subtitle text-muted"><?php echo $quebrar["nomeProd"]?></h5>
					<!--Titulo do Produto-->
					<div class="divider-b"></div>
					<h4 class="card-title text-dark">R$: <?php echo $quebrar["precoProd"]?></h4>
					<p class="text-dark">Quantidade de Peças: <?php echo $quebrar["qtddProd"]?></p>
					<!--Preço do Produto-->
				</div>
			</a>
		</div>
	</div>
	<?php
		}
	?>
</div>
<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
				<li class="page-item">
						<a class="page-link" href="#" aria-label="Previous">
						  <span aria-hidden="true">&laquo;</span>
						  <span class="sr-only">Previous</span>
						</a>
					  </li>
					  <li class="page-item"><a class="page-link" href="#">1</a></li>
					  <li class="page-item"><a class="page-link" href="#">2</a></li>
					  <li class="page-item"><a class="page-link" href="#">3</a></li>
					  <li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
						  <span aria-hidden="true">&raquo;</span>
						  <span class="sr-only">Next</span>
						</a>
					  </li>
		</ul>
	  </nav>
</div>

<!-- fim conteudo -->

<!-- Início rodape -->
	<?php
		require_once "rodape.php";
	?>
<!-- Fim rodape -->

<!-- arquivos javascript -->
<!-- jquery, popper.js -->
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>

</body>
</html>
