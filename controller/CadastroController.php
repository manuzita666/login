<?php

require '../model/cadastromodel.php';

if($_POST){
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $passwordconf = $_POST['passwordconf'];
 
    $result = register($fullname, $email, $password);
 
    echo $result;
    if($result){
        echo "Cadastro realizado com sucesso!";
    }else{
        echo "Não foi possivel realizar o cadastro.";
    }
}

