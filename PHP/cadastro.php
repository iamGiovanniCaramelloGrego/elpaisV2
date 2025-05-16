<?php
// Conectar ao banco de dados
include('conexao.php');
// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificar se o e-mail já está registrado
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $erro = "Este e-mail já está registrado!";
    } else {
        // Criptografar a senha
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Inserir o novo usuário no banco de dados
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $nome, $email, $senhaHash);

        if ($stmt->execute()) {
            // Redirecionar para a página de login
            header("Location: login.php");
            exit();
        } else {
            $erro = "Erro ao registrar: " . $stmt->error;
        }
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FF6D00">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <title>Cadastro</title>
</head>
<body>
    <style>
        body {
    font-family: 'Poppins', sans-serif;
    background-color: #FFA500;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    padding: 0;
}

.signup-container {
    background-color: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
    text-align: center;
}

.signup-header h1 {
    margin-bottom: 0.5rem;
    color: #FF6D00;
}

.signup-header p {
    color: #666;
    margin-bottom: 2rem;
}

.input-group {
    margin-bottom: 1.5rem;
    text-align: left;
}

.form-label {
    display: block;
    margin-bottom: 0.5rem;
    color: #333;
    font-weight: 500;
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
    display: flex;
    justify-content: center;
    align-items: center;
}

.btn-submit i {
    margin-left: 0.5rem;
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
}

.login-link {
    margin-top: 2rem;
}

.login-link a {
    color: #FF6D00;
    text-decoration: none;
}

.login-link a:hover {
    text-decoration: underline;
}

    </style>
    <div class="signup-container">
        <div class="signup-header">
            <h1><i class="fas fa-user-plus"></i> Crie sua conta</h1>
            <p>Preencha os campos abaixo para se registrar</p>
        </div>

        <!-- Exibe mensagens de erro, se houver -->
        <?php if (isset($erro)): ?>
            <div class="error-message">
                <p><?php echo htmlspecialchars($erro); ?></p>
            </div>
        <?php endif; ?>

        <!-- Formulário de Cadastro -->
        <form action="cadastro.php" method="POST" class="form-container">
            <div class="input-group">
                <label for="nome" class="form-label"><i class="fas fa-user"></i> Nome:</label>
                <input type="text" id="nome" name="nome" class="form-input" placeholder="Digite seu nome" required>
            </div>
            <div class="input-group">
                <label for="email" class="form-label"><i class="fas fa-envelope"></i> Email:</label>
                <input type="email" id="email" name="email" class="form-input" placeholder="Digite seu email" required>
            </div>
            <div class="input-group">
                <label for="senha" class="form-label"><i class="fas fa-lock"></i> Senha:</label>
                <input type="password" id="senha" name="senha" class="form-input" placeholder="Crie uma senha" required>
            </div>
            <button type="submit" class="btn-submit">Cadastrar <i class="fas fa-user-check"></i></button>
        </form>

        <!-- Link para login -->
        <div class="login-link">
            <p>Já tem uma conta? <a href="login.php">Entre aqui</a></p>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>
