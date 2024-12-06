const mascara = document.getElementById("#mascara");
const senha = document.getElementById("#tabelaSenha");

let valor=1;

document.getElementById("#tabelaOlho").addEventListener("click", function() {
    if(valor%2==0){
        mascara.display = "block";
        senha.display = "none";
        btn.src = "visao/imagens/icones/olho-aberto.png";
        console.log("fechou");
    }else{
        mascara.display = "none";
        senha.display = "block";
        btn.src = "visao/imagens/icones/olho-fechado.png";
        console.log("abril");
    }

    valor++;
});

// NÃO FUNCIONA AINDA