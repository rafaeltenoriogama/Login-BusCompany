<?php
// Conexão com o banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "senha";
$dbname = "database";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Obtém os valores do formulário de login
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar o usuário e a senha na tabela
$sql = "SELECT * FROM z_sec_users WHERE login='$username' AND pswd='$password'";
$result = $conn->query($sql);
// Substitua z_sec_users por sua tabela no banco de dados. 

// Verifica se o login foi bem-sucedido ou não
if ($result->num_rows > 0) {
    // Login bem-sucedido, redirecionar para a página inicial ou exibir uma mensagem de sucesso
    echo "Login bem-sucedido!";
    header("Location: http://localhost:8092/teste/index.php");

} else {
    // Login falhou, redirecionar de volta ao formulário de login ou exibir uma mensagem de erro
    echo '<script>
    alert("Nome de usuário ou senha inválidos!");
    </script>';
}

// Fecha a conexão com o banco de dados
$conn->close();
?>