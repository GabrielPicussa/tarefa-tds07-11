document.getElementById('cadastroTarefaForm').addEventListener('submit', function(event) {
    // Pegando os valores dos campos
    var usuario = document.getElementById('usuario').value;
    var descricao = document.getElementById('descricao').value;
    var prioridade = document.getElementById('prioridade').value;
    var setor = document.getElementById('setor').value;
    var status = document.getElementById('status').value;
    var dataCadastro = document.getElementById('data_cadastro').value;

    // Verificando se todos os campos estão preenchidos
    if (!usuario || !descricao || !prioridade || !setor || !status || !dataCadastro) {
        alert("Todos os campos devem ser preenchidos!");
        event.preventDefault(); // Impede o envio do formulário
        return;
    }

    // Caso todos os campos estejam corretos, o formulário será enviado
    alert("Cadastro de tarefa concluído com sucesso!");
});
