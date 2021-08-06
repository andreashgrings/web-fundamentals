var nome = "Andreas"; //caractere ou string
var idade = 13; //inteiro ou integer
var salario=5236.29; //real ou real/decimal
var casado = true;  //true ou false, tbm chamada boolean
// alert(nome);
//oprações aritméticas: soma, subtração, multiplicação, divisão e porcentagem
// % => mod (módulo) e retorna o resto de uma divisão, sendo muito usado em algoritmos de múmeros pares/ímpares 

var x=10;
var y=20;
var resultado = x+y;
var media= (x+y)/2;
var modulo=x % 2;
// alert(x+y)
//condocionais: > (maior), >= (maior ou igual), < (menor), <= (menor ou igual), == (igual), != (diferente) 
if (idade >= 18) {
    alert ('Pode dirigir');
} else {
    alert ('Não pode dirigir')
} 
// estruturas de repetição, tbm conhecidas como laços ou loop

var cont = 0;

//enquanto (while)

while (cont < 3) {
    alert ('Andreas');
    // cont = cont +  1; 
    cont++; //incrementa uma unidade na variável cont
}
//repita (do while)
var cont2 = 1;
do {
    alert ('Sergio');
    cont2++;
}  while ( cont2 < 4);

//para (for): início do con; condição de parada; o que faz em cada volta 
for (cont3 = 3; cont3 < 4; cont3++) {   
    alert('Inês');
}
