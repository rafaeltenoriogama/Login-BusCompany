<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados (substitua os valores conforme sua configuração)
    $servername = "127.0.0.1";
    $username = "makima";
    $password = "abc123";
    $dbname = "projeto";
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Verifica se a conexão foi estabelecida com sucesso
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Prepara as variáveis ​​do formulário para inserção no banco de dados
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $email = $_POST["email"];

    // Verifica se a senha informada e a confirmação de senha são iguais
    if ($password != $confirm_password) {
        die("A senha e a confirmação de senha não são iguais.");
    }

    // Insere o novo usuário na tabela 'z_sec_users'
    $sql = "INSERT INTO z_sec_users (login, pswd, email) VALUES ('$username', '$password', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso.";
    } else {
        echo "Erro ao cadastrar o usuário: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>
