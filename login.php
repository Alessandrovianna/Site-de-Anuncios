<?php require 'pages/header.php'; ?>
<div class="container">
    <?php
    require 'classes/usuarios.class.php';
    $u = new Usuarios();
    if(isset($_POST['email']) && !empty($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = $_POST['senha'];

        if($u->login($email, $senha)) {
            ?>
            <script type="text/javascript">window.location.href="./";</script>
            <?php
        } else {
            ?>
                <div class="alert alert-danger">
                    Usuário e/ou Senha incorretos!
                </div>
            <?php
        }
    }
    ?>
    <div class="tela-login">
        <h1>Login</h1>
        <form method="POST">
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control inp" autocomplete="off" width="200">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" class="form-control inp" autocomplete="off">
            </div>

            <input type="submit" value="Fazer Login" class="btn btn-primary">
        </form>
    </div>
</div>
<?php require 'pages/footer.php'; ?>