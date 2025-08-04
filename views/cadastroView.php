<?php 
    require_once 'includes/cabecalhoCL.php'; 
?>

    
    <main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-5 col-xl-4">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                        <?php
                            
                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }

                            
                            if (isset($_SESSION['erro'])) {
                                
                                
                                echo '<div class="alert alert-danger text-center" role="alert">';
                                echo    $_SESSION['erro'];
                                echo '</div>';
                                
                                
                                unset($_SESSION['erro']);
                            }
                        ?>
                        <div class="text-center">
                            <img src="imagens/logo.png" alt="Logo do Fórum" class="img-fluid mb-4" style="max-width: 80px;">
                        </div>
                        <h3 class="card-title text-center mb-4">Crie sua Conta</h3>
                        <form action="../controlers/controlerUsuarios.php" method="POST">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome Completo:</label>
                                <input type="text" class="form-control" name="nome" id="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Endereço de e-mail</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="login" class="form-label">Nome de Usuário:</label>
                                <input type="text" class="form-control" name="login" id="login" required>
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" name="senha" id="senha" required>
                            </div>
                            <div class="mb-3">
                                <label for="senha2" class="form-label">Confirme sua senha</label>
                                <input type="password" class="form-control" name="senha2" id="senha2" required>
                                <div id="mensagem-senha" class="form-text mt-1"></div>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Criar minha conta</button>
                            </div>
                           <input type="hidden" name="acao" value="cadastrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        
        const senhaInput = document.getElementById('senha');
        const senha2Input = document.getElementById('senha2');
        const mensagemSenhaDiv = document.getElementById('mensagem-senha');
        const botaoSubmit = document.querySelector('button[type="submit"]');

        
        function validarSenhas() {
            const senha1 = senhaInput.value;
            const senha2 = senha2Input.value;

            if (senha2.length > 0) { 
                if (senha1 !== senha2) {
                    
                    mensagemSenhaDiv.textContent = "As senhas não coincidem.";
                    mensagemSenhaDiv.className = "form-text text-danger"; 
                    botaoSubmit.disabled = true; 
                } else {
                    
                    mensagemSenhaDiv.textContent = "As senhas coincidem!";
                    mensagemSenhaDiv.className = "form-text text-success"; 
                    botaoSubmit.disabled = false; 
                }
            } else {
                
                mensagemSenhaDiv.textContent = "";
                botaoSubmit.disabled = false; 
            }
        }

        
        senhaInput.addEventListener('keyup', validarSenhas);
        senha2Input.addEventListener('keyup', validarSenhas);
    </script>

<?php
    
    require_once 'includes/rodape.php';
?>