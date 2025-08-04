<?php 
    
    require_once 'includes/cabecalhoCL.php'; 
?>
    
    <main class="container d-flex flex-grow-1 align-items-center justify-content-center">
        <div class="row justify-content-center w-100">
            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="card shadow-sm">
                    <div class="card-body p-4">

                        <?php
                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }

                            
                            if (isset($_SESSION['sucesso'])) {
                                
                                echo '<div class="alert alert-success text-center" role="alert">';
                                echo    $_SESSION['sucesso'];
                                echo '</div>';
                                
                                unset($_SESSION['sucesso']);
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
                        <h3 class="card-title text-center mb-4">Acessar sua Conta</h3>
                        <form action="../controlers/controlerUsuarios.php" method="POST">
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" name="senha" id="senha" required>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Entrar</button>
                            </div>
                            <input type="hidden" name="acao" value="login">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
   
    require_once 'includes/rodape.php';
?>