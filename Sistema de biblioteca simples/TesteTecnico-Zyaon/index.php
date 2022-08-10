<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">

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
    <link href="./css/login.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form action="./logar.php" method="POST">
            <h2>Zyaon</h2>
            <h4>Biblioteca</h4>
            <img class="mb-4" src="https://images.vexels.com/media/users/3/153313/isolated/lists/c2cf4eb37360100b8e3fa9b6cd0ef7bb-icone-de-livros-escolares.png" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal"></h1>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Endereço de email</label>
            </div>
            <div class="form-floating">
                <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Senha</label>
            </div>

            <p id="cadastro">
                <a style="text-decoration: none; margin-top: -5px;" href="cadastro.php">
                    Cadastrar
                </a>
            </p>

            <button class="w-100 btn btn-lg btn-primary" type="submit" style=" margin-top: 20px;">Entrar</button>


            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
        </form>
    </main>



</body>

</html>