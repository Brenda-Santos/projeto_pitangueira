<?php

session_start();
include_once("../config.php");

$tecnico = $_POST["tecnico"];

mysqli_select_db($conn,'$banco');

$sql = "INSERT INTO nome_tecnico (tecnico) VALUES ('$tecnico')";

if (mysqli_query($conn, $sql)) {
echo "<script>alert('Dados cadastrados!'); window.location = '../cadastro_catego.php';</script>";

}else{
 echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>