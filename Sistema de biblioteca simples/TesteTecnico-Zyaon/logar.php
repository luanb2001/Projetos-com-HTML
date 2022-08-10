<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

global $logado;

$query = "SELECT * FROM usuarios WHERE email='$email' and senha=MD5('$senha')";

$query_admin= "SELECT * FROM administrador WHERE email='$email' and senha=MD5('$senha')";
 
$conexao = new PDO('mysql:host=localhost;dbname=bibliotecazyaon', 'root', '');

$resultado = $conexao->query($query);
$logado = $resultado->fetch();
$id_logado = $logado['id'];

$resultado_admin = $conexao->query($query_admin);
$logado_admin = $resultado_admin->fetch();
$id_logado_admin = $logado_admin['id'];
 
if ($logado == null && $logado_admin == null) {
   // Usuário ou senha inválida
   header('Location: index.php');
   
} 

else if ($logado == null){
   session_start();
   $_SESSION['admin_logado'] = $id_logado_admin;
   $logado_admin = true;
   // Direciona o administrador para sua pagina inicial
   header('Location: ./usuario-admin/pagina-inicial-admin.php');
}

else if ($logado_admin == null){
   session_start();
   $_SESSION['usuario_logado'] = $id_logado;
   $logado = true;
   // Direciona o usuário para para sua pagina incial
   header('Location: ./usuario/pagina-inicial.php');
}

die();
?>

