<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Hot Dog System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #e63946; /* Vermelho moderno */
            --bg-body: #f8f9fa;
            --text-main: #212529;
            --text-muted: #6c757d;
        }

        body {
            background-color: var(--bg-body);
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: var(--text-main);
        }

        .auth-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .brand-logo {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-color);
            letter-spacing: -0.5px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .subtitle {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin-bottom: 32px;
        }

        .form-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #495057;
            margin-bottom: 8px;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px 16px;
            border: 1px solid #dee2e6;
            font-size: 0.95rem;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(230, 57, 70, 0.1);
            outline: none;
        }

        .btn-primary-custom {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 14px;
            font-weight: 600;
            font-size: 1rem;
            transition: filter 0.2s;
            margin-top: 8px;
        }

        .btn-primary-custom:hover {
            filter: brightness(90%);
            color: white;
        }

        .login-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        /* Responsividade */
        @media (max-width: 480px) {
            .auth-card {
                padding: 24px;
                box-shadow: none;
                background: transparent;
            }
        }
    </style>
</head>
<body>

<div class="auth-card text-center">
    <div class="brand-logo">
        <span>🌭</span> HOTDOG SYSTEM
    </div>
    <p class="subtitle">Crie sua conta para começar a gerenciar suas vendas.</p>
    
    <form action="/cadastar" method="POST">
        <div class="mb-3 text-start">
            <label for="nome" class="form-label">Nome de usuário</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
        </div>
        
        <div class="mb-3 text-start">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="exemplo@email.com" required>
        </div>

        <div class="mb-4 text-start">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Mínimo 8 caracteres" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary-custom">Criar conta</button>
        </div>
    </form>
    
    <div class="mt-4">
        <span class="text-muted small">Já possui uma conta?</span> 
        <a href="/Rotas/login" class="login-link small">Entrar</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>