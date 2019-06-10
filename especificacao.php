<!DOCTYPE html>
<html lang="pt-br">
<?php
	require_once "conexao.php";
	session_start();
	$idProd = $_GET["idProd"];
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

	<div class="row inicio">
		<div class="col-lg-6 mb-4">

			<div class="">
				<div class="main-product-image space">
					<div id="product-carousel" class="carousel slide">
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img id="pri-img" src="produtos/<?php echo $mostrar["imgProd"]?>" style="width: 600px; height: 500px">
							</div>
							<div class="carousel-item"><img id="sec-img" src="produtos/<?php echo $mostrar["imgProd"]?>" style="width: 600px; height: 500px"></div>
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
		</div>
		<div class="col-lg-5" id="borda-prod">
			<h1 class="page-header font-weight-bold titu" align="center"><?php echo $mostrar["nomeProd"]?></h1>
			<div class="divider-t mt-3"></div>
			<form id="espe" class="form-horizontal" action="#" method="post">
				<!-- Preco  -->
				<div class="form-group row marg">
					<h3 class="col-sm-5 col-md-6 font-weight-bold"><?php echo $mostrar["qtddProd"]?> peças por:</h3>
					<div class="col-sm-8 col-md-5">
						<h3 style="color:red;" class="font-weight-bold" id="preco"><?php echo $mostrar["precoProd"]?></h3>
					</div>
				</div>

				<div class="form-group row marg">
					<h3 class="col-sm-3 col-md-7 font-weight-bold">Parecelas do Produto:</h3>
					<div class="col-sm-8 col-md-3">
						<button type="button" id="teste" class="btn font-weight-bold" data-toggle="modal"
							data-target="#ModalEsp">
							Formas de Pagamento
					</div>
				</div>
				<div class="form-group row marg">
					<h3 class="col-sm-3 col-md-5 font-weight-bold">Calcular Frete:</h3>
					<div class="col-sm-8 col-md-4">
						<input type="text" class="form-control" id="CEPEsp">
					</div>
					<div class="col-sm-3 col-md-2">
						<button type="button" class="btn font-weight-bold">Calcular</button>
					</div>
				</div>
				<div class="form-group row marg">
					<div class="col-sm-8 col-md-2">
						<!-- Set up a container element for the button -->
							    <div id="paypal-button-container"></div>

							    <!-- Include the PayPal JavaScript SDK -->
							    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=BRL"></script>

							    <script>
							        // Render the PayPal button into #paypal-button-container
							        paypal.Buttons({

							            // Set up the transaction
							            createOrder: function(data, actions) {
							                return actions.order.create({
							                    purchase_units: [{
							                        amount: {
							                            value: '155000.00'
							                        }
							                    }]
							                });
							            },

							            // Finalize the transaction
							            onApprove: function(data, actions) {
							                return actions.order.capture().then(function(details) {
							                    // Show a success message to the buyer
							                    alert('Compra Concluida ' + details.payer.name.given_name + '!');
							                });
							            }


							        }).render('#paypal-button-container');
							    </script>
					</div>
				</div>
		</div>
	</div>
	</form>
	<div class="divider-b mt-4"></div>
	<h2 align="center">Especificações </h2>
	<p class="esp"><?php echo $mostrar["descriProd"]?></p>
	<div class="divider-b mt-5"></div>
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
					Puxa do Banco essa Peça
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
