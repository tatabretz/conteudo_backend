<h1>Exercício 1</h1>

<?php

   if ($_GET["usuario"]=="admin" && $_GET["senha"]==123){
    echo "logado"; //se o usuario é igaual admin e a senha igual 123
   } //$_GET nunca muda
   else{
    echo "Usuário ou senha inválidos!";
   }

?>