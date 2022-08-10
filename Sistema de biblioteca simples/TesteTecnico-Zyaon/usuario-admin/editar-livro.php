<h1>Editar Livro</h1>
<?php
    $sql = "SELECT * FROM livros WHERE id=".$_REQUEST["id"];
    $res = $connect->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-livro" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Categoria</label>
        <input type="text" name="categoria" value="<?php print $row->categoria; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Título</label>
        <input type="text" name="titulo" value="<?php print $row->titulo; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Autor</label>
        <input type="text" name="autor" value="<?php print $row->autor; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Editora</label>
        <input type="text" name="editora" value="<?php print $row->editora; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Ano</label>
        <input type="year" name="ano_lancamento" value="<?php print $row->ano_lancamento; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a type="submit" class="btn btn-danger" href="?page=livros">Voltar</a>
    </div>
</form>