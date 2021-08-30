<?php
// comentário em PHP
# comentário em PHP
/* comentário de 
múltiplas linhas*/
// o PHP é uma linguagem fracamente tipada, ele atribui um valor a variável

// $ é usado para nomear variáveis
$nome = 'Andreas'; // string
$idade = 39; // integer
$salario = 2365.25; //real
$casado = true;

// uma sring pod ser escrita usando-se aspas cimples ou dupas. A aspas simples não são interpretávelis,
// as aspas duplas do PHP "dá uma olhadinha"se há algo que ele possa substituir dentro delas.

//  escreval em PHP
// echo("Seu nome é: $nome");
echo $nome;
echo '<hr>';
// com as aspas duplas ocorre a interpolação 
echo "$idade <hr>";
// echo "$nome <hr> $idade <hr> $salario"; teste que deu certo
echo $salario
?>
<hr>
<?php 
echo $casado;
?>