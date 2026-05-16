<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo - Hot-Dog</title>

    <link href="<?= BASE_URL ?>/resources/css/layout-administrativo.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/resources/icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <div class="sidebar-heading text-center">
                <i class="bi bi-speedometer2 me-2"></i>Hot-Dog
            </div>
            <div class="list-group list-group-flush mt-3">

                <a href="<?= BASE_URL ?>/admin" class="list-group-item list-group-item-action active">
                    <i class="bi bi-house-door fs-5 me-2"></i> Dashboard
                </a>

                <a href="<?= BASE_URL ?>/" class="list-group-item list-group-item-action">
                    <i class="bi bi-globe fs-5 me-2"></i> Voltar ao site
                </a>

                <button class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#cadastro" aria-expanded="false">
                    <span><i class="bi bi-plus-lg fs-5 me-2"></i> Cadastrar</span>
                    <i class="bi bi-chevron-down fs-6"></i>
                </button>

                <div class="collapse ms-4" id="cadastro">
                    <a href="<?= BASE_URL ?>/admin/produto/cadastrar" class="list-group-item list-group-item-action border-0 ps-4">
                        Produtos
                    </a>
                </div>

                <button class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#consulta" aria-expanded="false">
                    <span><i class="bi bi-search fs-5 me-2"></i> Consultar</span>
                    <i class="bi bi-chevron-down fs-6"></i>
                </button>

                <div class="collapse ms-4" id="consulta">
                    <a href="<?= BASE_URL ?>/admin/produto" class="list-group-item list-group-item-action border-0 ps-4">
                        Produtos
                    </a>
                </div>

            </div>
        </div>
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4 py-3">
                <div class="d-flex align-items-center">
                    <button class="btn btn-outline-dark" id="menu-toggle">
                        <i class="bi bi-list"></i>
                    </button>
                    <h4 class="ms-3 my-0">Visão Geral</h4>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown">
                                <img src="<?= BASE_URL ?>/storage/public/default-profile.png" class="rounded-circle me-2" alt="Avatar" width="30" height="30">
                                <span><?= $_SESSION['nome'] ?? 'Administrador' ?></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-danger" href="<?= BASE_URL ?>/logout">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="container-fluid px-4 py-4">