<?php
// Conexão com o banco de dados
$servername = "IP do servidor/local ou nuvem";
$username = "login root/administrador do banco";
$password = "Senha do banco de dados";
$dbname = "Nome do banco de dados";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Obtém os valores do formulário de login
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar o usuário e a senha na tabela
$sql = "SELECT * FROM Tabela_do_banco_de_dados WHERE login='$username' AND pswd='$password'";
$result = $conn->query($sql);

// Verifica se o login foi bem-sucedido ou não
if ($result->num_rows > 0) {
    // Login bem-sucedido, redirecionar para a página inicial ou exibir uma mensagem de sucesso
    echo "Login bem-sucedido!";
    header("Location: http://endereço_da_pagina_inicial/index.php");

} else {
    // Login falhou, redirecionar de volta ao formulário de login ou exibir uma mensagem de erro
    echo '<script>
    alert("Nome de usuário ou senha inválidos!");
    </script>';
}

// Fecha a conexão com o banco de dados
$conn->close();
?>