<?php
session_start();
include_once("config.php");



if(isset($_POST['usuario']) && isset($_POST['senha'])){

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $get = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'" );

    $num = mysqli_num_rows($get);

    if($num == 1){
        while($percorrer = mysqli_fetch_array($get)){

            $adm = $percorrer['adm'];
            $nome = $percorrer['nome'];

            session_start();

            if($adm == 0){
                $_SESSION['adm'] = $nome;
                echo '<script type="text/javascript">window.location = "principal.php" </script>';

            }
            else{
                $_SESSION['normal'] = $nome;
                echo '<script type="text/javascript">window.location = "principal_tec.php" </script>';

            }



        }
        
    }

    else{
        echo '<script type="text/javascript"> alert("Dados incorretos!"); window.location = "index.php" </script>';
    }
}

?>