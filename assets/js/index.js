document.addEventListener('DOMContentLoaded', function () {
    // Seletores principais
    const paginas = document.querySelectorAll('.pagina');
    const totalPaginas = paginas.length;
    const paginaAtualEl = document.getElementById('pagina-atual');
    const botaoAnterior = document.getElementById('anterior');
    const botaoProximo = document.getElementById('proximo');

    let paginaAtual = 1;

    /**
     * Atualiza a página visível no álbum e os botões de navegação
     */
    function atualizarPagina() {
        // Esconde todas as páginas e mostra apenas a página atual
        paginas.forEach(pagina => pagina.classList.remove('ativa'));
        document.querySelector(`.pagina[data-pagina="${paginaAtual}"]`).classList.add('ativa');

        // Atualiza o texto do indicador da página
        paginaAtualEl.textContent = paginaAtual;

        // Desabilita os botões quando estiver na primeira ou última página
        botaoAnterior.disabled = paginaAtual === 1;
        botaoProximo.disabled = paginaAtual === totalPaginas;
    }

    /**
     * Revela uma figurinha ao ser clicada
     * @param {HTMLElement} figurinha - Elemento da figurinha clicada
     */
    function revelarFigurinha(figurinha) {
        // Checa se a figurinha ainda não foi revelada
        if (!figurinha.classList.contains('revelada')) {
            figurinha.classList.add('revelada');
        } else {
            alert('Esta figurinha já foi revelada!');
        }
    }

    /**
     * Adiciona o evento de clique em cada figurinha
     */
    function adicionarEventoFigurinhas() {
        const todasFigurinhas = document.querySelectorAll('.figurinha');
        todasFigurinhas.forEach(figurinha => {
            figurinha.addEventListener('click', function () {
                revelarFigurinha(figurinha);
            });
        });
    }

    /**
     * Configura os eventos de navegação entre páginas
     */
    botaoAnterior.addEventListener('click', function () {
        if (paginaAtual > 1) {
            paginaAtual--;
            atualizarPagina();
        }
    });

    botaoProximo.addEventListener('click', function () {
        if (paginaAtual < totalPaginas) {
            paginaAtual++;
            atualizarPagina();
        }
    });

    // Inicializa a página e eventos
    atualizarPagina(); // Mostra a primeira página
    adicionarEventoFigurinhas(); // Ativa as figurinhas
});
