<h1>Novo Usuário</h1>
<form action="?page=salvar-usuario" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" required="">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success" action="?page=salvar-usuario" method="POST">Enviar</button>
        <a type="submit" class="btn btn-danger" href="?page=usuarios">Voltar</a>
    </div>
</form>