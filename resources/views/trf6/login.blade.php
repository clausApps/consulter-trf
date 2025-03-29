<!DOCTYPE html>
<html>
<head><title>Login TRF6</title></head>
<body>
<h1>Login no TRF6</h1>
<form method="POST" action="{{ route('trf6.autenticar') }}">
    @csrf
    <label>Usuário:</label><br>
    <input type="text" name="usuario"><br>
    <label>Senha:</label><br>
    <input type="password" name="senha"><br>
    <button type="submit">Entrar</button>
</form>
</body>
</html>
