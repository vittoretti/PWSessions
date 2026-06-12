<?php
// Sempre inicia a sessão antes de qualquer verificação
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$tempo_limite = 180; 


if (!isset($_SESSION['inicio'])) {
    header("Location: login.php");
    exit();
}

// Verifica se o tempo de inatividade estourou o limite
if (time() - $_SESSION['inicio'] > $tempo_limite) {
    session_destroy();  
    header("Location: login.php?erro=sessao_expirada");
    exit();
}

// Se o usuário estiver ativo, o tempo é renovado
$_SESSION['inicio'] = time();
?>