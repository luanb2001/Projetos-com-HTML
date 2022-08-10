<h1>Cadastrar Livro</h1>
<form action="?page=salvar-livro" method="POST">
    <input type="hidden" name="acao" value="novo-livro">
    <div class="mb-3">
        <label>Categoria</label>
        <input type="text" name="categoria" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label>Titulo</label>
        <input type="text" name="titulo" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label>Autor</label>
        <input type="text" name="autor" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label>Editora</label>
        <input type="text" name="editora" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label>Ano de Lançamento</label>
        <input type="year" name="ano_lancamento" class="form-control" required="">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success" action="?page=salvar-livro" method="POST">Enviar</button>
        <a type="submit" class="btn btn-danger" href="?page=livros">Voltar</a>
    </div>
</form>