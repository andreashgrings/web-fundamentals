<?php
// O que o PHP precisa?
// -Precisa saber qual o valor do atributo "name" que virá do formulário que enviou os dados para cá
// -Precisa saber qual o "method" que o formulário irá utilizar para enviar esses dados (GET ou POST)
// -Se for GET pegamos com $_GET (valor que está no "name")
// -Se for POST pegamos com $_POST (valor ques está no "name")
$idade = $_POST['idade']; 
$nome = $_POST['nome'];
$veiculo = $_POST['veiculo'];
echo 'Seu nome é: ';
echo "$nome.";
echo '<br>';
echo 'Sua idade é: ';
echo $idade;
echo ' anos.';
echo '<br>';

if ($idade >= 18) {
    echo 'Você pode dirigir seu veículo:  ';
    echo "$veiculo.";
} else {
    echo "Você não pode dirigir o seu $veiculo ainda.";
}
?>