<?php
    //sessão
    session_start();
    //conexão
    require_once 'db_connect.php';

    if(isset($_POST['btn-editar'])):
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $profissao = mysqli_escape_string($connect, $_POST['profissao']);
        $endereco = mysqli_escape_string($connect, $_POST['endereco']);
        $telefone = mysqli_escape_string($connect, $_POST['telefone']);
        $estado_civil = mysqli_escape_string($connect, $_POST['estado_civil']);
        $data_ingresso = mysqli_escape_string($connect, $_POST['data_ingresso']);
        $salario = mysqli_escape_string($connect, $_POST['salario']);

        $id = mysqli_escape_string($connect, $_POST['id']);

        $sql = "UPDATE funcionarios SET nome = '$nome', profissao = '$profissao', endereco = '$endereco', telefone = '$telefone', estado_civil = '$estado_civil', data_ingresso = '$data_ingresso', salario = '$salario' WHERE id ='$id'";
    
        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Atualizado Com Sucesso!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao Atualizar!";
            header('Location: ../index.php');
        endif;
    endif;