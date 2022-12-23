<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
    <!--links-->
    <link rel="stylesheet" href="Recursos/css/style.css">
    <link rel="stylesheet" href="Recursos/css/exercicio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>CURSO PHP</h1>
        <h2>VISUALIZAÇÃO DO EXERCÍCIO</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>

    </nav>
    <main class="principal">
        <div class="conteudo">
            <h1 class="titulo">Teste</h1>
            
            <?php
                include ( __DIR__."/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        ALUNOS & COD3R © <?= date('Y') ?>
    </footer>
</body>
</html>