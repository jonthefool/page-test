<?php
require_once 'includes/db_connect.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataReef</title>
    <link rel="stylesheet" href="CSSGeral.css">
</head>

<body>
    <header>
        <nav>
            <a href="homepage.php">
                <img src="imagens/Black_Logo.png" alt="Logo DataReef" class="logo">
            </a>
            <ul role="navigation">
                <li><a href="servicos.php" aria-label="Serviços">Serviços</a></li>
                <li><a href="sobre.php" aria-label="Sobre nós">Sobre nós</a></li>
                <li><a href="protected/dashboard.php" aria-label="Dashboard">Dashboard</a></li>
                <li><a href="protected/dashboard_manager.php">Meus Dashboards</a></li>
            </ul>
            <?php if (isset($_SESSION['user_id'])): ?>
                <div class="welcome-message">
                    Bem-vindo, <?php echo htmlspecialchars($_SESSION['user_name']); ?>
                    <a href="auth/logout.php" class="logout-button">Sair</a>
                </div>
            <?php else: ?>
                <div class="auth-buttons">
                    <a href="login.php" class="auth-button login-button">Login</a>
                    <a href="register.php" class="auth-button register-button">Registrar</a>
                </div>
            <?php endif; ?>
        </nav>
    </header>

    <main>
        <section class="hero">
            <video autoplay loop muted playsinline class="video-bg">
                <source src="videos/jellyfish background.mp4" type="video/mp4">
            </video>
            <div class="hero-left">
                <h1>Juntos, <br> impulsionamos dados.</h1>
            </div>
            <div class="hero-right">
                <p>
                    Os insights que descobrimos, as decisões que tomamos, as inovações que criamos,
                    as conexões que fortalecemos, os negócios que transformamos, a segurança que garantimos,
                    o futuro que construímos. Juntos, nós podemos reinventar os dados. 
                </p>
                <br>
                <button style="--content: 'Saiba mais!';">
                    <div class="left"></div>
                    <a href="servicos.php" style="text-decoration: none; color: inherit;"> Saiba mais! </a> 
                    <div class="right"></div>
                </button>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            console.log("Site carregado com sucesso!");
        });

        
    </script>
    

    <footer>    <p>© 2025 DataReef - Todos os direitos reservados.</p>   </footer>

        
</body>

</html>