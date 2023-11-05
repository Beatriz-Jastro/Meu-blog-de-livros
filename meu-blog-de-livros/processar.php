<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $para = "diasbeatriz283@gmail.com"; // Substitua com o seu endereço de e-mail
    $assunto = "Mensagem do formulário do site";

    $corpo = "Nome: $nome\n";
    $corpo .= "Email: $email\n";
    $corpo .= "Mensagem:\n$mensagem";

    // Use a função mail() para enviar o e-mail
    mail($para, $assunto, $corpo);

    // Redirecione o usuário de volta
    header("Location: contato.html");
} else {
    // não POST, redirecione para o formulário
    header("Location: contato.html");
}
?>
