<?php

require_once 'includes/cabecalho.php';


if (!isset($dadosCaixaDeEntrada) || !isset($dadosCaixaDeSaida)) {
    header("Location: ../controlers/controlerMensagens.php?acao=exibirHome");
    exit();
}
?>

<main class="container d-flex flex-grow-1 justify-content-center py-5">
    <div class="row justify-content-center w-100">
        <div class="col-lg-10">
            <div class="card shadow-sm" style="min-height: 75vh;">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5><i class="bi bi-chat-left-text-fill"></i> Minhas Mensagens</h5>
                    <a href="../controlers/controlerMensagens.php?acao=exibirFormulario" class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i> Escrever Nova Mensagem
                    </a>
                </div>
                <div class="card-body d-flex flex-column">

                    <?php if (isset($_SESSION['sucesso'])): ?>
                        <div class="alert alert-success text-center" role="alert">
                            <?= htmlspecialchars($_SESSION['sucesso']) ?>
                        </div>
                        <?php unset($_SESSION['sucesso']); ?>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['erro'])): ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <?= htmlspecialchars($_SESSION['erro']) ?>
                        </div>
                        <?php unset($_SESSION['erro']); ?>
                    <?php endif; ?>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="entrada-tab" data-bs-toggle="tab" data-bs-target="#caixaEntrada" type="button" role="tab" aria-controls="caixaEntrada" aria-selected="true">
                                <i class="bi bi-envelope-fill"></i> Caixa de Entrada
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="saida-tab" data-bs-toggle="tab" data-bs-target="#caixaSaida" type="button" role="tab" aria-controls="caixaSaida" aria-selected="false">
                                <i class="bi bi-send-fill"></i> Caixa de Saída
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content flex-grow-1" id="myTabContent">
                        <div class="tab-pane fade show active" id="caixaEntrada" role="tabpanel" aria-labelledby="entrada-tab">
                            <div class="list-group list-group-flush mt-3">
                                <?php if (empty($dadosCaixaDeEntrada)): ?>
                                    <div class="alert alert-info mt-3 text-center">Nenhuma mensagem na sua caixa de entrada.</div>
                                <?php else: ?>
                                    <?php foreach ($dadosCaixaDeEntrada as $item): ?>
                                        <?php
                                            $classe_nao_lida = ($item['mensagem']->getLida() == 0) ? 'fw-bold' : '';
                                        ?>
                                        <a href="../controlers/controlerMensagens.php?acao=visualizar&id=<?= $item['mensagem']->getId() ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-start <?= $classe_nao_lida ?>">
                                            <div>
                                                <span class="d-block"><strong>De:</strong> <?= $item['nome_remetente'] ?></span>
                                                <span class="d-block text-muted"><strong>Assunto:</strong> <?= htmlspecialchars($item['mensagem']->getAssunto()) ?></span>
                                            </div>
                                            <small class="text-muted text-nowrap">
                                                <?php
                                                    $data = new DateTime($item['mensagem']->getData_envio());
                                                    echo $data->format('d/m/Y H:i');
                                                ?>
                                            </small>
                                        </a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="caixaSaida" role="tabpanel" aria-labelledby="saida-tab">
                            <div class="list-group list-group-flush mt-3">
                                <?php if (empty($dadosCaixaDeSaida)): ?>
                                    <div class="alert alert-info mt-3 text-center">Nenhuma mensagem na sua caixa de saída.</div>
                                <?php else: ?>
                                    <?php foreach ($dadosCaixaDeSaida as $item): ?>
                                        <a href="../controlers/controlerMensagens.php?acao=visualizar&id=<?= $item['mensagem']->getId() ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                            <div>
                                                <span class="d-block"><strong>Para:</strong> <?= $item['nome_destinatario'] ?></span>
                                                <span class="d-block text-muted"><strong>Assunto:</strong> <?= htmlspecialchars($item['mensagem']->getAssunto()) ?></span>
                                            </div>
                                            <small class="text-muted text-nowrap">
                                                <?php if ($item['mensagem']->getLida() == 1): ?>
                                                    <i class="bi bi-check2-all text-primary me-1" title="Lida pelo destinatário"></i>
                                                <?php else: ?>
                                                    <i class="bi bi-check me-1" title="Enviada"></i>
                                                <?php endif; ?>
                                                <?php
                                                    $data = new DateTime($item['mensagem']->getData_envio());
                                                    echo $data->format('d/m/Y H:i');
                                                ?>
                                            </small>
                                        </a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'includes/rodape.php';
?>