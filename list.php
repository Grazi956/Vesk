<?php
include_once 'conexao.php';

$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_NUMBER_INT);

if (!empty($pagina)) {

    //Calcular o inicio visualização
    $qnt_result_pg = 15; //Quantidade de registro por página
    $inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;

    $query_clientes = "SELECT id, nome, endereco, cpf, telefone FROM clientes ORDER BY id LIMIT $inicio, $qnt_result_pg";
    $result_clientes = $conn->prepare($query_clientes);
    $result_clientes->execute();

    if (($result_clientes) and ($result_clientes->rowCount() != 0)) {

        $dados = "<div class='table-responsive'>
            <table class='table table-striped table-bordered'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>";
        while ($row_cliente = $result_clientes->fetch(PDO::FETCH_ASSOC)) {
            extract($row_cliente);
            $dados .= "<tr>
                    <td id='valor_id$id'>$id</td>
                    <td id='valor_nome$id'>$nome</td>
                    <td id='valor_endereco$id'>$endereco</td>
                    <td id='valor_cpf$id'>$cpf</td>
                    <td id='valor_telefone$id'>$telefone</td>
                    <td class='d-flex'>                        
                        <button type='button' id='botao_editar$id' class='btn btn-warning btn-sm me-1' onclick='editar_registro($id)'>Editar</button>
                        <button type='button' id='botao_salvar$id' class='btn btn-danger btn-sm me-1' onclick='salvar_registro($id)'  style='display: none;'>Salvar</button>
                        <button type='button' id='botao_fiscal$id' class='btn btn-warning btn-sm me-1' onclick='window.location.href=\"new_invoice.php?id=$id\"'>Nota Fiscal</button>

                    </td>
                </tr>";
        }

        $dados .= "</tbody>
        </table>
    </div>";

        //Paginação - Somar a quantidade de clientes
        $query_pg = "SELECT COUNT(id) AS num_result FROM clientes";
        $result_pg = $conn->prepare($query_pg);
        $result_pg->execute();
        $row_pg = $result_pg->fetch(PDO::FETCH_ASSOC);

        //Quantidade de página
        $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

        $max_links = 2;

        $dados .= '<nav aria-label="Page navigation example"><ul class="pagination pagination-sm justify-content-center">';

        $dados .= "<li class='page-item'><a href='#' class='page-link' onclick='listarClientes(1)'>Primeira</a></li>";

        for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
            if ($pag_ant >= 1) {
                $dados .= "<li class='page-item'><a class='page-link' href='#' onclick='listarClientes($pag_ant)' >$pag_ant</a></li>";
            }
        }

        $dados .= "<li class='page-item active'><a class='page-link' href='#'>$pagina</a></li>";

        for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
            if ($pag_dep <= $quantidade_pg) {
                $dados .= "<li class='page-item'><a class='page-link' href='#' onclick='listarClientes($pag_dep)'>$pag_dep</a></li>";
            }
        }

        $dados .= "<li class='page-item'><a class='page-link' href='#' onclick='listarClientes($quantidade_pg)'>Última</a></li>";
        $dados .=   '</ul></nav>';

        $retorna = ['status' => true, 'dados' => $dados];
    } else {
        $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Nenhum cliente encontrado!</div>"];
    }
} else {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Nenhum cliente encontrado!</div>"];
}

echo json_encode($retorna);
?>

