<meta charset="utf-8">
<?php
	require_once "conexao.php";
	session_start();

	$sair = isset($_GET['sair']) ? $_GET['sair'] : '';
	if($sair == 1){
		echo "<script>alert('Volte logo!');
		location.href='index.php'</script>";
		session_destroy();
		exit;
	}

	$nm = $_POST['nome'];
	$cnpj = $_POST['cnpj'];
	$ctt = $_POST['contato'];
	$tel = $_POST['tel_fixo'];
	$cep = $_POST['cep'];
	$rua = $_POST['rua'];
	$bairo = $_POST['bairro'];
	$cep = $_POST['cep'];
	$rua = $_POST['rua'];
	$bairo = $_POST['bairro'];
	$num_estabe = $_POST['num_estabe'];
	$cit = $_POST['cidade'];
	$estt = $_POST['uf'];
	$complemento = $_POST['complemento'];

	echo $nm;
	echo $cnpj;
	echo $ctt;
	echo $tel;
	echo $cep;
		/*else{
			if ($regst == "fisica"){
				$encnta = "SELECT email FROM cad_cliente WHERE email = '$mail'";
				$inser = mysqli_query ($con, $encnta);
				$pocur = mysqli_num_rows($inser);

				if($pocur > 0){
					echo "<script>alert('Esse email já está cadastrado!');
					location.href='index.php'</script>";
				}
				else{
					$query = "UPDATE cad_cliente (nome, cpf, tel_cel, cep, rua, bairro, num_estabe, cidade, estado, email, senha)
					VALUES ('$nm', '$cpf', '$ctt', '$cep', '$rua', '$bairo', '$num_estabe', '$cit', '$estt', '$mail', '$senha')";
					$cad = mysqli_query ($con, $query);
					if ($cad == 1){
						echo "<script>alert('Dados inseridos com sucesso!');
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
?>
<html>
	<head>
			<link href="css/sweetalert2.min.css" rel="stylesheet">
	</head>
	<body>
	</body>
</html>*/
