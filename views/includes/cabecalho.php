<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu WebForum</title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="d-flex flex-column vh-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                
                <?php
                    $link_destino = isset($_SESSION['usuario_id']) ? 'homeView.php' : 'index.php';
                ?>
                
                <a class="navbar-brand" href="<?= $link_destino ?>">
                    <i class="bi bi-chat-square-dots-fill"></i> Meu WebForum
                </a>

                <div class="ms-auto">
                    <?php if (isset($_SESSION['usuario_id']) && isset($_SESSION['usuario_nome'])): ?>
                        <div class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-fill"></i> Olá, <?= htmlspecialchars($_SESSION['usuario_nome']) ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                                <li><a class="dropdown-item" href="../controlers/controlerUsuarios.php?acao=logout"><i class="bi bi-box-arrow-right"></i> Sair</a></li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <a href="loginView.php" class="btn btn-outline-light me-2">Entrar</a>
                        <a href="cadastroView.php" class="btn btn-primary">Cadastre-se</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>