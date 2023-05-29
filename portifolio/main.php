<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Configurar o destinatário do e-mail
    $destinatario = 'capettof@hotmail.com';

    // Montar o assunto e o corpo do e-mail
    $assunto = 'Novo contato pelo formulário de contato';
    $corpo = "Nome: $nome\nE-mail: $email\nMensagem: $mensagem";

    // Enviar o e-mail
    $headers = "From: $email\r\n";
    if (mail($destinatario, $assunto, $corpo, $headers)) {
        echo 'Mensagem enviada com sucesso. Entraremos em contato em breve.';
    } else {
        echo 'Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.';
    }
} else {
    echo 'Método de requisição inválido.';
}
?>