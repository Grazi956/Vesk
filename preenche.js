const notaFiscalForm = document.getElementById('notaFiscalForm');

// Função para preencher os campos com os dados do cliente
function preencherCamposComDadosCliente(cliente) {
    document.getElementById('id_cliente').value = cliente.id;
    document.getElementById('nome').value = cliente.nome;
    document.getElementById('endereco').value = cliente.endereco;
    document.getElementById('telefone').value = cliente.telefone;
}

// Função para buscar os dados do cliente com base no ID da URL
function buscarDadosCliente() {
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id');
    if (id) {
        fetch(`get_client_data.php?id=${id}`)
            .then(response => response.json())
            .then(data => {
                preencherCamposComDadosCliente(data);
                // Define o ID do cliente no campo
                document.getElementById('id_cliente').value = id;
            })
            .catch(error => console.error(error));
    }
}

// Chame a função para buscar os dados do cliente quando a página for carregada
buscarDadosCliente();

notaFiscalForm.addEventListener('submit', function(event) {
    event.preventDefault();

    // Aqui você pode processar os dados do formulário, como enviar para um servidor ou armazenar localmente.

    const formData = new FormData(notaFiscalForm);

    console.log('Dados da Nota Fiscal:');
    for (const [key, value] of formData.entries()) {
        console.log(`${key}: ${value}`);
    }

    // Limpa o formulário após o envio dos dados
    notaFiscalForm.reset();
});
