<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Página Inicial</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="../css/pagina-inicial.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" style="background-color: #603c3c !important;">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="pagina-inicial-admin.php">Biblioteca Zyaon</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="../logout.php">Sair</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="pagina-inicial-admin.php">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Home
                            </a>
                        </li>
                        <li id=usuarios class="nav-item">
                            <a class="nav-link" href="?page=usuarios">
                                <span data-feather="users" class="align-text-bottom"></span>
                                Usuários
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=livros">
                                <span data-feather="book" class="align-text-bottom"></span>
                                Livros
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=emprestimos">
                                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                Empréstimos
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <?php
                include("../config.php");
                switch (@$_REQUEST["page"]) {
                    case "usuarios":
                        include("listar-usuarios.php");
                        break;
                    case "cadastrar-usuario":
                        include("cadastrar-usuario.php");
                        break;
                    case "editar-usuario":
                        include("editar-usuario.php");
                        break;
                    case "salvar-usuario":
                        include("salvar-usuario.php");
                        break;
                    case "livros":
                        include("listar-livros.php");
                        break;
                    case "cadastrar-livro":
                        include("cadastrar-livro.php");
                        break;
                    case "editar-livro":
                        include("editar-livro.php");
                        break;
                    case "salvar-livro":
                        include("salvar-livro.php");
                        break;
                    case "emprestimos":
                        include("listar-emprestimos.php");
                        break;
                    case "cadastrar-emprestimo":
                        include("cadastrar-emprestimo.php");
                        break;
                    case "salvar-emprestimo":
                        include("salvar-emprestimo.php");
                        break;

                    default:
                        print "
                      
                      <div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom' style='justify-content: center !important;'>
                      <h1 class='h2'>Bem vindo!</h1>
                      </div>

                      <img src='https://pontodidatica.com.br/wp-content/uploads/2019/04/leitura.jpg' class='img-fluid' style='padding: 0% 15% 4% 15%;'>

                      <figure class='text-center'>
                      <blockquote class='blockquote'>
                        <p>O livro é um mudo que fala, um surdo que responde, um cego que guia, um morto que vive.</p>
                      </blockquote>
                      <figcaption class='blockquote-footer'>
                      Padre Antônio Vieira<cite title='Source Title'>Source Title</cite>
                      </figcaption>
                    </figure>";
                }

                ?>

                <footer class="py-3 my-4">
                    <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
                    <p class="text-center text-muted">© 2022 Teste Tecnico</p>
                </footer>

            </main>
        </div>
    </div>


    <script src="../bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="../js/pagina-inicial.js"></script>
</body>

</html>