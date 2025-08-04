<?php
    
    require_once 'includes/cabecalho.php';

   
    if (!isset($_SESSION['usuario_id'])) {
        
        header("Location: loginView.php"); 
        exit();
    }
?>
<main class="container d-flex flex-grow-1 align-items-center justify-content-center">
    <div class="row justify-content-center w-100">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5><i class="bi bi-send-fill"></i> Escrever Nova Mensagem</h5>
                    <a href="../views/homeView.php" class="btn btn-secondary btn-sm">
                        <i class="bi bi-arrow-left"></i> Voltar para Caixa de Entrada
                    </a>
                </div>
                <div class="card-body">
                    <form action="../controlers/controlerMensagens.php" method="POST">
                        <input type="hidden" name="acao" value="enviar">

                        <div class="mb-3">
                            <label for="destinatario" class="form-label">Para:</label>
                            
                            <select class="form-select" name="destinatario_id" id="destinatario" required>
                                <option value="" disabled <?= is_null($destinatario_selecionado_id) ? 'selected' : '' ?>>Selecione um destinatário...</option>
                                
                                <?php foreach ($listaDeUsuarios as $usuario): ?>
                                    <?php if ($usuario['idUsuario'] != $_SESSION['usuario_id']): ?>
                                        <?php 
                                            $selecionado = ($usuario['idUsuario'] == $destinatario_selecionado_id) ? 'selected' : '';
                                        ?>
                                        <option value="<?= $usuario['idUsuario'] ?>" <?= $selecionado ?>>
                                            <?= htmlspecialchars($usuario['nome']) ?>
                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="assunto" class="form-label">Assunto:</label>
                            <input type="text" class="form-control" name="assunto" id="assunto" value="<?= $assunto_preenchido ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="conteudo" class="form-label">Sua Mensagem:</label>
                            <textarea class="form-control" name="conteudo" id="conteudo" rows="8" required></textarea>
                        </div>

                        <div class="text-end">
                            <a href="../views/homeView.php" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require_once 'includes/rodape.php';
?>