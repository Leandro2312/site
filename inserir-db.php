<?php
$nomeCompleto = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$senha = $_POST["senha"];

include_once "conexao.php";

$sql = "INSERT INTO tb_login_lojinho (nomeCompleto, email, cpf, telefone, senha) VALUES ('$nomeCompleto', '$email', '$cpf', '$telefone', '$senha')";
mysqli_query($conexao, $sql);

header("location:login.php");

?>