function validaForm() {
    var nome= document.getElementById('nome');
    if (nome.value == '') {
        alert ('Preencha nome');
        nome.focus();

        return false;
    }
    // implemente a validação para os outros campos usando o mesmo formato acima, 
    // porém ao invés de exibir a mensagem de erro em um alert, adicionem uma tag p dentro
    //  do formulário e exibam a mesangem de erro nela. Customize essa tag no CSS para que fique com o texto em negrito e itálico

    var email= document.getElementById('email');
    if (email.value == '') {
        alert ('Preencha o E-mail');
        return false
    }
    alert ('chamou funcao');
    // o retorno como false impede que o formulário seja enviado
    return false;
    //futuramente, no final da implemtenação, se tudo ocorrer na validação 
    //  resposta final desta função deverá ser um "return true"
}