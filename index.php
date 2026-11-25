<?php
// O arquivo começa com PHP para preparar os dados da página.
$titulo = 'Meu espaço de estudos';
$assuntos = ['HTML', 'CSS', 'JavaScript', 'PHP'];
$ano = date('Y');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <main>
        <h1><?php echo $titulo; ?></h1>
        <nav aria-label="Menu principal">
            <a href="index.php" aria-current="page">Início</a>
            <a href="sobre.php">Sobre</a>
        </nav>
        <h2>O que vamos estudar?</h2>
        <p>Esta página combina elementos HTML com blocos de PHP, no projeto.</p>
        <ul>
            <?php foreach ($assuntos as $assunto) { ?>
                <li><?php echo $assunto; ?></li>
            <?php } ?>
        </ul>
        <button type="button" id="botao-dica">Mostrar dica</button>
        <p id="dica" role="status"></p>
        <footer>Projeto demonstrativo • <?php echo $ano; ?></footer>
    </main>
</body>
</html>
<?php
// Bloco final: o arquivo termina com a tag de fechamento do PHP.
?>
