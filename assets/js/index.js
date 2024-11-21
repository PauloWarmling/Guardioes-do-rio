document.addEventListener('DOMContentLoaded', function () {
    const figurinha = document.querySelectorAll(`.figurinhas .figurinha:nth-child(${numero})`);
    function revelarFigurinha(numero) {
        // Checa se a figurinha já está revelada
        if (!figurinha.classList.contains("revelada")) {
            figurinha.classList.add("revelada");
            figurinha.textContent = `Figurinha ${numero} desbloqueada!`;
        } else {
            alert(`Figurinha ${numero} já foi desbloqueada!`);
        }
    }
});