<?php
    require_once "..\conexao.php";
    session_start();
    $id = $_SESSION['id'];

    $nome = $_POST['nome'];
    $contato = $_POST['contato'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $numero = $_POST['numero'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    //$antSenha = $_POST['antSenha'];
    //$senha = $_POST['senha'];
    //$complemento = $_POST['complemento'];

    if(isset($_SESSION['cliente'])){
      $att = "UPDATE cad_cliente SET nome='$nome', tel_cel='$contato', email='$email', cep='$cep', num_estabe='$numero', estado='$estado', bairro='$bairro', cidade='$cidade' WHERE id_cli='$id'";
      $atualizar = mysqli_query($con, $att);
      if($atualizar == 1){
        echo "<script>alert('Dados Atualizados com sucesso.');
        location.href='../config.php'</script>";
      }
    }
    else{
      $att = "UPDATE cad_fornecedor SET nome_empresa='$nome', tel_cel='$contato', email='$email', cep='$cep', num_estabe='$numero', estado='$estado', bairro='$bairro', cidade='$cidade' WHERE id_forne='$id'";
      $atualizar = mysqli_query($con, $att);
      if($atualizar == 1){
        echo "<script>alert('Dados Atualizados com sucesso.');
        location.href='../config.php'</script>";
      }
    }


  if(isset($_FILES['arquivo'])){
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $imagem = md5(time()).$extensao;
    $diretorio = "foto-perfil/";
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$imagem);

    $query = "UPDATE cad_fornecedor SET imgForne='$imagem' WHERE id _forne = $id";
    $cadastrar = mysqli_query ($con, $query);

    if ($cadastrar == 1){
      echo "<script>alert('Dados inseridos com sucesso!');
        location.href='perfil.php'</script>";
    }
    else {
      echo "<script>alert('Erro ao cadastrar produto!');
        location.href='index.php'</script>";
    }
  }
?>
