<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: homepage.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DataReef</title>
    <link rel="stylesheet" href="CSSGeral.css">
    <style>
        .auth-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            background-color: #111;
            border-radius: 8px;
        }

        .auth-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .auth-form input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #333;
            background-color: #222;
            color: white;
            width: 100%;
        }

        .auth-form button {
            margin-top: 10px;
            width: 100%;
        }

        .auth-links {
            margin-top: 20px;
            text-align: center;
        }

        .error-message {
            color: #ff6600;
            margin-bottom: 15px;
        }

        .success-message {
            color: #4CAF50;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="homepage.php">
                <img src="imagens/Black_Logo.png" alt="Logo DataReef" class="logo">
            </a>
            <div class="auth-buttons">
                <a href="login.php" class="auth-button login-button">Login</a>
                <a href="register.php" class="auth-button register-button">Registrar</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="auth-container">
            <h1>Login</h1>

            <?php if (isset($_GET['error'])): ?>
                <p class="error-message"><?= htmlspecialchars($_GET['error']) ?></p>
            <?php endif; ?>

            <?php if (isset($_GET['success'])): ?>
                <p class="success-message"><?= htmlspecialchars($_GET['success']) ?></p>
            <?php endif; ?>

            <form class="auth-form" action="auth/process_login.php" method="POST">
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="password" placeholder="Senha" required>
                <button type="submit" class="glass-button">Entrar</button>
            </form>
            <div class="auth-links">
                <p>Não tem uma conta? <a href="register.php">Registre-se</a></p>
            </div>
        </section>
    </main>
</body>

</html>