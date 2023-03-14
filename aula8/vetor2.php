<h2>Vetor indexado por texto</h2>
<p>
    Os vetores podem usar textos para indexar
    (identificar) os valores armazenados.
    Exemplo:

<pre>
           +------------+
    nome   |Tamires      |
           +------------+
    nota1  |9           |
           +------------+
    nota2  |7           |
           +------------+
</pre>
</p>

<?php

$alunos = [
    "nome" => "Tamires",
    "nota1" => 9,
    "nota2" => 7
];

var_dump($alunos); //para ver os valores dentro da varável
echo $alunos["nota1"]; //imprimir o valor da nota

$alunos["notatotal"] = ($alunos["nota1"] + $alunos["nota2"]); //somar os índices
var_dump($alunos) ;

echo "<p>&nbsp;</p><pre>";
//imprimir todos os valores
//utilizando o foreach
foreach($alunos as $indice => $valor){ //imprime o que tem dentro do vetor
        printf("%24s\n", "+------------+");
        printf("%9s | %10s |  \n", $indice, $valor);
        }
?>
</pre>