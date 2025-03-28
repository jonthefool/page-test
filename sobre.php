<?php
require_once 'includes/db_connect.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - DataReef</title>
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
        <section class="sobre">
            <img src="imagens/building.jpg" alt="Equipe DataReef" class="grupo-imagem">
            <div class="sobre-texto">
                <h1>Sobre Nós</h1>
                <p>
                    A DataReef é um grupo apaixonado por tecnologia e inovação. Nossa missão é transformar dados em
                    soluções inteligentes, ajudando empresas e indivíduos a tomarem decisões mais assertivas.
                    Com uma equipe altamente qualificada, buscamos sempre evoluir e entregar os melhores resultados.
                </p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 DataReef - Todos os direitos reservados.</p>
    </footer>
</body>

</html>