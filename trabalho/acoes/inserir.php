<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //verifica se o nome, login e senha foram enviado
   //do formulário
   if(isset($_POST['nome']) && isset($_POST['cpf']) &&
     isset($_POST['telefone']) && isset($_POST['endereco'])){

      $nome = $_POST['nome'];
      $cpf = $_POST['cpf'];
      $telefone = $_POST['telefone'];
      $endereco = $_POST['endereco'];

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `cliente` (`nome`, `cpf`, `telefone`, `endereco`) VALUES (?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssss", $nome, $cpf, $telefone, $endereco);

   //executa o comando
   $comando->execute();

}
   //volta para o formulário
   header("Location: index.php");

   







