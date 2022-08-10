<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $id_livro = $_POST["id_livro"];
            $id_usuario = $_POST["id_usuario"];

            $sql = "INSERT INTO emprestimos (
                id_livro, id_usuario) 
                VALUES (
                '{$id_livro}', '{$id_usuario}')"; 

                $res= $connect->query($sql);

                if($res==true){
                    print "<script>alert('Cadastrado com sucesso');</script>";
                    print "<script>location.href='?page=emprestimos';</script>";
                }
                else{
                    print "<script>alert('Não foi possível cadastrar');</script>";
                    print "<script>location.href='?page=emprestimos';</script>";
                }
            break;
        case 'editar':
            $id_livro = $_POST["id_livro"];
            $id_usuario = $_POST["id_usuario"];

            $sql = "UPDATE emprestimos SET 
                            id_livro='{$id_livro}',
                            id_usuario='{$id_usuario}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res= $connect->query($sql);

                if($res==true){
                    print "<script>alert('Editado com sucesso');</script>";
                    print "<script>location.href='?page=emprestimos';</script>";
                }
                else{
                    print "<script>alert('Não foi possível editar');</script>";
                    print "<script>location.href='?page=emprestimos';</script>";
                }
            
            break;

        case 'excluir':
            
            $sql = "DELETE FROM emprestimos WHERE id=".$_REQUEST["id"];

            $res = $connect->query($sql);

            if($res==true){
                print "<script>alert('Excluído com sucesso');</script>";
                print "<script>location.href='?page=emprestimos';</script>";
            }
            else{
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=emprestimos';</script>";
            }
        break;
    }
?>