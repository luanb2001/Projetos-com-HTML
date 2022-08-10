<form action="?page=emprestimos">
    <div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom' style='justify-content: center !important;'>
        <h1 class='h2'>Esses são seus empréstimos</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <?php

            $sql = "SELECT * FROM emprestimos WHERE id_usuario= $logado";

            $res = $connect->query($sql);

            $qtd = $res->num_rows;

            if ($qtd > 0) {
                print "<table class='table table-hover'>";
                print "<tr>";
                print "<th>Código do empréstimo</th>";
                print "<th>Livro</th>";
                print "</tr>";
                while ($row = $res->fetch_object()) {
                    print "<tr>";
                    print "<td>" . $row->id . "</td>";
                    print "<td>" . $row->id_livro . "</td>";
                    print "<td>
                        <button onclick=\"if(confirm('Tem certeza que deseja devolver?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{false;}\"
                        class='btn btn-danger'> Devolver </button>
                    </td>";
                    print "</tr>";
                }
                print "</table>";
            } else {
                print "<p class='alert alert-danger'>Não há empréstimos cadastrados no seu usuário!";
            }
            print "</table>";


            ?>
            <style>
                #botao {
                    text-align: center;
                }
            </style>

    </div>
</form>