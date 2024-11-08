<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando novo Hotel</title>
</head>
<body>
    <h1>Criando novo Hotel</h1>
    <form action="index.php?action=create_task" method="post">
        <label for="tarefa">Hotel:</label>
        <input type="text" id="tarefa" name="tarefa" required>
        <br>
        <label for="prazo">Localização:</label>
        <input type="text" id="prazo" name="prazo" required>
        <br>
        <input type="submit" value="Create">
    </form>
    <a href="index.php">Voltar para lista de Hoteis</a>
</body>
</html>
