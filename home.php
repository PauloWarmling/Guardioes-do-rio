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
        <div class="figurinhas">
            <?php for($i = 1; $i <= 24; $i++):?>
                <div class="figurinha" onclick="revelarFigurinha(<?=$i?>)">Figurinha <?=$i?></div>
           <?php endfor; ?>
        </div>
        <div class="navegacao">
            <button id="anterior">Anterior</button>
            <span id="pagina-atual">1</span> / <span id="total-paginas">5</span>
            <button id="proximo">Próximo</button>
        </div>
        <button onclick="location.href='index.php'">Voltar</button>
    </section>
</body>
</html>