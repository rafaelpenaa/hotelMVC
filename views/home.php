<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
         body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            padding: 1rem 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Bem Vindo <?= $_SESSION['user_email']?></h1>
    <nav>
        <ul>
            <p><a href="index.php?action=users" type="button" class="btn btn-primary">Gerenciar Usuarios</a></p>
            <p><a href="index.php?action=tasks" type="button" class="btn btn-primary">Gerenciar Hoteis</a></p>
        </ul>
    </nav>
    <footer class="text-center mt-4">
        <p>Repositorio: <a href="https://github.com/lilPED/HotelMCV" target="_blank">HotelMCV no GitHub/Pedro</a></p>
        <p>Repositorio: <a href="https://github.com/FelipeCunhaF/HotelMVC" target="_blank">HotelMCV no GitHub/Felipe</a></p>
        <p>Repositorio: <a href="https://github.com/rafaelpenaa?tab=repositories" target="_blank">HotelMCV no GitHub/Rafael</a></p>
        <p>Repositorio: <a href="https://github.com/Lucamc09?tab=repositories" target="_blank">HotelMCV no GitHub/Lucas</a></p>
    </footer>
</body>
</html>