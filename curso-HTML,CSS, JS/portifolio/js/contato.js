// function validaForm() {
//     var nome= document.getElementById('nome');
//     if (nome.value == '') {
//         alert ('Preencha nome');
//         nome.focus();

//         return false;
//     }
//     // implemente a validação para os outros campos usando o mesmo formato acima, 
//     // porém ao invés de exibir a mensagem de erro em um alert, adicionem uma tag p dentro
//     //  do formulário e exibam a mesangem de erro nela. Customize essa tag no CSS para que fique com o texto em negrito e itálico

//     var email= document.getElementById('email');
//     if (email.value == '') {
//         alert ('Preencha o E-mail');
//         return false
//     }
//     alert ('chamou funcao');
//     // o retorno como false impede que o formulário seja enviado
//     return false;
//     //futuramente, no final da implemtenação, se tudo ocorrer na validação 
//     //  resposta final desta função deverá ser um "return true"
// }
function validaForm() {
    var nome= document.getElementById('nome');
    var email= document.getElementById('email');
    var msg=document.getElementById('txt');
    var aval = document.getElementById('aval');
    aval.innerHTML= '';
    nome.classList.remove('campoErro');
    email.classList.remove('campoErro');
    msg.classList.remove('campoErro');
    
    // alert('teste');
    // return false
    if (nome.value == '') {
        aval.innerHTML ='Preencha o nome';
        nome.classList.add('campoErro');
        nome.focus();
        // nome.style.border
        return false;
    }
    // return false
    if (email.value == '') {
        aval.innerHTML = 'Preencha o E-mail';
        email.classList.add('campoErro');
        email.focus();
        return false;
    }
    var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    // if (regex.test(email.value) == false) {
        // podemos ao invés de comparar com o false-negar o teste (forma elegante)
        if (!regex.test(email.value)); {
        aval.innerHTML='E-mail inválido'
        email.classList.add('campoErro');
        email.focus;
        return false;
    }
    // return false
    if (msg.value == '') {
        aval.innerHTML = 'Preencha a mensagem';  
        msg.classList.add('campoErro');     
        msg.focus();
        return false;
    }
    return false
}
