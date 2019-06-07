<!DOCTYPE html>>
<?php
	require_once "conexao.php";
	session_start();
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
	  		<div id="user"  class="col-3 pt-lg-4">
	    		<div  id="card-user" class="card">
	      		<div id="cd" class="card-body">
						 	<div title="Upload de imagem" style="cursor:pointer;" class="image-upload">
								<label for="file-input">
	   							<div class="hover-image">
	   								<img style="cursor:pointer;" src="img\perfil_user\perfil.png" height="150px"/>
					  				<span class="texto">Adicione uma imagem</span>
									</div>
	    					</label>
	    					<input id="file-input" style="cursor:pointer;" type="file" accept="image/jpeg,.jpg,image/png,.png,.jpeg,image/webp,.webp"/>
							</div>
							<?php
							 	if(isset($_SESSION['cliente'])){
									$id = $_SESSION['id'];
	              	$query = "SELECT nome, cpf, tel_cel FROM cad_cliente WHERE id_cli = '$id'";
	              	$executar = mysqli_query($con, $query);
	              	$info = mysqli_fetch_array($executar);
							?>
									<center><label><?php echo $info["nome"]?></label>
										<br/><br/><label><?php echo $info["cpf"]?></label>
										<br/><label><?php echo $info["tel_cel"]?></label>
										<br/><label>Redes Sociais</label>
									</center>
							<?php
								}
								else{
									$id = $_SESSION['id'];
									$query = "SELECT nome_empresa, cnpj, tel_cel FROM cad_fornecedor WHERE id_forne = '$id'";
									$exe = mysqli_query($con, $query);
									$info = mysqli_fetch_array($exe);
							?>
									<center>
										<label><?php echo $info["nome_empresa"]?></label>
										<br/><br/><label><?php echo $info["cnpj"]?></label>
										<br/><label><?php echo $info["tel_cel"]?></label>
										<br/><label>Redes Sociais</label>
									</center>
							<?php
								}
							?>
							</div>
		    		</div>
		  		</div>
	  		<div id="l-produtos" class="col-9">
	    		<div id="card-prod">
	        		<div class="card-body">
								<canvas class="line-chart"></canvas>
								<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js">
								</script>
								<!--A criação das var tem que estar abaixo da importação-->
								<script>
									var ctx = document.getElementsByClassName("line-chart");
									var val1=2, val2=12; val3=10;
									//type, data e options
									var chartGraph = new Chart(ctx, {
										type: 'line',
										data: {
											labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
											datasets: [
												{
													label: "TAXA DE CLIQUES - 2019", //Nome da pesquisa
													data: [val1,val2,val3,14,3,15,6,14,8,12,15,5],
													borderWidth: 4,
													borderColor: 'rgba(77,166,253,0.85)',
													backgroundColor: 'transparent'
												},
												{
													label: "TAXA DE CLIQUES - 2018", //Nome da pesquisa
													data: [9,14,11,6,5,4,3,8,11,10,13,15],
													borderWidth: 4,
													borderColor: 'rgba(6,204,6,0.85)',
													backgroundColor: 'transparent'
												},
											]
										},
										options: {
											title: {
												display: true,
												fontSize: 20,
												text: "INDÍCE DE CRESCIMENTO"
											},
											labels: {
												fontStyle: "bold"
											}
										}
									});
								</script>
					</div>
				</div>
			</div>
	</div>
<!--Fim conteudo-->
<!-- inicio rodape -->
<?php
	require_once "rodape.php";
?>
<!-- fim rodape -->
</body>
<!-- arquivos javascript -->
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/validacoes.js"></script>
</html>
