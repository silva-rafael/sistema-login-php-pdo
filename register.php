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
        <h1>Registro</h1>
        <form method="post" action="register_action.php">
            
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" placeholder="Entre com seu nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Entre com seu e-mail" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="password" placeholder="Entre com sua senha" name="senha" required>
            </div>
            
            <button type="submit" class="btn">Registrar</button>
        
        </form>
        <div class="form-footer">
            <p>Já tem uma conta? <a href="/sistema-login-php-pdo/">Faça login</a></p>
        </div>
    </div>

    
</body>
</html>