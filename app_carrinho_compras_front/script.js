const adicionarAoCarrinho = (event) => {
    event.target.style.backgroundColor = "#9333eaff";    
    let count = 0;
    // adicionar uma variavel para a quantidade de cada produto se tornar dinamico
}

const removerDoCarrinho = (event) => {
    event.target.style.backgroundColor = "#18181B";
    event.target.style.border= "#9333eaff 1px solid";
}
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.plus').forEach(botao => {
        botao.addEventListener('click', adicionarAoCarrinho);
    });
    document.querySelectorAll('.minus').forEach(botao => {
        botao.addEventListener('click', removerDoCarrinho);
    });
});
//adicionar logica para o botao minus - mudar cor do botao e diminuir a quantidade no carrinho







