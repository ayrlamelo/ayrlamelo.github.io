php.validate.executablePath
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura os dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Define o destinatário e o cabeçalho do e-mail
    $to = "seu-email@dominio.com"; // Substitua pelo seu e-mail
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    // Monta o conteúdo do e-mail
    $body = "Nome: $name\n";
    $body .= "E-mail: $email\n";
    $body .= "Assunto: $subject\n\n";
    $body .= "Mensagem:\n$message\n";

    // Envia o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail. Tente novamente.";
    }
} else {
    echo "Método inválido.";
}
?>