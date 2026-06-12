<?php
session_start();
// Define o e-mail e senha fixos no código
$email_correto = "admin@gmail.com";
$senha_correta = "20312";

$erro = "";

 //Verificação de valores e iniciamento de sessão
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logar'])) {
    $email_digitado = trim($_POST['email']);
    $senha_digitada = $_POST['senha'];

    
    if ($email_digitado === $email_correto && $senha_digitada === $senha_correta) {
        header("Location: home.php");
        $_SESSION['inicio'] = time();
        exit; 
    } else {
        $erro = "E-mail ou senha incorretos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CasaDasFigures</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            padding: 20px;
        }

        form {
            background-color: white;
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            color: #1e3c72;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            margin-top: 5px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #2a5298;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: none;
            border-radius: 8px;
            background-color: #2a5298;
            color: white;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #1e3c72;
        }

        /* Estilização da caixinha de erro */
        .alert-erro {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 15px;
            text-align: center;
            font-size: 14px;
        }

        @media (max-width: 480px) {
            form {
                padding: 20px;
            }
            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>

    <form action="" method="POST">
        <h1>Login</h1>
        <h1 style="font-size: 20px;">Insira suas credenciais para acessar a seção VIP da loja: </h1>
        <?php if (!empty($erro)): ?>
            <div class="alert-erro"><?php echo $erro; ?></div>
        <?php endif; ?>
        <!-- Inputs de senha e email -->
        <p>
            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email" required placeholder="exemplo@gmail.com"/>
        </p>
        
        <p>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required placeholder="Digite sua senha"/>
        </p>
        
        <input type="submit" name="logar" value="Entrar"/>
    </form>

</body>
</html>