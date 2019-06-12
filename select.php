<?php
  require_once "conexao.php";
  $id = $_SESSION['id'];

  if(isset($_SESSION['cliente'])){
    $query = "SELECT * FROM cad_cliente WHERE id_cli = '$id'";
    $executar = mysqli_query($con, $query);
    $info = mysqli_fetch_array($executar);
  }
  else{
    $query = "SELECT * FROM cad_fornecedor WHERE id_forne = '$id'";
    $exe = mysqli_query($con, $query);
    $info = mysqli_fetch_array($exe);
  }
?>
