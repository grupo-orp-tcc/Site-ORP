<!DOCTYPE html>
<?php
	require_once "conexao.php";
	session_start();
?>

<html lang="pt-br">
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
	<link rel="stylesheet" href="css/styleMenu.css">
</head>
<body>
<!-- inicio menu -->
	<?php
		require_once "menu.php";
	?>
	<div class="container-fluid">
		
	
<!-- inicio carousel -->
	<div id="carroselsite" class="carousel slide " data-ride="carousel">
		<div class="carousel-inner mt-5">
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
				<img class="d-block img-fluid mt-5" src="img/carousel/slide-1.png">
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
				<span class="sr-only">Anteirior</span>
			</a>
			<a href="#carroselsite" class="carousel-control-next" role="button" data-slide="next">
				<span class="carousel-control-next-icon"></span>
				<span class="sr-only">Proximo</span>
			</a>
		</div>
	</div>
	</div>
<!-- card fileira 1 -->
	<div class="divider-t mt-5"></div>
	<h3 class="mt-3 text-center">Destaques da Semana</h3>
	<div class="row mx-5">
		<div class="col-sm-12 col-md-6 col-lg-3">
			<a href="#" class="text-dark">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="img/prod_m/r1.png" alt="Imagem de capa do card">
					<div class="card-body">
						<h5 class="card-title center">Título da Roupa </h5>
						<h4 href="#" class="card-link">R$ 450,00</h4>
						<p class="card-text">Quantidade de Roupas 10</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Tamanhos: M, G.</li>
					</ul>				
				</div>
			</a>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3">
			<a href="#" class="text-dark">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="img/prod_m/r1.png" alt="Imagem de capa do card">
					<div class="card-body">
						<h5 class="card-title center">Título da Roupa </h5>
						<h4 href="#" class="card-link">R$ 450,00</h4>
						<p class="card-text">Quantidade de Roupas 10</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Tamanhos: M, G.</li>
					</ul>				
				</div>
			</a>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3">
			<a href="#" class="text-dark">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="img/prod_m/r1.png" alt="Imagem de capa do card">
					<div class="card-body">
						<h5 class="card-title center">Título da Roupa </h5>
						<h4 href="#" class="card-link">R$ 450,00</h4>
						<p class="card-text">Quantidade de Roupas 10</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Tamanhos: M, G.</li>
					</ul>				
				</div>
			</a>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3">
			<a href="#" class="text-dark">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="img/prod_m/r1.png" alt="Imagem de capa do card">
					<div class="card-body">
						<h5 class="card-title center">Título da Roupa </h5>
						<h4 href="#" class="card-link">R$ 450,00</h4>
						<p class="card-text">Quantidade de Roupas 10</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Tamanhos: M, G.</li>
					</ul>				
				</div>
			</a>
		</div>
	</div>

<!-- card fileira 2 -->
	<div class="divider-t mt-5"></div>
	<h3 class="mt-3 text-center">Em alta</h3>
	<div class="row my-5 mx-2">
		<div class="col-sm-12 col-md-6 col-lg-3">
			<a href="#" class="text-dark">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="img/prod_m/r2.png" alt="Imagem de capa do card">
					<div class="card-body">
						<h5 class="card-title center">Título da Roupa </h5>
						<h4 href="#" class="card-link">R$ 450,00</h4>
						<p class="card-text">Quantidade de Roupas 10</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Tamanhos: M, G.</li>
					</ul>				
				</div>
			</a>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3">
			<a href="#" class="text-dark">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="img/prod_m/r2.png" alt="Imagem de capa do card">
					<div class="card-body">
						<h5 class="card-title center">Título da Roupa </h5>
						<h4 href="#" class="card-link">R$ 450,00</h4>
						<p class="card-text">Quantidade de Roupas 10</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Tamanhos: M, G.</li>
					</ul>				
				</div>
			</a>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3">
			<a href="#" class="text-dark">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="img/prod_m/r2.png" alt="Imagem de capa do card">
					<div class="card-body">
						<h5 class="card-title center">Título da Roupa </h5>
						<h4 href="#" class="card-link">R$ 450,00</h4>
						<p class="card-text">Quantidade de Roupas 10</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Tamanhos: M, G.</li>
					</ul>				
				</div>
			</a>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3">
			<a href="#" class="text-dark">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="img/prod_m/r2.png" alt="Imagem de capa do card">
					<div class="card-body">
						<h5 class="card-title center">Título da Roupa </h5>
						<h4 href="#" class="card-link">R$ 450,00</h4>
						<p class="card-text">Quantidade de Roupas 10</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Tamanhos: M, G.</li>
					</ul>				
				</div>
			</a>
		</div>
	</div>
<!-- card fileira 3 -->
<div class="divider-t mt-5"></div>
<h3 class="mt-3 text-center">Promoções da Semana</h3>
<div class="row my-5 mx-2">
	<div class="col-sm-12 col-md-6 col-lg-3">
			<a href="#" class="text-dark">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="img/prod_m/r3.png" alt="Imagem de capa do card">
					<div class="card-body">
						<h5 class="card-title center">Título da Roupa </h5>
						<h4 href="#" class="card-link">R$ 450,00</h4>
						<p class="card-text">Quantidade de Roupas 10</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Tamanhos: M, G.</li>
					</ul>				
				</div>
			</a>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3">
			<a href="#" class="text-dark">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="img/prod_m/r3.png" alt="Imagem de capa do card">
					<div class="card-body">
						<h5 class="card-title center">Título da Roupa </h5>
						<h4 href="#" class="card-link">R$ 450,00</h4>
						<p class="card-text">Quantidade de Roupas 10</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Tamanhos: M, G.</li>
					</ul>				
				</div>
			</a>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3">
			<a href="#" class="text-dark">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="img/prod_m/r3.png" alt="Imagem de capa do card">
					<div class="card-body">
						<h5 class="card-title center">Título da Roupa </h5>
						<h4 href="#" class="card-link">R$ 450,00</h4>
						<p class="card-text">Quantidade de Roupas 10</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Tamanhos: M, G.</li>
					</ul>				
				</div>
			</a>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3">
			<a href="#" class="text-dark">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="img/prod_m/r3.png" alt="Imagem de capa do card">
					<div class="card-body">
						<h5 class="card-title center">Título da Roupa </h5>
						<h4 href="#" class="card-link">R$ 450,00</h4>
						<p class="card-text">Quantidade de Roupas 10</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Tamanhos: M, G.</li>
					</ul>				
				</div>
			</a>
		</div>
	</div>

<!--car dileira 4-->
	<div class="divider-t mt-4"></div>
	<h3 class="mt-3 text-center">Qual estilo vai querer hoje?</h3>
	<div class="row my-5 mx-5">
		<div class="col-sm-4">
			<div class="card">
				<a href="#" class="card-link">
					<img class="card-img-top" src="img/prod_f/roupa-f-01.png">
					<h3 class="card-subtitle text-dark text-center">Feminino</h3>
				</a>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card">
				<a href="#" class="card-link">
					<img class="card-img-top" src="img/prod_m/roupa-m-01.png">
					<h3 class="card-subtitle text-dark text-center">Masculino</h3>
				</a>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card">
				<a href="#" class="card-link">
					<img class="card-img-top" src="img/prod_i/roupa-i-01.jpg">
					<h3 class="card-subtitle text-dark text-center">Infantil</h3>
				</a>
			</div>
		</div>
	</div>
<!-- card fileira 4 -->
	<div class="divider-b mt-4"></div>
	<h3 class="mt-3 text-center">Se prepare para as estações</h3>
	<div class="row my-5 mx-5">
		<div class="col-sm-3">
			<div class="card mb-3">
				<a href="#" class="card-link">
					<img class="card-img-top" src="img/prod_m/roupa-verao.png">
					<h3 class="card-subtitle text-dark text-center">Verão</h3>
				</a>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card mb-3">
				<a href="#" class="card-link">
					<img class="card-img-top" src="img/prod_f/roupa-outono.jpg">
					<h3 class="card-subtitle text-dark text-center">Outono</h3>
				</a>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card mb-3">
				<a href="#" class="card-link">
					<img class="card-img-top" src="img/prod_m/roupa-primavera.png">
					<h3 class="card-subtitle text-dark text-center">Primavera</h3>
				</a>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card mb-3">
				<a href="#" class="card-link">
					<img class="card-img-top" src="img/prod_f/roupa-inverno.jpg">
					<h3 class="card-subtitle text-dark text-center">Inverno</h3>
				</a>
			</div>
		</div>
	</div>
<!-- fim conteudo -->
<!-- inicio rodape -->
	<?php
		require_once "rodape.php";
	?>
<!-- fim rodape -->
	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entrar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<form class="center" id="tipo_registro">
					<label>
						<input  name="radio"  id="escolha" value="registro" type="radio" onclick="aparecer(2)"/>
							<span>Login</span>
					</label>
    	 			<label>
        			<input  name="radio" id="escolha" value="login"  type="radio" onclick="aparecer(1)"/>
        				<span>Registro</span>
        		</label>
						<div class="divider-b"></div>
					</form>
		<!--Login-->
		<div id="form_login">
			<form action="" method="post" id="login">
				<div class="row">
					<div class="col-sm-12">
						<input type="hidden" name="tp_form" value="login">
						<p><label>E-mail</label><input type="text" name="login" class="form-control" placeholder="exemplo@gmail.com"></p>
						<p><label>Senha</label><input type="password" name="senha" class="form-control" placeholder="*********"></p>
						<center>
							<p><button type="submit" name="logado" class="btn btn-primary">Entrar</button></p>
							<p><a href="#">Esqueci minha senha!</a></p>
						</center>
					</div>
				</div>
			</form>
		</div>
		<!--Registro-->
		<form action="" method="post" id="registro">
			<input type="hidden" name="tp_form" value="cadastrar">
			<div id="form_registro">
				<div class="row">
						<div class="col-sm-6">
							<label>Nome: </label>
							<input type="text" class="form-control" name="nome" placeholder="Nome">
							<br/>
						</div>
						<div class="col-sm-6">
							<label>Contato</label>
							<input type="text" class="form-control" name="contato" placeholder="(00)0000-0000" maxlength="15"  onkeydown="javascript: fMasc( this, mTel );">
							<br/>
						</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
							<label>E-mail</label>
							<input type="text" name="email" class="form-control" maxlength="40" placeholder="Examplo@Exemplo">
							<br/>
					</div>
					<div class="col-sm-6">
							<label>Senha</label>
							<input type="password" name="senha" id="txtPassword" class="form-control" placeholder="*******">
							<br/>
					</div>
					<div class="col-sm-6">
							<label>Confirmar senha</label>
							<input type="password" name="conf_senha" class="form-control" placeholder="*******">
							<br/>
					</div>
				</div>

				<!--Tipo de cadastro-->
				<label>
						<input name="pessoa" id="tipo" value="fisica" type="radio" onclick="aparecer(3)"/>
						<span>Pessoa Física</span>
				</label>
				<label class="col-md-6">
						<input name="pessoa"  id="tipo" value="juridica" type="radio" onclick="aparecer(4)"/>
						<span>Pessoa Jurídica</span>
				</label>
				<div class="row">
					<div class="col-sm-12 fisica">
						<label>CPF</label>
						<input type="text" id="fisica" name="cpf" class="form-control" placeholder="000.000.000-00" maxlength="14" onblur="javascript: validaCPF();" onkeydown="javascript: fMasc( this, mCPF );">
						<br/>
					</div>
					<div class="col-sm-12 juridica">
						<label>CNPJ</label>
						<input type="text" name="cnpj" id="juridica" onkeyup="FormataCnpj(this,event)" placeholder="00.000.000/0000-00" onblur="if(!validarCNPJ(this.value)){alert('CNPJ Informado é inválido'); this.value='';}" maxlength="18"  class="form-control" onkeydown="javascript: fMasc( this, mCNPJ );">
						<br/>
					</div>
				</div>
				<div class="row" id="registro">
					<div class="col-sm-6">
						<label>CEP</label>
						<input name="cep" type="text" id="cep"  placeholder="00000-000" class="form-control" value="" maxlength="10" onblur="pesquisacep(this.value);" onkeydown="javascript: fMasc( this, mCEP );" />
						<br/>
					</div>
					<div class="col-sm-6">
						<label>Rua</label>
						<input name="rua" type="text" class="form-control" id="rua" />
						<br/>
					</div>
					<div class="col-sm-6">
						<label>Bairro</label>
						<input name="bairro" type="text" class="form-control" id="bairro"/>
						<br/>
					</div>
					<div class="col-sm-6">
						<label>Cidade</label>
						<input name="cidade" type="text" class="form-control" id="cidade"/>
						<br/>
					</div>
					<div class="col-sm-6">
						<label>Estado</label>
						<input name="uf" type="text" class="form-control"  id="uf"/>
						<br/>
					</div>
					<div class="col-sm-6" id="registro">
						 	<label>Número</label>
							<input name="numero" type="text" class="form-control" id="numero"/>
							<br/>
					</div>
				</div>
				<center>
					<input type="submit" name="cadastra" class="btn btn-primary" value="Cadastrar">
				</center>
			</div>
		</form>
		<!--Fim Registro-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- arquivos javascript -->
<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
    <script src="js/menu.js"></script>
	<script src="js/validacoes.js"></script>

	<?php
		$sair = isset($_GET['sair']) ? $_GET['sair'] : '';
		if($sair == 1){
			echo "<script>alert('Volte logo!');
			location.href='index.php'</script>";
			session_destroy();
			exit;
		}

	if(isset($_POST["tp_form"])){

		$form = $_POST['tp_form'];
			if($form == "login"){
				$lgn = $_POST['login'];
				$sna = md5($_POST['senha']);
				$cli = "SELECT id_cli, nome, email, senha FROM cad_cliente WHERE email = '$lgn' AND senha = '$sna'";
				$forne = "SELECT id_forne, nome_empresa, email, senha FROM cad_fornecedor WHERE email = '$lgn' AND senha = '$sna'";
				$cnc = mysqli_query ($con, $cli);
				$pcr_cli = mysqli_num_rows($cnc);
				$cnc_forne = mysqli_query ($con, $forne);
				$pcr_forne = mysqli_num_rows($cnc_forne);

			if($pcr_cli == 1){
				$info = mysqli_fetch_array($cnc);
				$_SESSION['id'] = $info["id_cli"];
				$_SESSION['nome'] = $info["nome"];
				$_SESSION['cliente'] = true;
				echo "<script>alert('Seja bem-vindo(a), ".$_SESSION['nome']."!');
				location.href='perfil.php'</script>";

			}
			else if($pcr_forne == 1){
				$info = mysqli_fetch_array($cnc_forne);
				$_SESSION['id'] = $info["id_forne"];
				$_SESSION['nome'] = $info["nome_empresa"];
				$_SESSION['fornecedor'] = true;
				echo "<script>alert('Seja bem-vindo(a), ".$_SESSION['nome']."!');
				location.href='perfil.php'</script>";
			}
			else{
				echo "<script>alert('Erro ao fazer login');
				location.href='index.php'</script>";
			}
		}
		else{

			$erro = false;
			$nm = $_POST['nome'];
			$ctt = $_POST['contato'];
			$mail = $_POST['email'];
			$senha = md5($_POST['senha']);
			$conf_senha = md5($_POST['conf_senha']);
			$cep = $_POST['cep'];
			$rua = $_POST['rua'];
			$bairo = $_POST['bairro'];
			$cep = $_POST['cep'];
			$rua = $_POST['rua'];
			$bairo = $_POST['bairro'];
			$cit = $_POST['cidade'];
			$estt = $_POST['uf'];
			$num_estabe = $_POST['numero'];

			$valor = isset($_GET['valor']) ? $_GET['valor'] : '';

			if ($valor <= 1){
				$regst = $_POST['pessoa'];
				if ($regst == "fisica"){
					$cpf = $_POST['cpf'];
					if(empty($cpf)){
						echo "<script>alert('Preencha todos os campos');
						location.href='index.php'</script>";
					}
				}
				else{
					$cnpj = $_POST['cnpj'];
					if(empty($cnpj)){
						echo "<script>alert('Preencha todos os campos');
						location.href='index.php'</script>";
					}
				}
			}
			else{
				echo "<script>alert('Selecione o tipo de cadastro');
				location.href='index.php'</script>";
			}

			if (empty($nm) || empty($ctt) || empty($mail) || empty($senha) || empty($cep) || empty($rua) || empty($bairo) || empty($cit) || empty($estt) || empty($num_estabe)){
			//VERIFICAR SE TEM ALGUM CAMPO VAZIO
				$erro = true;
				echo "<script>alert('Preencha todos os campos');
				location.href='index.php'</script>";
			}

			else if ($senha != $conf_senha) {
				//VERIFICAR SE AS SENHAS SAO IGUAIS
				echo "<script>alert('As senhas não correspondem');
				location.href='index.php'</script>";
			}
			else{
				if ($regst == "fisica"){
					$encnta = "SELECT email FROM cad_cliente WHERE email = '$mail'";
					$inser = mysqli_query ($con, $encnta);
					$pocur = mysqli_num_rows($inser);

					if($pocur > 0){
						echo "<script>alert('Esse email já está cadastrado!');
						location.href='index.php'</script>";
					}
					else{
						$query = "INSERT INTO cad_cliente (nome, cpf, tel_cel, cep, rua, bairro, num_estabe, cidade, estado, email, senha)
						VALUES ('$nm', '$cpf', '$ctt', '$cep', '$rua', '$bairo', '$num_estabe', '$cit', '$estt', '$mail', '$senha')";

						$cad = mysqli_query ($con, $query);
						if ($cad == 1){
							echo "<script>alert('Dados inseridos com sucesso! Faça login para continuar');
							location.href='index.php'</script>";
						}
						else {
							echo "<script>alert('Erro ao cadastrar!');
							location.href='index.php'</script>";
						}
					}
				}

				else if ($regst == "juridica"){
					$encnta = "SELECT email FROM cad_fornecedor WHERE email = '$mail'";
					$inser = mysqli_query ($con, $encnta);
					$pocur = mysqli_num_rows($inser);

					if($pocur > 0){
						echo "<script>alert('Esse email já está cadastrado!');
						location.href='index.php'</script>";
					}
					else{
						$query = "INSERT INTO cad_fornecedor (nome_empresa, cnpj, tel_cel, cep, rua, bairro, num_estabe, cidade, estado, email, senha)
							VALUES ('$nm', '$cnpj', '$ctt', '$cep', '$rua', '$bairo', '$num_estabe', '$cit', '$estt', '$mail', '$senha')";
							$cad = mysqli_query ($con, $query);
						if ($cad == 1){
							echo "<script>alert('Dados inseridos com sucesso!');
							location.href='index.php'</script>";
						}
						else {
							echo "<script>alert('Erro ao cadastrar fornecedor!');
							location.href='index.php'</script>";
						}
					}
				}
			}
		}
	}

	?>
</html>
