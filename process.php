<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Configurar informações de e-mail
    $to = "eduardofralmeida745@gmail.com";
    $headers = "From: $email";
    $messageBody = "Nome: $firstName $lastName\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Assunto: $subject\n";
    $messageBody .= "Mensagem:\n$message";

    // Enviar e-mail
    if (mail($to, "Formulário de Contato", $messageBody, $headers)) {
        // Redirecionar para a página do formulário com uma mensagem de sucesso
        header("Location: formulario.html?enviado=1");
        exit;
    } else {
        echo "Ocorreu um erro ao enviar a mensagem.";
    }
} else {
    echo "Erro: O formulário não foi enviado corretamente.";
}
?>
