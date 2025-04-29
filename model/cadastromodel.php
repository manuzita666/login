<?php

require '../service/conecxao.php';

function register($fullname, $email, $password){
    $conn = new usePDO();
    $instance = $conn->getInstance();
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $idepessoa = $instance->lastInsertId();
    $sql = "INSERT INTO pessoa (username, email, id_pessoa ) VALUES (?, ?, ?, ?, ?)";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$fullname, $email]);

    $idPessoa = $instance->lastInsertId();
    $sql = "INSERT INTO usuario (id_usuario, username, password, pessoa_id) VALUES (?, ?, ?, ?)";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$username, $password, $idPessoa]);
    
    $result = $stmt->rowCount();
    return $result;
}