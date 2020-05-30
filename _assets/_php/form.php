<?php
session_start();
include_once ("conexao.php");
 
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$cel = filter_input(INPUT_POST, 'cel', FILTER_SANITIZE_NUMBER_INT);
$tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT);
$msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);
$check_email = filter_input(INPUT_POST, 'check_email', FILTER_SANITIZE_STRING);
$check_tel = filter_input(INPUT_POST, 'check_tel', FILTER_SANITIZE_STRING);
$check_whats = filter_input(INPUT_POST, 'check_whats', FILTER_SANITIZE_STRING);
$radio = filter_input(INPUT_POST, 'radio', FILTER_SANITIZE_STRING);


echo "E-mail: $email  <br>";
echo "Nome: $name  <br>";
echo "Endereço: $address  <br>";
echo "Celular: $cel  <br>";
echo "Telefone: $tel  <br>";
echo "Mensagem: $msg  <br>";
echo "Preferencia de contato por E-mail: $check_email <br>";
echo "Preferencia de contato por Telefone: $check_tel <br>";
echo "Preferencia de contato por Whats-App: $check_whats <br>";
echo "Prefencia no periodo : $radio";


$insert_bd_form = "INSERT INTO orcamentos_site (email, nome, endereço, celular, telefone, msg, pref_email, pref_tel, pref_whats, pref_hora, data_pedido) 
VALUES ('$email', '$name', '$address', '$cel', '$tel', '$msg', '$check_email', '$check_tel', '$check_whats', '$radio', NOW())";

$resultado_form = mysqli_query($conn, $insert_bd_form);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='padding-top: 15px; color: #ffffff;'> 
    &#10149; Orçamento recebido com sucesso. <br> Obrigado!</p>";
    header ("Location: ../../index.php?id=#form-itens-list");
} else {
    $_SESSION['msg'] = "<p style='padding-top: 15px; color: #ffffff;'> &#10149; Erro de cadastro! <br> Faça Novamente!</p>";
    header ("Location: ../../index.php?id=#form-itens-list");
}

?>