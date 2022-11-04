<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id = filter_input(INPUT_POST,"id",FILTER_SANITIZE_NUMBER_INT);

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $endereco = filter_input(INPUT_POST,'endereco', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $telefone = filter_input(INPUT_POST,'telefone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST,'senha1', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $nivel = filter_input(INPUT_POST,'nivel', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $status = filter_input(INPUT_POST,'status', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $foto = 'foto.jpg'; 

        require_once("../_conexao/conexao.php");

        $comandoSQL = $conexao->prepare("UPDATE `login` SET 
            `nomeLogin`=:nome, `enderecoLogin`=:endereco,
            `telefoneLogin`=:telefone, `emailLogin`=:email,
            `senhaLogin`=:senha, `nivelLogin`=:nivel, `statusLogin`=:status,
            `fotoLogin`=:foto WHERE `idLogin`=:id
        ");

        $comandoSQL->execute(array(
            ':id'        => $id,
            ':nome'      => $nome,
            ':endereco'  => $endereco,
            ':telefone'  => $telefone,
            ':email'     => $email,
            ':senha'     => $senha,
            ':nivel'     => $nivel,
            ':status'    => $status,
            ':foto'      => $foto
        ));

        if($comandoSQL->rowCount() > 0){
            echo("SUCESSO NA ATUALIZACAO");
        }
        else{
            echo("ERRO NA ATUALIZACAO");
        }

    }
    else{
        header("location:./view_login.php");
    }