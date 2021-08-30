<?php
// vetores no PHP são dinamicamente alocados (não precisamos informar o tamanho). 
// Sempre começam pela posição 0 (índice/índex)
// Podemos colocar qualquer tipo de dado dentro de um vetor
$frutas = array('Uva', 'Maçã', 'Banana', 'Melacia', '', '', 'abacate' );
$qualquer_coisa = array(25, 'Meia', 36.4, true, array('a', 'b'));

// echo $qualquer_coisa[4][0]
// // sub_vetor
// $produto = array(
//     'nome' => 'Playstation 5',
//     'status' => 'Disponível',
//     'preco' => 4899.12);
for ($cont = 0; $cont < sizeof($frutas); $cont++) {
    echo $frutas[$cont];
    echo '<br>';
}
echo '<br>';
// foreach:estrutura de repetição exclusiva para vetores, passamos dentro dos (vetor as apelido do item)
foreach ($frutas as $fruta) {
    echo $fruta;
    echo '<br>';
}

?>