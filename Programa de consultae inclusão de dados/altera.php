<?php
// ligação entre o programa web e o banco de dados
include "abrir_banco.php";


// capturando os dados preenchidos pelo usuário e armazenando na memória (variáveis)
$cod = $_POST["txtcodigo"];
$nome = $_POST["txtnome"];
$email = $_POST["txtemail"];
$telefone = $_POST["txttelefone"];

// alunos é uma tabela no banco de dados
$executa = "UPDATE INTO alunos (nome, email, telefone) VALUES ('$nome','$email','$telefone') WHERE codigo=$codigo";

      
$query = $mysqli->query($executa);


echo "<fieldset>";
echo "<center><img src='checked.jpg' width='20%'>";
echo "<br><br><br>";
echo "<font color='red'>";
echo "<h1> Alteração realizada com sucesso<br>";
echo "<br><br>";
echo "<a href ='consulta.php'><img src='voltar.png'></a></h1>";
echo "</font></center>";        
echo "</fieldset>";

?>