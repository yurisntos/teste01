<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id = filter_input(INPUT_POST,"id",FILTER_SANITIZE_NUMBER_INT);

        require_once("../_conexao/conexao.php");

        $comandoSQL = $conexao->prepare(
            "DELETE FROM `login` WHERE `idLogin`=:id
        ");

        $comandoSQL->execute(array(
            ':id'        => $id
        ));

        if($comandoSQL->rowCount() > 0){
            echo("SUCESSO NA EXCLUSÃO");
        }
        else{
            echo("ERRO NA EXCLUSÃO");
        }

    }
    else{
        header("location:./view_login.php");
    }