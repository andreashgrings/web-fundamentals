var corpo= document.body.style



// subalgoritmo=função (precisa ser chamado para ser executado)
function trocaFundo () {    
    corpo.background='green'
}
// trocaFundo ()
function trocaFundoBranco () { 
    corpo.background= 'white' 
}

function texto() {
var titulo=  document.getElementById('titulo')
titulo.style.border='3px solid red';
titulo.style.height='40px';
titulo.innerHTML= 'Texto em JavaScript';
}

function semTexto() {
    
}