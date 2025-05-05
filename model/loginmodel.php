<?php
require '../SERVICE/conexao.php';

function register($email, $password) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new InvalidArgumentException("Email inválido");
    }

    if (strlen($password) < 8) {
        throw new InvalidArgumentException("Senha deve ter no mínimo 8 caracteres");
    }

    $db = new Database();
    $pdo = $db->getInstance();

    try {
        $stmt = $pdo->prepare("SELECT id FROM pessoa WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            throw new Exception("Email já cadastrado");
        }

  
        $stmt = $pdo->prepare("INSERT INTO pessoa (email, senha) VALUES (?, ?)");
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt->execute([$email, $hashedPassword]);

        return true;
    } catch (PDOException $e) {
        error_log("Erro no registro: " . $e->getMessage());
        throw new Exception("Erro ao registrar usuário");
    }
}
