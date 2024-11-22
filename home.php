<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Quiz de Meio Ambiente">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Álbum - Guardiões do Rio</title>
</head>
<body>
    <section class="album-container">
        <h2>Álbum de Figurinhas</h2>
        
        <div id="paginas">
            <?php for ($pagina = 1; $pagina <= 5; $pagina++): ?>
                <div class="pagina" data-pagina="<?=$pagina?>">
                    <?php for ($i = ($pagina - 1) * 5 + 1; $i <= $pagina * 5; $i++): ?>
                        <div class="figurinha" data-id="<?=$i?>">
                            <div class="front">?</div>
                            <div class="back">
                                <img src="assets/images/figurinhas/figurinha<?=$i?>.png" alt="Figurinha <?=$i?>">
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
        </div>
        <div class="navegacao">
            <button id="anterior">Anterior</button>
            <span id="pagina-atual">1</span> / <span id="total-paginas">5</span>
            <button id="proximo">Próximo</button>
        </div>
        <button onclick="location.href='index.php'">Voltar</button>
    </section>

    <script src="assets/js/index.js"></script>
</body>
</html>