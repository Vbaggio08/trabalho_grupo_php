// Seleciona todos os elementos que vamos manipular
const caixas = document.querySelectorAll('.caixa-container');
const seletores = document.querySelectorAll('.seletor-btn');

// Função para mostrar uma caixa específica
function mostrarCaixa(index) {
    // 1. Esconde todas as caixas e remove a classe 'ativo' dos botões
    caixas.forEach(caixa => {
        caixa.classList.remove('visivel');
    });
    seletores.forEach(seletor => {
        seletor.classList.remove('ativo');
    });

    // 2. Mostra apenas a caixa correta e ativa o botão correspondente
    if (caixas[index]) {
        caixas[index].classList.add('visivel');
    }
    if (seletores[index]) {
        seletores[index].classList.add('ativo');
    }
}

// Quando a página carregar, mostra a primeira caixa por padrão (índice 0)
document.addEventListener('DOMContentLoaded', function() {
  mostrarCaixa(0);
});