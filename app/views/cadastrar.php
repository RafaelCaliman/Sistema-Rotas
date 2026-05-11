<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Hot Dog System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            /* Fundo com degradê "quente" (Ketchup e Mostarda) */
            background: linear-gradient(135deg, #ffc107 0%, #dc3545 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            padding: 20px;
        }

        .card-dog {
            background: #ffffff;
            border-radius: 25px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            padding: 40px;
            width: 100%;
            max-width: 450px;
            border: 5px solid #ffc107; /* Borda cor de mostarda */
        }

        .title-dog {
            font-family: 'Bangers', system-ui; /* Fonte estilo cartoon/lanche */
            color: #dc3545;
            font-size: 3rem;
            letter-spacing: 2px;
            text-shadow: 2px 2px #ffc107;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #444;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px;
            border: 2px solid #eee;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #dc3545;
            box-shadow: 0 0 10px rgba(220, 53, 69, 0.2);
        }

        .btn-dog {
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 12px;
            padding: 15px;
            font-size: 1.2rem;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s;
            box-shadow: 0 4px 0 #a71d2a;
        }

        .btn-dog:hover {
            background: #ffc107;
            color: #333;
            box-shadow: 0 4px 0 #d39e00;
            transform: translateY(-2px);
        }

        .btn-dog:active {
            transform: translateY(2px);
            box-shadow: none;
        }

        .emoji-header {
            font-size: 3rem;
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="card-dog text-center">
    <span class="emoji-header">🌭</span>
    <h1 class="title-dog">HOT DOG SYSTEM</h1>
    <p class="text-muted mb-4">Crie sua conta para começar a vender!</p>
    
    <form>
        <div class="mb-3 text-start">
            <label for="nome" class="form-label">Nome do Usuário</label>
            <input type="text" class="form-control" id="nome" placeholder="Ex: João Doglas" required>
        </div>
        
        <div class="mb-3 text-start">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="contato@hotdog.com" required>
        </div>

        <div class="mb-4 text-start">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Sua senha secreta" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-dog">Cadastrar Agora!</button>
        </div>
    </form>
    
    <div class="mt-4">
        <small class="text-muted">Já tem uma conta? <a href="#" style="color: #dc3545; font-weight: bold; text-decoration: none;">Faça Login</a></small>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>