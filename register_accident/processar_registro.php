<?php
// Dados recebidos do formulário
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$VeiculoTerceiro = $_POST['VeiculoTerceiro'];
$carro = $_POST['carro'];
$observacao = $_POST['observacao'];

// Exemplo de conexão com o banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "senha";
$dbname = "database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Inserir os dados na tabela
$sql = "INSERT INTO db_projeto (nome, carro, tipo, observacao, VeiculoTerceiro) VALUES ('$nome', '$carro', '$tipo', '$observacao', '$VeiculoTerceiro')";
// Substitua db_projeto pelo nome da sua tabela no banco de dados.

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Novo registro cadastrado!'); window.location.href = 'index.php';</script>";
} else {
    echo "Erro ao registrar! " . $conn->error;
}
// Se a consulta for bem-sucedida, ele exibe um alerta JavaScript "Novo registro cadastrado!"
// E redireciona o usuário para a página inicial de cadastro.
// Se a consulta falhar, ele exibe a mensagem "Erro ao registrar!"

$conn->close();
?>

