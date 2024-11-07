<script>
    document.getElementById('cadastroForm').addEventListener('submit', function(event) {
        // Pegando os valores dos campos
        var nome = document.getElementById('nome').value;
        var email = document.getElementById('email').value;

        // Verificando se todos os campos estão preenchidos
        if (!nome || !email) {
            alert("Todos os campos devem ser preenchidos!");
            event.preventDefault(); // Impede o envio do formulário
            return;
        }

        // Validando o formato do e-mail
        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailRegex.test(email)) {
            alert("Por favor, insira um e-mail válido!");
            event.preventDefault(); // Impede o envio do formulário
            return;
        }

        // Caso tudo esteja correto, o formulário será enviado
        alert("Cadastro concluído com sucesso!");
    });
</script>
