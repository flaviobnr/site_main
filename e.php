<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Contato</title>
</head>
<body>
    <h1>Formulário de Contato</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];
        $destinatario = "viniciusvieirafarias2018@gmail.com";
        $assunto = "Mensagem do formulário de contato";

        $header = "From: $email" . "\r\n";
        $header .= "Reply-To: $email" . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();

        mail($destinatario, $assunto, $mensagem, $header);

        echo "Mensagem enviada com sucesso!";
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
