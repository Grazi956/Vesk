/* Início listar os registros do banco de dados */
const tbody = document.querySelector(".listar-clientes");

// Função para listar os registros do banco de dados
const listarClientes = async (pagina) => {

    // Fazer a requisição para o arquivo PHP responsável por recuperar os registros do banco de dados
    const dados = await fetch("./list.php?pagina=" + pagina);

    // Ler o objeto retornado pelo arquivo PHP
    const resposta = await dados.json();

    // Acessa o IF quando não encontrar nenhum registro no banco de dados
    if (!resposta['status']) {
        // Envia a mensagem de erro para o arquivo HTML que deve ser apresentada para o usuário
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];
    } else {
        // Recuperar o seletor do HTML que deve receber os registros
        const conteudo = document.querySelector(".listar-clientes");

        // Somente acessa o IF quando existir o seletor ".listar-clientes"
        if (conteudo) {

            // Enviar os dados para o arquivo HTML
            conteudo.innerHTML = resposta['dados'];
        }
    }
}

// Chamar a função para listar os registros do banco de dados
listarClientes(1);

/* Fim listar os registros do banco de dados */

/* Início substituir o texto pelo campo na tabela */
// Função responsável por substituir o texto pelo campo na tabela e receber o ID do registro que será editado

function editar_registro(id) {
    // Ocultar o botão editar
    document.getElementById("botao_editar" + id).style.display = "none";

    // Apresentar o botão salvar
    document.getElementById("botao_salvar" + id).style.display = "block";

    // Recuperar os valores do registro que está na tabela
    var nome = document.getElementById("valor_nome" + id);
    var endereco = document.getElementById("valor_endereco" + id);
    var cpf = document.getElementById("valor_cpf" + id);
    var telefone = document.getElementById("valor_telefone" + id);

    // Substituir o texto pelo campo e atribuir para o campo o valor que estava na tabela
    nome.innerHTML = "<input type='text' id='nome_text" + id + "' value='" + nome.innerHTML + "'>";
    endereco.innerHTML = "<input type='text' id='endereco_text" + id + "' value='" + endereco.innerHTML + "'>";
    cpf.innerHTML = "<input type='text' id='cpf_text" + id + "' value='" + cpf.innerHTML + "'>";
    telefone.innerHTML = "<input type='text' id='telefone_text" + id + "' value='" + telefone.innerHTML + "'>";

}

/* Fim substituir o texto pelo campo na tabela */

/* Início editar o registro no banco de dados */
// Função responsável por salvar no banco de dados e receber o ID do registro que deve ser editado

async function salvar_registro(id) {
    // Recuperar os valores dos campos
    var nome_valor = document.getElementById("nome_text" + id).value;
    var endereco_valor = document.getElementById("endereco_text" + id).value;
    var cpf_valor = document.getElementById("cpf_text" + id).value;
    var telefone_valor = document.getElementById("telefone_text" + id).value;

    // Preparar a STRING de valores que deve ser enviada para o arquivo PHP responsável por salvar no banco de dados
    var dadosForm = "id=" + id + "&nome=" + nome_valor + "&endereco=" + endereco_valor + "&cpf=" + cpf_valor + "&telefone=" + telefone_valor;

    // Fazer a requisição com o FETCH para um arquivo PHP e enviar através do método POST os dados do formulário
    const dados = await fetch("editar.php", {
        method: "POST",
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: dadosForm
    });

    // Ler o objeto, a resposta do arquivo PHP
    const resposta = await dados.json();

    // Acessa o IF quando não conseguir editar no banco de dados
    if (!resposta['status']) {
        // Envia a mensagem de erro para o arquivo HTML que deve ser apresentada para o usuário
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];
    } else {
        // Envia a mensagem de sucesso para o arquivo HTML que deve ser apresentada para o usuário
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];

        // Chamar a função para remover a mensagem após alguns segundos
        removerMsgAlerta();

        // Substituir os campos pelo texto que estava nos campos
        document.getElementById("valor_nome" + id).innerHTML = nome_valor;
        document.getElementById("valor_endereco" + id).innerHTML = endereco_valor;
        document.getElementById("valor_cpf" + id).innerHTML = cpf_valor;
        document.getElementById("valor_telefone" + id).innerHTML = telefone_valor;

        // Apresentar o botão editar
        document.getElementById("botao_editar" + id).style.display = "block";

        // Ocultar o botão salvar
        document.getElementById("botao_salvar" + id).style.display = "none";
    }
}

/* Fim editar o registro no banco de dados */

/* Início remover a mensagem em 5 segundos após apresentar a mensagem para o usuário */
function removerMsgAlerta() {
    setTimeout(function () {
        // Substituir a mensagem
        document.getElementById("msgAlerta").innerHTML = "";
    }, 5000);
}