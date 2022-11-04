<?php
    $_dns = "mysql:host=localhost;dbname=etec2sem2022";
    $_usuario = "root";
    $_senha = "";

    try{
        $conexao = new PDO($_dns, $_usuario, $_senha);

        /*
        echo "conectado!";

        $stmt = $conexao->query("SELECT * FROM login");
        while($linha = $stmt->fetch()){
            echo $linha['nomeLogin']."<br>";
        }
        */
    }catch(PDOException $erro){
        echo "ERRO: ".$erro->getCode()."<br>";
        echo "Mensagem: ". $erro->getMessage();

        //echo "Procure o Administrador do Sistema.";

    }

