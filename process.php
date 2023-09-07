<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resposta = $_POST["resposta"];

    // Configuração para enviar email usando Gmail SMTP
    $to_email = "mcmatheuslining11@gmail.com
    "; // Substitua pelo seu endereço de email
    $subject = "Resposta do Site de Namoro";
    $message = "A pessoa respondeu: $resposta";

    $headers = "From:mcmatheuslining11@gmail.com"; // Substitua pelo seu endereço de email
    $headers .= "Content-Type: text/html; charset=UTF-8";

    // Envia o email
    if (mail($to_email, $subject, $message, $headers)) {
        echo "Obrigado por sua resposta. Um email foi enviado.";
    } else {
        echo "Houve um problema ao enviar o email.";
    }
} else {
    echo "Acesso inválido.";
}
?>
