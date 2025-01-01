<?php include_once 'header.php' ?>

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
            <p>Don't have an account? <a href="#">Sign up</a></p>
        </div>
    </div>

<?php include_once 'footer.php' ?>
