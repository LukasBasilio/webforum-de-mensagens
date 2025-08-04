<?php 
    require_once 'includes/cabecalho.php'; 
?>

<div class="container-fluid px-0">
    <div class="px-4 py-4 my-3 text-center">
        <h1 class="display-4 fw-bold text-white">Uma Comunidade Feita para Você</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 text-white">Uma plataforma simples e direta para você trocar mensagens, debater ideias e se conectar com outros membros de forma segura e privada.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="cadastroView.php" class="btn btn-primary btn-lg px-4 gap-3">Criar minha Conta</a>
                <a href="loginView.php" class="btn btn-light btn-lg px-4">Já tenho uma conta</a>
            </div>
        </div>
    </div>
</div>

<div class="pt-5 pb-4">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white">Um Espaço Dedicado ao Diálogo</h2>
                <p class="text-white">Acreditamos que as melhores ideias nascem do diálogo. Nosso WebForum foi projetado para ser um ambiente limpo e focado, onde você pode se expressar e interagir com outros membros de maneira direta, segura e sem distrações.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-people-fill fs-1 text-primary"></i>
                        <h5 class="card-title mt-3">Inicie Conversas</h5>
                        <p class="card-text">Encontre outros usuários cadastrados em nossa comunidade e envie uma mensagem direta para começar um novo diálogo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-lightbulb-fill fs-1 text-primary"></i>
                        <h5 class="card-title mt-3">Compartilhe e Responda</h5>
                        <p class="card-text">Receba mensagens em sua caixa de entrada, responda a discussões e mantenha suas conversas organizadas em um só lugar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-shield-check fs-1 text-primary"></i>
                        <h5 class="card-title mt-3">Comunicação Privada</h5>
                        <p class="card-text">Todas as mensagens são trocadas diretamente entre os usuários, garantindo um ambiente seguro e privado para suas conversas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    // Para o rodapé, o ideal é editar o arquivo includes/rodape.php
    // e trocar a classe mt-5 por mt-4 ou mt-3.
    require_once 'includes/rodape.php';
?>