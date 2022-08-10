<h1>Novo Empréstimo</h1>
<form action="?page=salvar-emprestimo" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>ID do Usuário</label>
        <input type="num" name="id_usuario" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label>ID do Livro</label>
        <input type="num" name="id_livro" class="form-control" required="">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success" action="?page=salvar-emprestimo" method="POST">Enviar</button>
        <a type="submit" class="btn btn-danger" href="?page=emprestimos">Voltar</a>
    </div>
</form>