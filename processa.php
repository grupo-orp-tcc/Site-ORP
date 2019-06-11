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
?>
