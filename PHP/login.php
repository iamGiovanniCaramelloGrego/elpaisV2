<?php
session_start(); // Iniciar a sessão

// Conectar ao banco de dados
include('conexao.php');
// Verificar se o formulário de login foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Buscar o usuário no banco de dados
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $usuario = $result->fetch_assoc();

        // Verificar se a senha está correta
        if (password_verify($senha, $usuario['senha'])) {
            // Armazenar os dados do usuário na sessão
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome']; // Alterei de usuario_nome para nome
            $_SESSION['email'] = $usuario['email']; // Alterei de usuario_email para email

            // Redirecionar para a página principal (fy.php)
            header("Location: perfil.php");
            exit();
        } else {
            $erro = "Senha incorreta.";
        }
    } else {
        $erro = "E-mail não encontrado.";
    }

    $stmt->close();
}


?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FF6D00">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
   
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h2><i class="fas fa-user-circle"></i> Bem-vindo de volta!</h2>
            <p>Faça login para continuar</p>
        </div>

        <!-- Exibe mensagens de erro, se houver -->
        <?php if (isset($erro)): ?>
            <div class="error-message">
                <p><?php echo htmlspecialchars($erro); ?></p>
            </div>
        <?php endif; ?>

        <!-- Formulário de Login -->
        <form action="login.php" method="POST" class="form-container">
            <div class="input-group">
                <label for="email" class="form-label"><i class="fas fa-envelope"></i> Email:</label>
                <input type="email" id="email" name="email" class="form-input" placeholder="Digite seu email" required>
            </div>
            <div class="input-group">
                <label for="senha" class="form-label"><i class="fas fa-lock"></i> Senha:</label>
                <input type="password" id="senha" name="senha" class="form-input" placeholder="Digite sua senha" required>
            </div>
            <div class="password-options">
                <div class="remember-me">
                    <input type="checkbox" id="lembrar" name="lembrar">
                    <label for="lembrar">Lembrar-me</label>
                </div>
                <a href="#" class="forgot-password">Esqueceu sua senha?</a>
            </div>
            <button type="submit" class="btn-submit">Entrar <i class="fas fa-sign-in-alt"></i></button>
        </form>

        <!-- Link para criar conta -->
        <div class="register-link">
            <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
        </div>
    </div>

  <style>
      body {
    font-family: 'Poppins', sans-serif;
    background-color: #FFA500;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
    text-align: center;
}

.login-header h2 {
    margin-bottom: 0.5rem;
    color: #FF6D00;
}

.login-header p {
    color: #666;
    margin-bottom: 2rem;
}

.input-group {
    margin-bottom: 1.5rem;
}

.form-label {
    display: block;
    margin-bottom: 0.5rem;
    color: #333;
    font-weight: 500;
    text-align: left;
}

.form-input {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-input:focus {
    border-color: #FF6D00;
    outline: none;
}

.password-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
}

.remember-me input {
    margin-right: 0.5rem;
}

.forgot-password {
    color: #FF6D00;
    text-decoration: none;
}

.forgot-password:hover {
    text-decoration: underline;
}

.btn-submit {
    background-color: #FF6D00;
    color: #fff;
    padding: 0.75rem;
    width: 100%;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-submit:hover {
    background-color: #e65a00;
}

.error-message {
    background-color: #ffe6e6;
    color: #d9534f;
    padding: 0.75rem;
    margin-bottom: 1rem;
    border-radius: 5px;
    text-align: left;
}

.register-link {
    margin-top: 2rem;
}

.register-link a {
    color: #FF6D00;
    text-decoration: none;
}

.register-link a:hover {
    text-decoration: underline;
}

  </style>
</body>
</html>

    
