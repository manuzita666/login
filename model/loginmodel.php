<?php
include 'conexao.php';
include 'funcoes.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = $conn->prepare("SELECT * FROM users WHERE email = ?");
$sql->execute([$email]);
$user = $sql->fetch();

if ($user) {
    if (password_verify($senha, $user['senha'])) {
        mensagem("Login feito com sucesso!", true, "painel.php");
    } else {
        mensagem("Senha incorreta!", false, "login.html");
    }
} else {
    mensagem("Email não cadastrado!", false, "login.html");
}
?>
