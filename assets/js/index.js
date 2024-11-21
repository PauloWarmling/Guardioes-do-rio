document.addEventListener('DOMContentLoaded', function () {
    const figurinhas = document.querySelectorAll('.figurinhas .figurinha');

    function revelarFigurinha(figurinha) {
        // Checa se a figurinha já está revelada
        if (!figurinha.classList.contains("revelada")) {
            figurinha.classList.add("revelada");
        } else {
            alert("Esta figurinha já foi revelada!");
        }
    }

    // Adiciona o evento de clique para cada figurinha
    figurinhas.forEach(figurinha => {
        figurinha.addEventListener('click', function () {
            revelarFigurinha(figurinha);
        });
    });
});
