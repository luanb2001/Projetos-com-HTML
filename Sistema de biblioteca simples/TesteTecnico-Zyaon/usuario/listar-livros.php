<form action="?page=livros">
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom' style='justify-content: center !important;'>
                <h1 class='h2'>Livros Disponíveis</h1>
            </div>
            <?php

            $sql = "SELECT * FROM livros";

            $res = $connect->query($sql);

            $qtd = $res->num_rows;

            if ($qtd > 0) {
                while ($row = $res->fetch_object()) {
                    print "
                    <div class='card' style='width: 25%;margin-bottom: 3%;margin-right: 3%;margin-left: 5%;min-width: 150px;float: left;';>
                    <img src='https://i.pinimg.com/736x/49/f7/25/49f725a9f2b62ea80603f3fe51289735--le-design-icon-design.jpg' class='card-img-top'>
                        <div class='card-body'>
                            <h5 class='card-title' style='text-align:center';> $row->titulo</h5>
                            <p class='card-text'>$row->categoria</p>
                            <p class='card-text'>Lançado em $row->ano_lancamento</p>
                        </div>
                    </div>";
                }
            } else {
                print "<p class='alert alert-danger'>Não há livros disponíveis no momento!";
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