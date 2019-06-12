<!DOCTYPE html>
<html>
	<head>
		<title>ORP</title>
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
		<br/>
		<br/>
		<?php
			require_once "user.php";
		?>
		<!--Fim perfil do usuario-->
		<form action="crud/update.php" method="post" id="configuracoes">
		<!--Inicio Editar conteudo-->

		<div class="card container col-sm-9 mt-4">
		<br/>
		<center><h2>Configurações</h2><br/></center>
			<div class="row">
				<div class="col-sm-4">
					<label><b>Nome</b></label>
					<?php
						if(isset($_SESSION['cliente'])){
					?>
							<input type="text" name="nome" class="form-control" value="<?php echo $info["nome"]?>">
					<?php
						}else{
					?>
							<input type="text" name="nome" class="form-control" value="<?php echo $info["nome_empresa"]?>">
					<?php
						}
					?>
				</div>
				<div class="col-sm-4">
					<label><b>Contato</b></label>
						<input type="text" name="contato" class="form-control" value="<?php echo $info["tel_cel"]?>">
				</div>
				<div class="col-sm-4">
					<label><b>E-mail</b></label>
					<input type="text" name="email" class="form-control" value="<?php echo $info["email"]?>">
				</div>
				<div class="col-sm-4">
					<br/><br/><label><b>Estado</b></label>
						<input type="text" name="estado" class="form-control" value="<?php echo $info["estado"]?>">
				</div>
				<div class="col-sm-4">
					<br/><br/><label><b>Cidade</b></label>
						<input type="text" name="cidade" class="form-control" value="<?php echo $info["cidade"]?>">
				</div>
				<div class="col-sm-4">
					<br/><br/><label><b>Bairro</b></label>
					<input type="text" name="bairro" class="form-control" value="<?php echo $info["bairro"]?>">
				</div>
				<div class="col-sm-4">
					<br/><br/><label><b>Numero</b></label>
					<input type="text" name="numero" class="form-control" value="<?php echo $info["num_estabe"]?>">
				</div>
				<div class="col-sm-4">
				</br></br><label><b>Complemento</b></label>
						<input type="text" name="complemento" class="form-control" value="<?php echo $info["complemento"]?>" placeholder="Adicionar Complemento">
				</div>
				<div class="col-sm-4">
				</br></br><label><b>CEP</b></label>
					<input type="text" name="cep" class="form-control" value="<?php echo $info["cep"]?>">
				</div>
				<div class="col-sm-4">
					</br></br><label><b>Antiga Senha</b></label>
						<input type="password" name="antSenha" class="form-control" placeholder="Senha antiga">
				</div>
				<div class="col-sm-4">
						</br></br><label><b>Nova Senha</b></label>
						<input type="password" name="senha" class="form-control" placeholder="Nova senha">
				</div>
			</div>
			<div class="col-sm-12">
				<center></br></br><label><h5><b>Redes Sociais</b></h5></label></br></center>
			</div>
			<div class="row">
				<div id="config-face" class="col-sm-4">
					<center>
						<label><b>Facebook</b></label></br>
						<img src="img/perfil_user/facebook.jpg" title="Imagem meramente ilustrativa"></br>
					</center>
					</br><input type="text" class="form-control" placeholder="Anexar link Facebook"></br>
				</div>
				<div class="col-sm-4">
					<center>
						<label>Instagram</label></br>
						<img src="img/perfil_user/instagram.jpg" title="Imagem meramente ilustrativa"></br>
					</center>
					</br><input type="text" class="form-control" placeholder="Anexar link Instagram"></br>
				</div>
				<div id="config-twitter" class="col-sm-4">
					<center>
						<label><b>Twitter</b></label></br>
						<img src="img/perfil_user/twitter.jpg" title="Imagem meramente ilustrativa"></br>
					</center>
					</br><input type="text" class="form-control" placeholder="Anexar link Twitter"></br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12" id="config-botton">
					<center>
						<input name="att" value="Atualizar"  class="btn bg-warning" type="submit">
					</center>
				</div>
			</div>
			<br/>
		</div>
		<!--Fim Editar conteudo-->
		</form>
		<form action="delete.php">
		<div class="col-sm-12" id="config-botton">
			<br/>
					<input name="desativar" value="Desativar minha conta"  class="btn bg-warning" type="submit">
		</div>
	</form>

				<!-- arquivos javascript -->
			<script src="js/jquery.js"></script>
			<script src="js/popper.js"></script>
			<script src="js/bootstrap.js"></script>
			<script src="js/validacoes.js"></script>
	</body>

</html>
