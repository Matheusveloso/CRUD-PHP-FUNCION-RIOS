<?php
    //sessão
    session_start();
    //conexão
    require_once 'db_connect.php';

    if(isset($_POST['btn-deletar'])):
        
        $id = mysqli_escape_string($connect, $_POST['id']);

        $sql = "DELETE FROM funcionarios WHERE id = '$id'";
    
        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Apagado Com Sucesso!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao Apagar!";
            header('Location: ../index.php');
        endif;
    endif;