<?php
session_start();
include_once("conexao.php");
$login = $_POST['login'];
$pass = $_POST['pass'];



    if((isset($_POST['login'])) && (isset($_POST['pass']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['login']);
        //escapar de caracteres especiais, como aspas, prevenindo o QL injetion
        $senha = mysqli_real_escape_string($conn, $_POST['pass']);
        //senha com  criptografia pelo BD
       // $senha = md5($senha1);

        $sql = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $resultado = mysqli_fetch_assoc($result);

        if(empty($resultado)){
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: ../../login.php");
        }elseif(isset($resultado)){
            header("Location: ../../myaccount.php");
        }else{
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: ../../login.php");
        }
                // senha sem criptografia
        /*if(($senha == 'senha123') && ($usuario == 'taalarquitetura@gmail.com')){
            header("Location: ../../myaccount.php");
        }else{
            $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
            header("Location: ../../login.php");
        }*/
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: ../../login.php");
    };
?>