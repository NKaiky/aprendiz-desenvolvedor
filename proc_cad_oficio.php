<?php
session_start();
include_once 'conexao.php';

//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$cadastrar = filter_input(INPUT_POST, 'cadastrar', FILTER_SANITIZE_STRING);
if($cadastrar){
    //Receber os dados do formulário
    $numerooficio = filter_input(INPUT_POST, 'numerooficio', FILTER_SANITIZE_STRING);
    $pregaoeletronico = filter_input(INPUT_POST, 'pregaoeletronico', FILTER_SANITIZE_STRING);
    $setorial = filter_input(INPUT_POST, 'setorial', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    
    //Inserir no BD
    $result_msg_cont = "INSERT INTO controle_oficios (numerooficio, pregaoeletronico, setorial, descricao) VALUES (:numerooficio, :pregaoeletronico, :setorial, :descricao)";
    
    $insert_msg_cont = $conn->prepare($result_msg_cont);
    $insert_msg_cont->bindParam(':numerooficio', $numerooficio);
    $insert_msg_cont->bindParam(':pregaoeletronico', $pregaoeletronico);
    $insert_msg_cont->bindParam(':setorial', $setorial);
    $insert_msg_cont->bindParam(':descricao', $descricao);
    
    if($insert_msg_cont->execute()){
        $_SESSION['msg'] = "<p style='color:green;'>Registro de Ofício salvo com sucesso.</p>";
        header("Location: index.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Não foi possível salvar seu registro.</p>";
        header("Location: index.php");
    }    
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Não foi possível salvar seu registro.</p>";
    header("Location: index.php");
}