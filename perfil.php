<!DOCTYPE html>
<?php
	require_once "conexao.php";
	session_start();
	$id_pro = $_SESSION['id'];
	if(isset($_SESSION['fornecedor'])){
		$prod = "SELECT * FROM produto WHERE id_fornecedor=$id_pro ORDER BY dataCadProd DESC";
		$pegar = mysqli_query($con, $prod);
	}
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
	<!--Conteudo-->
		<div class="row sessionConteudo">

		<?php
			require_once "user.php";
		?>
	  			<div id="l-produtos" class="row mt-1">
	    			<div id="card-prod" class="card container">
	        		<div class="card-body">
								<?php
									if(isset($_SESSION['cliente'])){
								?>
	      	  				<h5 style="text-align: center;">Comprados recentemente</h5>
								<?php
									}
									else{
								?>
										<h5 style="text-align: center;">Meus Produtos</h5>
										<div class="card-group">
											<!--Inicio da primeira linha de produtos-->
										<?php
											while($buscar = mysqli_fetch_array($pegar)){
										?>
											<div class="col-sm-4">
												<div class="card">
													<a href="edit-prod.php?editProd=<?php echo $buscar["idProd"]?>">
														<div class="card-body">
																<img src="produtos/<?php echo $buscar["imgProd"]?>" style="width: 10rem; height: 10rem;"/>
														</div>
													</a>
												</div>
											</div>
										<?php
											}
										?>
									</div>
								<?php
									}
								?>


					</div>
					<?php
						if(isset($_SESSION['fornecedor'])){
					?>
					<div class="center pt-lg-4 mb-3">
						<a href="cadastro-prod.php">
						<button type="button" class="btn btn-warning">
								Adicionar Produto
						</button>
						</a>
					</div>
					<?php
						}
					?>
				</div>
				<!-- acima fecha as cards -->
			</div>
		</div>
	</div>
<!--Fim conteudo-->
		<!-- Início rodape -->
			<?php
				require_once "rodape.php";
			?>
		<!-- Fim rodape -->
<!-- fim rodape -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
</body>
<!-- arquivos javascript -->
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/validacoes.js"></script>
</html>
