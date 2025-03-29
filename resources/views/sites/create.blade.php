<!DOCTYPE html>
<html>
<head><title>Novo Site</title></head>
<body>
<h1>Novo Site</h1>
<form method="POST" action="{{ route('sites.store') }}">
    @csrf
    <input type="text" name="nome" placeholder="Nome do site"><br>
    <input type="text" name="url" placeholder="URL"><br>
    <input type="text" name="login_field" placeholder="Campo de login"><br>
    <input type="text" name="password_field" placeholder="Campo de senha"><br>
    <button type="submit">Salvar</button>
</form>
</body>
</html>
