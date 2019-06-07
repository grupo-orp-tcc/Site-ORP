<?php
  require_once "conexao.php";

  if(isset($_FILES['arquivo'])){
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $imagem = md5(time()).$extensao;
    $diretorio = "produtos/";
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$imagem);

    $nome = $_POST['nomeProduto'];
    $quantidade = $_POST['qtddPecas'];
    $preco = $_POST['precoProd'];
    $tipo = $_POST['tipoProduto'];
    $descricao = $_POST['descricaoProduto'];
    $genero = $_POST['genero'];
    //$tamanho = $_POST['tamanho'];
    $material = $_POST['material'];

    $query = "INSERT INTO produto (nomeProd, qtddProd, precoProd, tipoProd, descriProd, generoProd, tamanhoProd, materialProd, imgProd, dataCadProd)
      VALUES ('$nome', '$quantidade', '$preco', '$tipo', '$descricao', '$genero', 'Ainda não', '$material', '$imagem', NOW())";
    $cadastrar = mysqli_query ($con, $query);

    if ($cadastrar == 1){
      echo "<script>alert('Dados inseridos com sucesso!');
        location.href='pesquisa.php'</script>";
    }
    else {
      echo "<script>alert('Erro ao cadastrar produto!');
        location.href='index.php'</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Página de cadastro de produtos</title>

    <!-- Icons font CSS-->
    <link href="css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="css/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Cadastre Seu Produtos</h2>
                    <form action="cadastro-prod.php" method="post" enctype="multipart/form-data">
                        <div class="row row-space">
                            <div class="col-2">
                    <!-- nome produto -->
                                <div class="input-group">
                                    <label class="label">Nome do Produto</label>
                                    <input class="input--style-4" type="text" name="nomeProduto">
                                </div>
                            </div>
                            <div class="col-2">
                    <!-- quantidade produto -->
                                <div class="input-group">
                                    <label class="label">Quantidade Mínima de peças</label>
                                    <input class="input--style-4" type="text" name="qtddPecas">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Preço: </label>
                            <input class="input--style-4" type="text" name="precoProd">
                        </div>
                        <div class="input-group">
                    <!-- tipo produto -->
                            <label class="label">O que Deseja Vender?</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="tipoProduto">
                                    <option disabled="disabled" selected="selected">Escolha uma das opções</option>
                                    <option value="blusa">Blusa</option>
                                    <option value="bermuda">Bermuda</option>
                                    <option value="camisa">Camisa</option>

                                    <option value="calca">Calça</option>
                                    <option value="jaqueta">Jaqueta</option>
                                    <option value="roupao">Roupão</option>
                                    <option value="roupaIntima">Roupa Íntima</option>
                                    <option value="saia">Saia</option>
                                    <option value="sweater">Sweater</option>
                                    <option value="pijama">Pijama</option>
                                    <option value="terno">Terno</option>
                                    <option value="vestido">Vestido</option>
                                    <option value="conjunto">Conjunto</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                    <!-- descricao produto -->
                        <div class="row row-space">
                            <label class="label">Descrição do Produto</label>
                            <textarea class="textarea--style" type="text" name="descricaoProduto"></textarea>
                            <label class="p-t-20">Não sabe o que escrever na descrição do seu produto? É simples descreva sua aparência e seus detalhes</label>
                        </div>
                        <div class="row row-space">
                            <div class="input-group">
                    <!-- genero produto -->
                                <label class="label p-t-20">Genêro</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Masculio
                                        <input type="radio" checked="checked" name="genero" value="m" onclick="aparecer(1)">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container m-r-45">Feminino
                                        <input type="radio" name="genero" value="f" onclick="aparecer(2)">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container m-r-45">Infantil
                                        <input type="radio" name="genero" value="i" onclick="aparecer(2)">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                    <!-- tamanho roupa -->
                            <div class="input-group">
                                <label class="label p-t-20">Tamanho da Roupa</label>
                                <div class="p-t-10 p-b-20">
                                    <label class="radio-container m-r-45">P
                                        <input type="checkbox" name="tamanho[]" value="p">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container m-r-45">M
                                        <input type="checkbox" name="tamanho[]" value="m">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container m-r-45">G
                                        <input type="checkbox" name="tamanho[]" value="g">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container m-r-45">GG
                                        <input type="checkbox" name="tamanho[]" value="gg">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <label class="p-t-20">Escolha o tamanho de acordo com o produto, se o lote possuir mais de um tamanho escolha de acordo.</label>
                            </div>
                        </div>
                        <div class="input-group">
                    <!-- material produto -->
                            <label class="label">Material do Produto</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="material">
                                    <option disabled="disabled" selected="selected">Escolha uma das opções</option>
                                    <option value="alpaca">Alpaca</option>
                                    <option value="algodao">Algodão</option>
                                    <option value="acrilico">Acrílico</option>
                                    <option value="couro">Couro</option>
                                    <option value="la">Lã</option>
                                    <option value="malha">Malha</option>
                                    <option value="lnho">Linho</option>
                                    <option value="seda">Seda</option>
                                    <option value="renda">Renda</option>
                                    <option value="veludo">Veludo</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                    <!-- imagem produto -->
                        <div class="row row-space">
                            <div><div class="input-group">
                                <label class="label lbl-b">Escolha uma Imagem do Produto</label>
                                <input type="file" required name="arquivo" id="fileUpload"/>
                                <label class="inputFile" for="fileUpload">Buscar Imagem</label>
                                <div id="image-holder" class="preview-img"><img id="image-holder" name="imgProduto"></div>
                            </div></div>
                        </div>
                        <div class="row row-space">
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit">Enviar</button>
                            </div>
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit">Voltar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="js/jquery.min.js"></script>
    <!-- Select JS-->
    <script src="js/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
