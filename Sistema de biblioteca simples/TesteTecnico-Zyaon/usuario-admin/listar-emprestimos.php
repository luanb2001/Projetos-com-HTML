<div class="table-responsive">
    <table class="table table-striped table-sm">
        <div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom' style='justify-content: center !important;'>
            <h1 class='h2' style='padding: 15px; text-align:center'>Empréstimos em Andamento</h1>
        </div>

        <?php
        // $query_usuario= "SELECT nome FROM 'usuarios' WHERE id='$id_usuario'";

        $sql = "SELECT * FROM emprestimos";

        $res = $connect->query($sql);

        $qtd = $res->num_rows;

        if ($qtd > 0) {
            print "<table class='table table-hover'>";
            print "<tr>";
            print "<th>Código do empréstimo</th>";
            print "<th>ID do Usuário</th>";
            print "<th>ID do Livro</th>";
            print "<th>Ações</th>";
            print "</tr>";
            while ($row = $res->fetch_object()) {
                print "<tr>";
                print "<td>" . $row->id . "</td>";
                print "<td>" . $row->id_usuario . "</td>";
                print "<td>" . $row->id_livro . "</td>";
                print "<td> 
                
                <button onclick=\"if(confirm('Esse procedimento de empréstimo será excluido.')){location.href='?page=salvar-emprestimo&acao=excluir&id=" . $row->id . "';}else{false;}\"
                        class='btn btn-danger'> Livro Devolvido </button>
                        </td>";
                print "</tr>";

                
            }
            print "</table>";
        } else {
            print "<p class='alert alert-danger'>Não há empréstimos em andamento!";
        }
        print "</table>";

        print "<div id='botao'>
                    <a class='btn btn-success' href='?page=cadastrar-emprestimo'> Cadastrar Empréstimo</a> 
                </div>";
        ?>
        <style>
            #botao {
                text-align: center;
            }
        </style>

</div>