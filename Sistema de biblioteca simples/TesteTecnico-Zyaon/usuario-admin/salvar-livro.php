<?php
    switch ($_REQUEST["acao"]) {
        case 'novo-livro':
            $categoria = $_POST["categoria"];
            $titulo = $_POST["titulo"];
            $autor = $_POST["autor"];
            $editora = $_POST["editora"];
            $ano_lancamento = $_POST["ano_lancamento"];

            $sql = "INSERT INTO livros (
                categoria, titulo, autor, editora, ano_lancamento) 
                VALUES (
                '{$categoria}', '{$titulo}', '{$autor}', '{$editora}', '{$ano_lancamento}')"; 

                $res= $connect->query($sql);

                if($res==true){
                    print "<script>alert('Cadastrado com sucesso');</script>";
                    print "<script>location.href='?page=livros';</script>";
                }
                else{
                    print "<script>alert('Não foi possível cadastrar');</script>";
                    print "<script>location.href='?page=livros';</script>";
                }
            break;
        case 'editar':
            $categoria = $_POST["categoria"];
            $titulo = $_POST["titulo"];
            $autor = $_POST["autor"];
            $editora = $_POST["editora"];
            $ano_lancamento = $_POST["ano_lancamento"];


            $sql = "UPDATE livros SET 
                            categoria='{$categoria}',
                            titulo='{$titulo}',
                            autor='{$autor}',
                            editora='{$editora}',
                            ano_lancamento='{$ano_lancamento}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res= $connect->query($sql);

                if($res==true){
                    print "<script>alert('Editado com sucesso');</script>";
                    print "<script>location.href='?page=livros';</script>";
                }
                else{
                    print "<script>alert('Não foi possível editar');</script>";
                    print "<script>location.href='?page=livros';</script>";
                }
            
            break;

        case 'excluir':
            
            $sql = "DELETE FROM livros WHERE id=".$_REQUEST["id"];

            $res = $connect->query($sql);

            if($res==true){
                print "<script>alert('Excluído com sucesso');</script>";
                print "<script>location.href='?page=livros';</script>";
            }
            else{
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=livros';</script>";
            }
        break;
    }
?>