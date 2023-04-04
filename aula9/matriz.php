<h2>Matriz</h2>
<p>
    São estruturas de dados bidimensional, onde 
    é necessário informar 2 índices para realizar 
    o acesso de um valor.
</P>
<p>
    Na prática consiste em um vetor que 
    armazena outros vetores.
</p>

<?php
//vetores menores
  $produto1 = [
                "nome" => "Câmera",
                "marca" => "LG",
                "preco" => 2500
  ];
  $produto2 = [
                "nome" => "Notebook",
                "marca" => "Dell",
                "preco" => 7500
  ];
  $produto3 = [
                "nome" => "Smartphone",
                "marca" => "Samsung",
                "preco" => 3500
  ]; 

  //vetor maior, que armazena os outros vetores
  $produtos = [
                $produto1,
                $produto2,
                $produto3
  ]; 

    // sem a estrutura de repetição
    echo $produtos [1]["nome"] . "<br>"; //índice do vetor maior e depois índice do vetor menor
    echo $produtos [1]["marca"] . "<br>"; 
    echo $produtos [1]["preco"] . "<br>"; 
   
    //com a estrutura de repetição
    for($i=0; $i<=2; $i++){
        foreach($produtos[$i] as $key => $value){ //forma completa
                echo $value. "<br>";
        }
    } 

    //outra forma
    foreach($produtos as $value){ //forma resumida
        echo $produtos [1]["nome"] . "<br>";
        echo $produtos [1]["marca"] . "<br>"; 
        echo $produtos [1]["preco"] . "<br>"; 
    } 

    //em forma de tabela
    echo "<table border=1>";
        foreach($produtos as $produto){
            echo "<tr>";
            echo "<td>" . $produto["nome"] . "</td>";
            echo "<td>" . $produto["marca"] . "</td>";
            echo "<td>" . $produto["preco"] . "</td>";
            echo "</tr>";
         }
            echo "</table>";

?>