function testaIdade () {
    var idade= document.getElementById('idade');
    var msg= document.getElementById('mensagem');

    if (idade.value >= 18) {
        // alert ('Pode dirigir');
        msg.innerHTML= 'Pode dirigir';
    } else {
        // alert ('Não pode dirigir')
        msg.innerHTML= 'Não pode dirigir';
    }
}
