var x;
var y; 
var z
var media = (x + y +z)/3; 
alert ('Coloque as suas notas para saber a média')


x= prompt ('Informe a primeira nota:');
x= eval (x);

y= prompt ('Informe a segunda nota:');
y= eval (y);

z= prompt ('Informe a terceira nota');
z= eval (z);


if (media >= 7 ) 
{
    alert('Aprovado');
} 
else { 
    alert('Reprovado');
}

var nome;
var salário;

nome= prompt ('Escreva seu nome');
salário= prompt ('Escreva seu salário:');
// var aumento= salário*1.1;
alert (nome + ', o seu novo salário é de' + ' R$' + (salário*1.1).toFixed(2) +'.');
// extra: o sub set chamada Math 
// .ToFixed(2) -> corta em duas casa deciamis
// Math.round -> srredonda o valor numérico
// Math.ceil ->
// Mathfloor
// Math.cos
// Math.sen