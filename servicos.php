<?php
require_once 'includes/db_connect.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos Serviços - DataReef</title>
    <link rel="stylesheet" href="CSSGeral.css">
    <style>
        /* Estilos específicos para esta página */
        .planos-container {
            display: flex;
            gap: 30px;
            justify-content: center;
            margin: 50px auto;
            max-width: 1200px;
        }
        .plano-card {
            background-color: #111;
            border-radius: 10px;
            padding: 30px;
            width: 45%;
            transition: transform 0.3s;
        }
        .plano-card:hover {
            transform: translateY(-10px);
        }
        .plano-card h2 {
            color: var(--btn-color);
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .plano-card ul {
            list-style-type: none;
            margin: 20px 0;
        }
        .plano-card li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }
        .plano-card li:before {
            content: "▹";
            color: var(--btn-color);
            left: 0;
            position: absolute;
        }
        .preco {
            font-weight: bold;
            font-size: 1.5rem;
            margin: 20px 0;
        }
        .cta-button {
            background-color: var(--btn-color);
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            font-size: 1rem;
            padding: 12px 25px;
            width: 100%;
            transition: background-color 0.3s;
        }
        .cta-button:hover {
            background-color: #e65c00;
        }

        


    </style>
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
        <section class="planos-container">
        <div class="plano-card" id="plano-data">
    <h2>Plano Data</h2>
    <ul>
        <li>Análise exploratória de dados</li>
        <li>Relatórios básicos semanais</li>
        <li>Suporte por e-mail</li>
        <li>Visualizações estáticas</li>
    </ul>
    <p class="preco">R$ XXX/mês</p>
    <button class="cta-button">Solicitar Demonstração</button>
</div>

            <div class="plano-card" id="plano-reef">
                <h2>Plano Reef</h2>
                <ul>
                    <li>Modelagem avançada de dados</li>
                    <li>Dashboards interativos personalizados</li>
                    <li>Suporte prioritário 24/7</li>
                    <li>Previsões com IA</li>
                    <li class="preco">R$ XXX/mês</li>
                </ul>
                <button class="cta-button" onclick="location.href='#contato'">Fale com um Especialista</button>
            </div>
        </section>

        <section id="contato" class="form-container">
    <h2>Pronto para Transformar Seus Dados?</h2>
    <form action="auth/process_contato.php" method="POST">
        
        <div class="question">
            <input type="text" name="nome" id="nome" required>
            <label for="nome">Nome Completo</label>
        </div>
        
        <div class="question">
            <input type="email" name="email" id="email" required>
            <label for="email">E-mail Corporativo</label>
        </div>
        
        <div class="question">
            <input type="tel" name="telefone" id="telefone" required>
            <label for="telefone">Telefone</label>
        </div>
        
        <div class="question">
            <select name="plano_interesse" id="plano" required>
                <option value="" selected></option>
                <option value="data">Plano Data</option>
                <option value="reef">Plano Reef</option>
            </select>
            <label for="plano">Selecione um Plano</label>
        </div>
        
        <button type="submit" class="form-button">Enviar Solicitação</button>
    </form>
</section>
    </main>

    <footer>
       <p>&copy; 2025 DataReef - Todos os direitos reservados.</p>
    </footer>

    <script>

// Script .JS para deixar o footer no final
function adjustFooter() {
    const footer = document.querySelector('footer');
    const windowHeight = window.innerHeight;
    const bodyHeight = document.body.offsetHeight;
    
    if (bodyHeight < windowHeight) {
        footer.style.position = 'fixed';
        footer.style.bottom = '0';
        footer.style.left = '0';
        footer.style.right = '0';
    } else {
        footer.style.position = 'static';
    }
}

// Executa ao carregar e redimensionar
window.addEventListener('load', adjustFooter);
window.addEventListener('resize', adjustFooter);
</script>

</body>
</html>