//pega as perguntas
const perguntas = document.querySelectorAll(".pergunta");

let indiceAtual = 0;//começa pelo 0
function proximaPergunta() {
    pesguntas[indiceAtual].classList.remove("ativa");
    atual++;
    if(atual < perguntas.length){
        perguntas[indiceAtual].classList.add("ativa");
    }else{
        alert("Obrigado(a) por responder a pesquisa.");
        }
}

let form = document.getElementById("pesquisaForm");
form.addEventListener("enviar", function(evento){
    evento.preventDefault();
    alert("Resposta enviada com sucesso");
});

let botoes = document.querySelectorAll(".btn-proximo");

botoes.forEach(function(botao){
    botao.addEventListener("click", proximaPergunta);
});
