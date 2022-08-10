<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

global $logado;

$query = "SELECT * FROM usuarios WHERE email='$email' and senha=MD5('$senha')";
 
$conexao = new PDO('mysql:host=localhost;dbname=testetecnico', 'root', '');
$resultado = $conexao->query($query);
$logado = $resultado->fetch();
$id_logado = $logado['id'];
 
if ($logado == null) {
   // Usuário ou senha inválida
   header('Location: index.php');
   
} 
else {
   session_start();
   $_SESSION['usuario_logado'] = $id_logado;
   $logado = true;
   // Direciona o usuário para o painel administrativo do sistema
   header('Location: pagina-inicial.php');
}
die();
?>