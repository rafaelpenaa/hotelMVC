<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php if (isset($message)) : ?>
        <p style="color: red;"><?php echo $message; ?></p>
    <?php endif; ?> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center mb-5">Para novos usuarios usar usuário padrão: <br> Email: novoaccount@gmail.com</div>
            <div class="col-md-6">
                <h2 class="mt-5">Login</h2>
                <form method="post" action="index.php">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <button type="reset" class="btn btn-secondary">Limpar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>