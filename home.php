<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página Inicial - Quiz de Meio Ambiente">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="style.css">
    <title>Página Inicial - Quiz de Meio Ambiente</title>
    <style>

    </style>
</head>
<body>
    <div class="container">
        <main>
            <section class="intro left-right-container">
                <div class="left">
                    <h1>Descobrindo o problema...</h1>
                    <p>O acúmulo de lixo nos locais errados e principalmente próximo aos rios, contribui, e muito, para possíveis enchentes nas épocas chuvosas. Esses descartes inadequados geram prejuízos futuros que poderiam ser evitados se houvesse uma conscientização da forma correta.</p>
                </div>
                <div class="right">
                    <img src="./assets/images/img.webp" alt="Imagem Poluição no rio">
                </div>            
            </section>
            
            <section class="content">
                <h2>De que modo esperamos solucionar este problema?</h2>
                <p>Através de uma conscientização feita com as crianças nas escolas. Por meio de um álbum de figurinhas.</p>
            </section>

            <section class="album-container">
                <h2>Álbum de Figurinhas</h2>
                <div class="figurinhas">
                    <?php for($i = 1; $i <= 24; $i++):?>
                        <div class="figurinha" onclick="revelarFigurinha(<?=$i?>)">Figurinha <?=$i?></div>
                   <?php endfor; ?>
                </div>
            </section>

        </main>
    </div>

    <div class="container">
        <div class="callToAction">
            <p>Teste seus conhecimentos sobre sustentabilidade, poluição e muito mais.</p>
            <button onclick="location.href='index.html'">Iniciar Quiz</button>
        </div>
    </div>

    <script>
        const figurinha = document.querySelectorAll(`.figurinhas .figurinha:nth-child(${numero})`);
        console.log(figurinha);
        function revelarFigurinha(numero) {
            // Checa se a figurinha já está revelada
            if (!figurinha.classList.contains("revelada")) {
                figurinha.classList.add("revelada");
                figurinha.textContent = `Figurinha ${numero} desbloqueada!`;
            } else {
                alert(`Figurinha ${numero} já foi desbloqueada!`);
            }
        }
    </script>
</body>
</html>
