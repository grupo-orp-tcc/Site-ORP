<!DOCTYPE html>
<?php
	require_once "conexao.php";
	session_start();
?>

<!-- inicio menu -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
	<div class="container-fluid">
		<!-- logo menu -->
		<a class="navbar-brand">
			<img src="img/logo.png" width="55" height="30" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<img src="img/menu_icon.png" width="30" height="30">
		</button>
	<!-- menu -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Masculino</a>
					<ul class="dropdown-menu row">
						<li class="col-sm-4">
							<a class="nav-link text-dark" href="pesquisa.php?produto=tds&cate=m&pag=Masculino&filtro=Todos">Todos</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=blusa&cate=m&pag=Masculino&filtro=Blusas">Blusas</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=bermuda&cate=m&pag=Masculino&filtro=Bermudas">Bermudas</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=calca&cate=m&pag=Masculino&filtro=Calças">Calças</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=camisa&cate=m&pag=Masculino&filtro=Camisetas">Camisetas</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=jaqueta&cate=m&pag=Masculino&filtro=Jaquetas">Jaquetas</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=camisaSocial&cate=m&pag=Masculino&filtro=Tênis">Tênis</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=terno&cate=m&pag=Masculino&filtro=Ternos">Ternos</a>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Feminino</a>
					<ul class="dropdown-menu row">
						<li class="col-sm-4">
							<a class="nav-link text-dark" href="pesquisa.php?produto=tds&cate=f&pag=Feminino&filtro=Todos">Todos</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=blusa&cate=f&pag=Feminino&filtro=Blusas">Blusas</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=camisa&cate=f&pag=Feminino&filtro=Camisetas">Camisetas</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=calca&cate=f&pag=Feminino&filtro=Calças">Calças</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=saia&cate=f&pag=Feminino&filtro=Saias">Saia</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=jaqueta&cate=f&pag=Feminino&filtro=Jaquetas">Jaquetas</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=pijama&cate=f&pag=Feminino&filtro=Pijama">Pijama</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=roupaIntima&cate=f&pag=Feminino&filtro=Roupa íntima">Roupa Íntima</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=conjunto&cate=f&pag=Feminino&filtro=Conjuntos">Conjuntos</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=vestido&cate=f&pag=Feminino&filtro=Vestidos">Vestidos</a>
							<a class="nav-link text-dark" href="pesquisa.php?produto=terno&cate=f&pag=Feminino&filtro=Pijama">Terno</a>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a id="cor-menu" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Infantil</a>
					<ul class="dropdown-menu row">
						<li class="col-sm-4">
							<a class="nav-link text-dark" href="pesquisa.php">Conjuntos</a>
							<a class="nav-link text-dark" href="pesquisa.php">Vestidos</a>
							<a class="nav-link text-dark" href="pesquisa.php">Bermudas</a>
							<a class="nav-link text-dark" href="pesquisa.php">Tênis</a>
							<a class="nav-link text-dark" href="pesquisa.php">Botas</a>
							<a class="nav-link text-dark" href="pesquisa.php">Calças</a>
						</li>
					</ul>
				</li>
			</ul>
		<!-- barra pesquisa -->
		<form class="form-inline">
			<input class="form-control ml-2 mr-1" type="search" placeholder="Procurar...">
		</form>
		<!-- login -->
			<div id="aa" class="ml-2">
				<ul class="navbar-nav mr-auto">
					<li>
					<!--<a id="cor-menu" class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastro</a>-->

						<?php
							if(isset($_SESSION['fornecedor'])){
						?>
							<!--Fornecedor-->
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" id="procurar" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Olá, <?php echo $_SESSION['nome']?></button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class	="dropdown-item" href="perfil.php">Perfil</a>
										<a class="dropdown-item" href="#">Vendas</a>
										<a class="dropdown-item" href="config.php">Configuração</a>
										<a class="dropdown-item" href="crescimento.php">Crescimento*</a>
										<a href="processa.php?sair=1" class="dropdown-item">Sair</a>
									</div>
								</div>
						<?php
							}
							else if(isset($_SESSION['cliente']))
							{
						?>
								<!--Cliente-->
								<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" id="procurar" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Olá, <?php echo $_SESSION['nome']?></button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="perfil.php">Perfil</a>
										<a class="dropdown-item" href="#">Compras</a>
										<a class="dropdown-item" href="config.php">Configuração</a>
										<a href="processa.php?sair=1" class="dropdown-item">Sair</a>
									</div>
								</div>
							<!--Fim Usúario-->
						<?php
							}
						else{
						?>
								<button type="button" id="procurar" class="btn" data-toggle="modal" data-target="#exampleModal">
									Entrar
								</button>
						<?php
							}
						?>
					</li>
			</div>
	</div>
</nav>
