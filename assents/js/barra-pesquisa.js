const progresso = document.querySelector(".progresso-realizado");
const perguntas = document.querySelectorAll(".pergunta");

function alterarProgresso() {
    const totalPerguntas = perguntas.length;
    let perguntasRespondidas = 0;   
    perguntas.forEach((pergunta) => {
        const inputs = pergunta.querySelectorAll("input");  
        inputs.forEach((input) => {
            if (input.checked) {
                perguntasRespondidas++;
                return;
            }
        });
    });
    const progressoPercentual = (perguntasRespondidas / totalPerguntas) * 100;
    progresso.setAttribute("data-done", progressoPercentual);
    progresso.style.width = progressoPercentual + "%";
}
perguntas.forEach((pergunta) => {
    const inputs = pergunta.querySelectorAll("input");
    inputs.forEach((input) => {
        if (input.checked) {
            perguntasRespondidas++;
            return;
        }
    });
});
    input.addEventListener("change", alterarProgresso);

alterarProgresso(); 


