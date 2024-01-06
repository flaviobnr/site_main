<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $port = $_POST['port_to_open'];

    // Verificar se as credenciais de autenticação estão corretas
    if ($username === 'seu_usuario' && $password === 'sua_senha') {
        // Realize a lógica para abrir a porta no seu roteador aqui
        // Certifique-se de que isso seja feito com segurança e de acordo com a documentação do seu roteador

        echo "Porta $port aberta com sucesso!";
    } else {
        echo "Credenciais incorretas. Acesso negado.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Configurar Portas</title>
</head>
<body>
    <h1>Configurar Portas no Roteador</h1>
    <form method="POST">
        <label for="username">Usuário:</label>
        <input type="text" name="username" required><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" required><br>

        <label for="port_to_open">Porta a ser aberta:</label>
        <input type="number" name="port_to_open" required><br>

        <input type="submit" value="Abrir Porta">
    </form>
</body>
</html>
