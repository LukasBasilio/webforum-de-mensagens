<?php
    require_once 'includes/cabecalho.php';

    if (!isset($mensagem)) {
        header("Location: ../controlers/controlerMensagens.php?acao=exibirHome");
        exit();
    }
?>

<main class="container d-flex flex-grow-1 align-items-center justify-content-center">
    <div class="row justify-content-center w-100">
        <div class="col-lg-9">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 text-truncate" style="max-width: 80%;">
                        <i class="bi bi-envelope-open-fill"></i> <?= htmlspecialchars($mensagem['assunto']) ?>
                    </h5>
                    <a href="../controlers/controlerMensagens.php?acao=exibirHome" class="btn btn-secondary btn-sm">
                        <i class="bi bi-arrow-left"></i> Voltar
                    </a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between text-muted border-bottom pb-2 mb-3">
                        <div>
                            <strong>De:</strong> <?= $nomeRemetente ?><br>
                            <strong>Para:</strong> <?= $nomeDestinatario ?>
                        </div>
                        <div class="text-end">
                            <?php
                                $data = new DateTime($mensagem['data_envio']);
                                echo $data->format('d/m/Y');
                            ?><br>
                            <small><?= $data->format('H:i') ?></small>
                        </div>
                    </div>

                    <p class="card-text" style="white-space: pre-wrap;"><?= htmlspecialchars($mensagem['conteudo']) ?></p>
                </div>

                <div class="card-footer text-end">
                    <form action="../controlers/controlerMensagens.php" method="POST" class="d-inline-block" onsubmit="return confirm('Tem certeza que deseja excluir esta mensagem?');">
                        <input type="hidden" name="acao" value="remover">
                        <input type="hidden" name="mensagem_id" value="<?= $mensagem['id'] ?>">
                        <button type="submit" class="btn btn-outline-danger">
                            <i class="bi bi-trash"></i> Excluir
                        </button>
                    </form>
                    
                    <a href="../controlers/controlerMensagens.php?acao=exibirFormulario&responder_para=<?= $mensagem['remetente_id'] ?>&assunto_original=<?= urlencode($mensagem['assunto']) ?>" class="btn btn-primary">
                        <i class="bi bi-reply-fill"></i> Responder
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require_once 'includes/rodape.php';
?>