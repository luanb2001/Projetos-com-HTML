<?php

    $localhost = "localhost";
    $user = "root";
    $password = "";
    $base = "testetecnico";

    $conn = new mysqli($localhost, $user, $password, $base);

    $sql = "SELECT * FROM usuarios";

    $result=mysqli_query($conn,$sql);
    $rowcount=mysqli_num_rows($result);

    if($rowcount == 0){

        header("Location: pagina-inicial.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
        <link rel="stylesheet" type="text/css" href="./css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tela de login</title>
    </head>
    <body>
        <form class="form-signin" action="logar.php" method="POST">
            <div class="boxlogin">
            <h2>Entrar</h2>      
                <div class="login">
                    <input type="email" name="email" id="inputEmail" class="form-control" required=""/>
                    <label for="inputEmail">E-mail</label>
                </div>
                <div class="login">
                    <input type="password" name="senha" id="inputSenha" class="form-control" required=""/>
                    <label for="inputSenha">Senha</label>
                </div> 
                <button type="submit">Entrar</button>
            </div>  
        </form>        
    </body>
</html>