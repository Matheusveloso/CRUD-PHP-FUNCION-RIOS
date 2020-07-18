<?php
    //sessão
    session_start();
    //conexão
    require_once 'db_connect.php';

    if(isset($_POST['btn-cadastrar'])):
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $profissao = mysqli_escape_string($connect, $_POST['profissao']);
        $endereco = mysqli_escape_string($connect, $_POST['endereco']);
        $telefone = mysqli_escape_string($connect, $_POST['telefone']);
        $estado_civil = mysqli_escape_string($connect, $_POST['estado_civil']);
        $data_ingresso = mysqli_escape_string($connect, $_POST['data_ingresso']);
        $salario = mysqli_escape_string($connect, $_POST['salario']);

        $sql = "INSERT INTO funcionarios (nome, profissao, endereco, telefone, estado_civil, data_ingresso, salario) VALUES ('$nome', '$profissao', '$endereco', '$telefone', '$estado_civil', '$data_ingresso', '$salario')";
    
        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Cadastrado Com Sucesso!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao Cadastrar!";
            header('Location: ../index.php');
        endif;
    endif;