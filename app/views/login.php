<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Hot-Dog Brasília</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../resources/css/login.css">
    
</head>
<body>

    <div class="container">
        <div class="card login-card shadow-lg mx-auto">
            <div class="text-center mb-4">
                <i class="bi bi-hotdog-fill text-danger" style="font-size: 3rem;"></i>
                <h2 class="fw-bold mt-2" style="color: #14213d;">Bem-vindo!</h2>
                <p class="text-muted">Acesse o sistema Hot-Dog Brasília</p>
            </div>

            <form action="/Rotas/autenticar" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">E-mail</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label fw-semibold">Senha</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="senha" placeholder="Sua senha" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary-custom w-100 py-2 fw-bold">
                    Entrar <i class="bi bi-box-arrow-in-right ms-2"></i>
                </button>

                <div class="text-center mt-4">
                    <a href="/Rotas/" class="text-decoration-none text-muted small">
                        <i class="bi bi-arrow-left"></i> Voltar para a Home
                    </a>
                </div>

                 <div class="text-center mt-4">
                    <a href="/Rotas/cadastrar" class="text-decoration-none text-muted small">
                        <i class="bi bi-arrow-left"></i> Não tem cadastro? <strong>Cadastre Aqui</strong>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>