<?php
// Configurações de conexão com o banco de dados
$servername = "localhost";
$username = "root"; // Substitua com seu usuário do banco de dados
$password = ""; // Substitua com sua senha
$dbname = "gerenciador_tarefas"; // Nome do banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("A conexão falhou: " . $conn->connect_error);
}

// Verificando se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Validando se o e-mail já está cadastrado
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Se o e-mail já existir, exibimos uma mensagem de erro
        echo "<script>alert('Este e-mail já está cadastrado!');</script>";
    } else {
        // Se o e-mail for único, inserimos no banco
        $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Cadastro concluído com sucesso!'); window.location.href='cadastro_usuarios.html';</script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Fechando a conexão
$conn->close();
?>
