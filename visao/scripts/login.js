const input = document.querySelector('#senha')
const botao = document.querySelector('#olho');

let valor = 0;

botao.addEventListener('click',() => {
    if(valor%2==0){
        input.type = "password";
        botao.src = "visao/imagens/icones/olho-aberto.png";
    }else{
        input.type = "text";
        botao.src = "visao/imagens/icones/olho-fechado.png";
    }

    valor++;
});