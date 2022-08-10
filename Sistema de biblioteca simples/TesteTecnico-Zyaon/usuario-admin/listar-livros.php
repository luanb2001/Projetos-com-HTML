<div class="table-responsive">
    <table class="table table-striped table-sm">
        <div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom' style='justify-content: center !important;'>
            <h1 class='h2' style='padding: 15px; text-align:center'>Livros Disponíveis</h1>
        </div>
        <?php

        $sql = "SELECT * FROM livros";

        $res = $connect->query($sql);

        $qtd = $res->num_rows;

        if ($qtd > 0) {
            print "<table class='table table-hover'>";
            print "<tr>";
            print "<th>Id</th>";
            print "<th>Categoria</th>";
            print "<th>Título</th>";
            print "<th>Autor</th>";
            print "<th>Editora</th>";
            print "<th>Ano de Lançamento</th>";
            print "<th>Ações</th>";
            print "</tr>";
            while ($row = $res->fetch_object()) {
                print "<tr>";
                print "<td>" . $row->id . "</td>";
                print "<td>" . $row->categoria . "</td>";
                print "<td>" . $row->titulo . "</td>";
                print "<td>" . $row->autor . "</td>";
                print "<td>" . $row->editora . "</td>";
                print "<td>" . $row->ano_lancamento . "</td>";
                print "<td>
                        <button onclick=\"location.href='?page=editar-livro&id=" . $row->id . "';\" 
                        class='btn btn-success'> Editar </button>
            
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-livro&acao=excluir&id=" . $row->id . "';}else{false;}\"
                        class='btn btn-danger'> Excluir </button>
                    </td>";
                print "</tr>";
            }
            print "</table>";
        } else {
            print "<p class='alert alert-danger'>Não há livros cadastrados!";
        }
        print "</table>";

        print "<div id='botao'>
                    <a class='btn btn-success' href='?page=cadastrar-livro'> Cadastrar Livro</a> 
                </div>";



        ?>
        <style>
            #botao {
                text-align: center;
            }
        </style>


</div>