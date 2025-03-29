<!DOCTYPE html>
<html>
<head><title>Validação 2FA</title></head>
<body>
<h1>Digite o Código de Validação</h1>
<form method="POST" action="{{ route('trf6.validar.codigo') }}">
    @csrf
    <label>Código:</label><br>
    <input type="text" name="codigo_validacao"><br>
    <button type="submit">Validar</button>
</form>
</body>
</html>
