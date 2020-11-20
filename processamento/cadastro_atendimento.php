<?php

session_start();
include_once("../config.php");

$tipo_atendi = $_POST["tipo"];

mysqli_select_db($conn,'$banco');

$sql = "INSERT INTO tipo_atendimento (tipo_atendi) VALUES ('$tipo_atendi')";

if (mysqli_query($conn, $sql)) {
echo "<script>alert('Dados cadastrados!'); window.location = '../cadastro_catego.php';</script>";

}else{
 echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>

