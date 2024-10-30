<?php
//session_destroy();

//header('Location: login_pabx2.php');

?>
	<!-- <h2>valor da seção é :  <?echo $_SESSION['usuario']; ?></h2> -->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background-color: #2f3136;
            color: #f0f0f0;
            font-family: 'Arial', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            max-width: 1200px;
        }

        .logo-container {
            flex: 1;
            text-align: left;
        }

        .logo-container img {
            width: 60%;
        }

        .login-box {
            flex: 1;
            background-color: #36393f;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        .login-box h2 {
            color: #fff;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-control {
            background-color: #2f3136;
            border: none;
            border-radius: 4px;
            color: #fff;
        }

        .form-control::placeholder {
            color: #b9bbbe;
        }

        .btn-login {
            background-color: #43b581;
            border: none;
            border-radius: 5px;
            color: #fff;
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }

        .btn-login:hover {
            background-color: #3ba374;
        }

        .forgot-password {
            color: #7289da;
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>

    <title>Login Page</title>
</head>
<body>
   
<div class="login-container">
    <div class="logo-container">
        <!-- Substituir com a sua imagem/logo -->
        <img src="imagens/nome_da_sua_imagem.png" alt="Logo">
    </div>
    
    <div class="login-box">
        <h2>Entrar</h2>
        <form action="verifica_usuario.php" method="POST">
            <div class="mb-3">
                <input type="text" name="usuario" class="form-control" placeholder="Digite seu e-mail" required>
            </div>
            <div class="mb-3">
                <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn-login">Entrar</button>
            <a href="#" class="forgot-password">Esqueceu a senha?</a>
        </form>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
