<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre o projeto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Sobre o projeto</h1>
        <nav aria-label="Menu principal">
            <a href="index.php">Início</a>
            <a href="sobre.php" aria-current="page">Sobre</a>
        </nav>

        <h2>HTML com pequenos trechos de PHP</h2>
        <p>A estrutura desta página é HTML. Apenas alguns conteúdos são gerados pelo PHP.</p>

        <?php
        // Variáveis guardam valores que podemos reutilizar.
        $curso = 'Introdução ao desenvolvimento web';
        $quantidadeAulas = 4;
        ?>

        <p>Curso: <strong><?php echo $curso; ?></strong></p>
        <p>Quantidade de aulas: <?php echo $quantidadeAulas; ?></p>

        <?php
        // Exemplo simples de uma condição.
        if ($quantidadeAulas > 0) {
            echo '<p>Há aulas disponíveis para começar seus estudos!</p>';
        }
        ?>

        <footer>Projeto demonstrativo • <?php echo date('Y'); ?></footer>
    </main>
</body>
</html>
