<?php
session_start();
include_once("config.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if(!empty($id)){
	$sql = "DELETE FROM chamados WHERE id='$id'";
	$query = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn)){
		
		echo "<script>('Dados excluídos!'); window.location = 'chamados.php';</script>";
	}else{
		echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
	}
}
?>

<?php
session_start();
include_once("config.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if(!empty($id)){
	$sql = "DELETE FROM tipo_atendimento WHERE id='$id'";
	$query = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn)){
		
		echo "<script>('Dados excluídos!'); window.location = 'cadastro_catego.php';</script>";
	}else{
		echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
	}
}
?>

