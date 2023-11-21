document.addEventListener('DOMContentLoaded', function () {
    listarFaturas();
});

async function listarFaturas() {
    const tabelaFaturas = document.getElementById('tabelaFaturas');
    tabelaFaturas.innerHTML = ''; // Limpa a tabela antes de carregar os dados

    const dados = await fetch('list_faturas.php');
    const resposta = await dados.json();

    if (resposta.status) {
        const faturas = resposta.dados;
        faturas.forEach((fatura) => {
            tabelaFaturas.innerHTML += `
                <tr>
                    <td>${fatura.id}</td>
                    <td>${fatura.data_emissao}</td>
                    <td>${fatura.data_venc}</td>
                    <td>${fatura.descricao}</td>
                    <td>${fatura.valor_total}</td>
                    <td>${fatura.id_cliente}</td>
                    <td>
                        <a href='nota_fiscal.php?id=${fatura.id}' class='btn btn-primary'>Nota Fiscal</a>
                    </td>
                </tr>
            `;
        });
    } else {
        tabelaFaturas.innerHTML = '<tr><td colspan="7">Erro ao carregar faturas.</td></tr>';
    }
}
