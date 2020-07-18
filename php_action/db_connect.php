<?php 

    //conexão com o Banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "prova_b2";

    $connect = mysqli_connect($servername, $username, $password, $db_name);
    mysqli_set_charset($connect, "utf8");

    if(mysqli_connect_error()):
        echo "Erro na Conexão: ".mysqli_connect_error();
    endif;