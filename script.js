// JavaScript roda no navegador, depois que o PHP gerou a página.
const botao = document.getElementById('botao-dica');
const dica = document.getElementById('dica');

if (botao && dica) {
    botao.addEventListener('click', function () {
        dica.textContent = 'Dica: altere o array $assuntos no index.php e atualize a página!';
    });
}
