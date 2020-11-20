<?php
session_start();
include_once("../config.php");

$data_exe= $_POST["data_exe"];
$tipo = $_POST["tipo"];
$cliente = $_POST["cliente"];
$obs = $_POST["obs"];
$tecnico = $_POST["tecnico"];

mysqli_select_db($conn,'$banco');

$sql = "INSERT INTO chamados (data_exe,tipo,cliente,obs,tecnico) VALUES ('$data_exe', '$tipo','$cliente','$obs','$tecnico')";

if (mysqli_query($conn, $sql)) {
echo "<script>alert('Dados cadastrados!'); window.location = '../cadastro_tec.php';</script>";

}else{
 echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
