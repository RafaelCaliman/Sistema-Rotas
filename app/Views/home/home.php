
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Hot-dog</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/resources/css/home.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/resources/icons/bootstrap-icons.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg shadow-sm bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold d-flex align-items-center" href="/">
                    <i class="bi bi-hotdog-fill me-2 text-danger"></i>
                    Hot-Dog Brasília
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navMenu">
                    <ul class="navbar-nav ms-auto gap-2 align-items-center">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="<?= BASE_URL ?>/admin">
                                <i class="bi bi-box-seam me-1"></i> Area Administrativa
                            </a>
                        </li>

                        <?php if(isset($_SESSION['logado']) && $_SESSION['logado'] == TRUE) { ?>
                            <li class="nav-item dropdown">
                                <a class="btn btn-outline-dark px-4 ms-lg-2 d-flex align-items-center dropdown-toggle" 
                                   href="#" 
                                   role="button" 
                                   data-bs-toggle="dropdown" 
                                   aria-expanded="false">
                                    <i class="bi bi-person-circle me-2 fs-5"></i>
                                    <?= htmlspecialchars($_SESSION['nome']); ?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="<?= BASE_URL ?>/perfil">
                                            <i class="bi bi-gear me-2"></i> Meu Perfil
                                        </a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-danger" href="<?= BASE_URL ?>/logout">
                                            <i class="bi bi-box-arrow-right me-2"></i> Sair/Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="btn btn-outline-dark px-4 ms-lg-2 d-flex align-items-center" href="<?= BASE_URL ?>/login">
                                    <i class="bi bi-person-circle me-1"></i> Login 
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>