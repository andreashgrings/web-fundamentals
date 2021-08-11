function media() {
    var media=document.getElementById('(nota1 + nota2 + nota3) / 3');
    var msg=document.getElementById('mensagem');

    // if(media.value >=7) {
        // msg.innerHTML='Aprovado';        
    // } else { 
        // msg.innerHTML='Reprovado';
    // }
    alert ('funciona')
}
function media() {
    var nota1 = document.getElementById('nota1').value;
    var nota2 = document.getElementById('nota2').value;
    var nota3 = document.getElementById('nota3').value;
    var media = (parseInt (nota1) + parseInt (nota2) + parseInt (nota3)) / 3;
    // var media = (nota1*1 + nota2*1 + nota3*1) / 3; isso funciona no JavaScript, em outras linguagens pode dar erro por elas interpretarem como tipos diferentes
    var msg= document.getElementById('mensagem');
    if (media>=7) {
        msg.innerHTML = 'Aprovado!';
        msg.style.color='green'
    } else {
        msg.innerHTML= 'Reprovado!';
        msg.style.color= 'red';
    }
}
