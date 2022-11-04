<?php
/*
  echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
  echo "</pre>";
*/

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $endereco = filter_input(INPUT_POST,'endereco', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $telefone = filter_input(INPUT_POST,'telefone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST,'senha1', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $nivel = filter_input(INPUT_POST,'nivel', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $status = filter_input(INPUT_POST,'status', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $foto = 'foto.jpg'; 

    require_once("../_conexao/conexao.php");

    /*
        echo "<pre>";
        echo($nome."<br>");
        echo($endereco."<br>");
        echo($telefone."<br>");
        echo($email."<br>");
        echo($senha."<br>");
        echo($nivel."<br>");
        echo($status."<br>");
        echo($foto."<br>");
        echo "</pre>";
    */
    try{
        $comandoSQL = $conexao->prepare(
            "INSERT INTO `login`(`nomeLogin`, 
            `enderecoLogin`, `telefoneLogin`, 
            `emailLogin`, `senhaLogin`, 
            `nivelLogin`, `statusLogin`, `fotoLogin`) 
            VALUES (:nome, :endereco, 
            :telefone, :email, :senha, 
            :nivel, :status1, :foto) "
        );
        
        $comandoSQL->execute(array(
            ':nome'     => $nome,
            ':endereco' => $endereco,
            ':telefone' => $telefone,
            ':email'    => $email,
            ':senha'    => password_hash($senha, PASSWORD_DEFAULT),
            ':nivel'    => $nivel,
            ':status1'   => $status,
            ':foto'     => $foto
        ));

        if($comandoSQL->rowCount() > 0)
        {
            echo("REGISTRO SALVO COM SUCESSO");
        }
        else
        {
            echo("ERRO: NO CADASTRO.");
        }
    }catch(PDOException $erro)
    {
        echo("ERRO:".$erro->getCode()."<br>");
        echo("MENSAGEM: ".$erro->getMessage());
    }
}   
else
{
    echo("Erro no envio: POST");
}
  