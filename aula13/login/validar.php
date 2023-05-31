<?php

//importa o arquivo de conexão
    require_once "../banco/conexao.php";

    if(isset($_POST['login']) and isset($_POST['senha'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];

   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM `usuario` WHERE  `login`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //diz qual valor vai ser colocado no lugar do ?
   $comando->bind_param("s", $login);

   //executa o comando
   $comando->execute();

    //pegar os resultados da consulta - todas as linhas de resultados
    $resultados = $comando->get_result();

    //pega a primeira linha de resultado da consulta
    $usuario = $resultados->fetch_object();

        if($usuario != NULL
            and password_verify($senha, $usuario->senha)){

                //inicia
                session_start();
                $_SESSION['usuario'] = $usuario->nome;
                header("Location; ../noticia/index.php");
                die();
            }

    }else{
        header("Location: formulario.php");
    }

?>