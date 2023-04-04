<h2>Operadores Lógicos</h2>

<ol>
    <li>and - E</li>
    <li>or - OU</li>
    <li>xor - Ou exclusivo</li>
    <li>! - Não</li>
    <li>&& - E</li>
    <li>|| - OU</li>
</ol>

<?php
    $media = 6;
    $falta = 20;
    $cristerio1 = $media > 6; //False
    $criterio2 = $falta < 25;//True
    $resultado = $cristerio1 && $cristerio2;//False
    var_dump($resultado);
?>
