function reloginho() {
var data= new Date();
var hora= data.getHours();
var min= data.getMinutes();
var seg= data.getSeconds();
// bug das duas casas
// precisamos verificar se os segundos são menores que 10, caso positivo adicionaremos um "0" na frente
if (seg < 10) {
    seg = '0' + seg; 
}
if (min < 10) {
    min = '0' + min;
}
if (hora < 10) {
    hora = '0' + hora;
}
// concatenação-junção das variáveis mais os ":"
var horaCompleta= hora + ':' + min + ':' + seg;
var data= document.getElementById('data');
data.innerHTML= horaCompleta;
}
// temporizadores :
// setTimeOut: executa uma função depois de determinado tempo, executa uma vez, 
// devemos passar apenas o nome da função (sem os parenteses)
// devemos passar o tempo em milisegundos (milisegund0s-> 3000 = 3s)
// setTimeout (reloginho, 3000)
// setInterval: executa uma função repetidamente 
setInterval(reloginho, 1000);


