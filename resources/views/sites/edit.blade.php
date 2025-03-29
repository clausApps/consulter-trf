<!DOCTYPE html>
<html>
<head><title>Editar Site</title></head>
<body>
<h1>Editar Site</h1>
<form method="POST" action="{{ route('sites.update', $site->_id) }}">
    @csrf @method('PUT')
    <input type="text" name="nome" value="{{ $site->nome }}"><br>
    <input type="text" name="url" value="{{ $site->url }}"><br>
    <input type="text" name="login_field" value="{{ $site->login_field }}"><br>
    <input type="text" name="password_field" value="{{ $site->password_field }}"><br>
    <button type="submit">Atualizar</button>
</form>
</body>
</html>
