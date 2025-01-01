<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="login-container">
        <h1>Login</h1>
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Entre com seu e-mail" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="password" placeholder="Entre com sua senha" name="senha" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <div class="form-footer">
            <p>Não tem uma conta? <a href="register.php">Registre-se</a></p>
        </div>
    </div>

    
</body>
</html>