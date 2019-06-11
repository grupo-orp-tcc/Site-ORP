<!DOCTYPE html>
<html lang="pt-br">
<?php
	require_once "conexao.php";
	session_start();
	$idProd = $_GET["editProd"];
	$query = "SELECT * FROM produto WHERE idProd = $idProd";
	$exibir = mysqli_query($con, $query);
	$mostrar = mysqli_fetch_array($exibir);
?>

<head>
	<title>Blusas Femininas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

<div class="container col-md-9 mb-4">
	<div class="row mt-5">
		<div class="col-md-7 mb-6">
				<div class="main-product-image space">
					<div id="product-carousel" class="carousel slide">
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img id="pri-img" src="produtos/<?php echo $mostrar["imgProd"]?>" style="width: 520px; height: 420px">
							</div>
							<div class="carousel-item"><img id="sec-img" src="produtos/<?php echo $mostrar["imgProd"]?>" style="width: 520px; height: 420px"></div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#product-carousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="carousel-control-next" href="#product-carousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
		</div>
		<div class="col-lg-5" id="borda-prod">
			<h3 class="page-header titu" align="center"><input type="text" name="nome" class="form-control" value="<?php echo $mostrar["nomeProd"]?>"></h3>
			<form id="espe" class="form-horizontal" action="#" method="post">
				<!-- Preco  -->
				<div class="form-group row marg">
					<h5 class="col-sm-3 col-md-8"><input type="text" name="nome" class="form-control" value="<?php echo $mostrar["qtddProd"]?>">
            <br/>peças por: R$<input type="text" name="nome" class="form-control" value="<?php echo $mostrar["precoProd"]?>"></h5>
				</div>
				<br/>
				<div class="form-group row marg">
					<h5 class="col-sm-3 col-md-8">Calculo de Frete:</h5>
						<div class="col-sm-8 col-md-8">
							<center>
								<input type="text" class="form-control" placeholder="CEP "id="CEPEsp">
							</center>
						</div>
						<div class="col-sm-6 col-md-4">
								<button type="button" class="btn">Calcular</button>
						</div>
				</div>
				<div class="form-group row marg ml-5">
					<div class="col-sm-12 col-md-4 ml-4">
						<input type="button" class="btn bg-warning" value="Editar Dados do Produto">
					</div>
				</div>
		</div>
	</div>
	</form>
</div>
	<div class="divider-b mt-4" id="dividores"></div>
		<h3 align="center">Especificações </h3>
		<p class="esp"><?php echo $mostrar["descriProd"]?></p>
	<div class="divider-b mt-5" id="dividores"></div>

	<!-- fim conteudo -->

	<!-- Footer -->
<?php
	require_once "rodape.php";
?>
	<div class="modal fade" id="ModalEsp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Formas de Pagamento</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					API com a PagSeguro
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- arquivos javascript -->
	<!-- jquery, popper.js -->
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>

</body>

</html>
