<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mensagem = trim($_POST["message"]);

    if (empty($nome) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($mensagem)) {
        http_response_code(400);
        echo "Por favor, preencha todos os campos corretamente.";
        exit;
    }

    $to = "damatamarinho@outlook.com"; // <<< ALTERE AQUI com seu e-mail real
    $subject = "Nova mensagem do site";
    $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";
    $headers = "From: $nome <$email>";

    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo "Mensagem enviada com sucesso!";
    } else {
        http_response_code(500);
        echo "Erro ao enviar a mensagem.";
    }
} else {
    http_response_code(403);
    echo "Método não permitido.";
}
