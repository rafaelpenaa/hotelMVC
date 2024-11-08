<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Hotel</title>
</head>
<body>
    <h1>Detalhes do Hotel</h1>
    <p><strong>ID:</strong> <?php echo htmlspecialchars($task['id'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Hotel:</strong> <?php echo htmlspecialchars($task['tarefa'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Localização:</strong> <?php echo htmlspecialchars($task['prazo'], ENT_QUOTES, 'UTF-8'); ?></p>
    <a href="index.php">Voltar para lista de Hoteis</a>
</body>
</html>
