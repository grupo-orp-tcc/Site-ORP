<!DOCTYPE html>
<html>
	<head>
		title>ORP</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="refresh" content="300" />
		<!--<link href="js/sweetalert.min.css" rel="stylesheet">-->
		<!-- bootstrap css -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="css/sweetalert2.min.css" rel="stylesheet">
	</head>
	<body>
		<!--Menu-->
			<?php
				require_once "menu.php";
			?>
		<!--Fim Menu-->
		<!--Inicio Perfil do usuario-->
			<div id="card" class="card" style="width: 18rem;">
				<div class="card-config">
					<div title="Upload de imagem" style="cursor:pointer;" class="image-upload">
						<label for="file-input">
							<div class="hover-image">
								<img style="cursor:pointer;" src="img\perfil_user\perfil.png" height="150px"/>
								<span class="texto">Adicione uma imagem</span>
							</div>
						</label>
	    				<input id="file-input" style="cursor:pointer;" type="file" accept="image/jpeg,.jpg,image/png,.png,.jpeg,image/webp,.webp"/>
					</div>
						<h5 class="card-title">Suas informações</h5>
						<p class="card-text">Nome:</p>
						<p class="card-text">E-mail:</p>
						<p class="card-text">CPF:</p>
						<p class="card-text">Contato:</p>
						<p class="card-text">Nome:</p>

				</div>
			</div>
		<!--Fim perfil do usuario-->
		<form action="" method="post" id="configuracoes">
		<!--Inicio Editar conteudo-->
		<center><h1>Configurações</h1></br></center>
			<div class="row">
				<div class="col-sm-4">
					<label><h5>Nome</h5></label>
						<input type="text" class="form-control" placeholder="Novo Nome">
				</div>
				<div class="col-sm-4">
					<label><h5>Contato</h5></label>
						<input type="text" class="form-control" placeholder="Atualizar contato">
				</div>
				<div class="col-sm-4">
					<label><h5>E-mail</h5></label>
					<input type="text" class="form-control" placeholder="Atualizar E-mail">
				</div>
				<div class="col-sm-4">
					</br></br><label><h5>Antiga Senha</h5></label>
						<input type="text" class="form-control" placeholder="Antiga senha">
				</div>
				<div class="col-sm-4">
					</br></br><label><h5>Nova Senha</h5></label>
						<input type="text" class="form-control" placeholder="Nova senha">
				</div>
			</div>
			<div class="row">
				<div id="config-face" class="col-sm-4">
					</br></br></br><label>Facebook</label></br>
					<img src="img/perfil_user/facebook.jpg" title="Imagem meramente ilustrativa"></br>
					</br><input type="text" class="form-control" placeholder="Anexar link Facebook"></br>
				</div>
				<div class="col-sm-4">
				</br></br><label><h5>Redes Sociais</h5></label></br>
					<label>Instagram</label></br>
					<img src="img/perfil_user/instagram.jpg" title="Imagem meramente ilustrativa"></br>
					</br><input type="text" class="form-control" placeholder="Anexar link Instagram"></br>
				</div>
				<div id="config-twitter" class="col-sm-4">
					</br></br></br><label>Twitter</label></br>
					<img src="img/perfil_user/twitter.jpg" title="Imagem meramente ilustrativa"></br>
					</br><input type="text" class="form-control" placeholder="Anexar link Twitter"></br>
				</div>
				<div class="col-sm-1" id="config-botton">
					<input name="att" value="Atualizar"  class="btn btn-primary btn-lg" type="submit">
				</div>
			</div>
		<!--Fim Editar conteudo-->
		</form>
				<!-- arquivos javascript -->
			<script src="js/jquery.js"></script>
			<script src="js/popper.js"></script>
			<script src="js/bootstrap.js"></script>
			<script src="js/validacoes.js"></script>
	</body>

</html>
