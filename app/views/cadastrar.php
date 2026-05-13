<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Hot Dog System</title>

    <link rel="stylesheet" href="<?= BASE_URL ?>/resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/resources/css/cadastro.css">
 


</head>

<body>

    <div class="auth-card">

        <div class="auth-header">
            <h1>Criar conta</h1>
            <p>Sistema de Gerenciamento Hot Dog</p>
        </div>

        <?php if (isset($_SESSION['msg'])): ?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert-message">
                <?= $_SESSION['msg']; ?>

                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
                </button>
            </div>

            <?php unset($_SESSION['msg']); ?>

        <?php endif; ?>

        <form action="<?= BASE_URL ?>/cadastrar" method="POST">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Cadastrar
            </button>

        </form>

        <div class="footer-link">
            Já possui conta?
            <a href="<?= BASE_URL ?>/login">Entrar</a>
        </div>

    </div>

    <script src="<?= BASE_URL ?>/resources/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL ?>/resources/js/alerts.js"></script>

</body>

</html>