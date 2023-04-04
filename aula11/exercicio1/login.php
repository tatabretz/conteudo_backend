<h1>Exercício 1</h1>

<?php

   if ($_POST["usuario"]=="admin" && $_POST["senha"]==123){
    echo "logado"; 
   } //envia algo para o servidor
   else{
    echo "Usuário ou senha inválidos!";
   }

?>