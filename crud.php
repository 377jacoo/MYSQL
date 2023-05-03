<?php
    include("conecta.php"); // FAZ A CONEXÃO COM A BASE DE DADOS
    $cpf   = $_POST["cpf"]; // PEGA O INPUT DO CPF
    $nome  = $_POST["nome"];
    $idade = $_POST["idade"];

    //VAMOS VER QUAL BOTÃO FOI PRECIONADO
    if(isset($_POST["inserir"]))
    {
        $comando = $pdo->prepare("INSERT INTO alunos VALUES('$cpf','$nome',$idade)");
        $resultado = $comando->execute();
        header("Location: index.html"); // VOLTA

    }

    if(isset($_POST["excluir"]))
    {
        $comando = $pdo->prepare("DELETE FROM alunos WHERE cpf='$cpf'");
        $resultado = $comando->execute();
        header("Location: index.html"); // VOLTA

    }
    
    if(isset($_POST["alterar"]))
    {
        $comando = $pdo->prepare("UPDATE alunos SET nome='$nome', idade=$idade WHERE cpf='$cpf' ");
        $resultado = $comando->execute();
        header("Location: index.html"); // VOLTA

    }




?>