<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_POST['idcliente'];
   $nome = $_POST['nome'];
   $cpf = $_POST['cpf'];
   $telefone = $_POST['telefone'];
   $endereco = $_POST['endereco']; 

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `cliente` SET `nome`= ?, `cpf`= ?, `telefone`= ?, `endereco`= ? WHERE  `idcliente`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssssi", $nome, $cpf, $telefone, $endereco, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   







