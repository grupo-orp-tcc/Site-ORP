<?php
  require_once "..\conexao.php";
  session_start();
  $id = $_SESSION['id'];
  if(isset($_SESSION['cliente'])){
    $query = "DELETE FROM cad_cliente WHERE id_cli='$id'";
  }
  else{
    $query = "DELETE FROM cad_fornecedor WHERE id_forne='$id'";
  }
  $apagar = mysqli_query($con, $query);
  if($apagar == 1){
    echo "<script>alert('Sua conta foi desativada com sucesso');
    location.href='../index.php'</script>";
    session_destroy();
    exit;
  }
  else{
    echo "<script>alert('Erro ao desativar conta');
    location.href='../config.php'</script>";
  }
?>
