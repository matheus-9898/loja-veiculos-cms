<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Controle de estoque</title>
    <link rel="stylesheet" href="views/css/login.css">
</head>
<body>
    <main>
        <h1>Login | Controle de estoque</h1>
        <form action="<?= ROOT_PATH_PAINEL ?>" method="post" class="formLogin">
            <input type="text" placeholder="Usuário" name="usuario">
            <input type="password" placeholder="Senha" name="senha">
            <input type="submit" value="Login" name="login">
        </form>
        <p>Usuário: admin / Senha: admin</p>
    </main>
</body>
</html>