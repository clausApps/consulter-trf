<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<form method="POST" action="/login">
    <?php echo csrf_field(); ?>
    <input type="email" name="email" placeholder="E-mail">
    <input type="password" name="password" placeholder="Senha">
    <button type="submit">Entrar</button>
</form>
</body>
</html>
