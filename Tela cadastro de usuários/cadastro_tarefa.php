<?php
// Conectando ao banco de dados
$servername = "localhost";
$username = "root"; // Substitua pelo seu usuário
$password = ""; // Substitua pela sua senha
$dbname = "gerenciador_tarefas"; // Nome do banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificando se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário
    $usuario_id = $_POST['usuario'];
    $descricao = $_POST['descricao'];
    $prioridade = $_POST['prioridade'];
    $setor = $_POST['setor'];
    $status = $_POST['status'];
    $data_cadastro = $_POST['data_cadastro'];

    // Inserindo os dados no banco de dados
    $sql = "INSERT INTO tarefas (usuario_id, descricao, prioridade, setor, status, data_cadastro) 
            VALUES ('$usuario_id', '$descricao', '$prioridade', '$setor', '$status', '$data_cadastro')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cadastro concluído com sucesso!'); window.location.href='cadastro_tarefas.html';</script>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Fechando a conexão
$conn->close();
?>
