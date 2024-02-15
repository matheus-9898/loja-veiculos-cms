<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Painel</title>
        <link rel="stylesheet" href="views/css/painel.css">
    </head>
<body>
    <header>
        <nav class="centerHeader">
            <div>
                <a href="<?= ROOT_PATH_PAINEL ?>veiculos"
                class="<?= $fileName == 'veiculos' ? 'btSelected' : '' ?>">
                Veículos</a>
                
                <a href="<?= ROOT_PATH_PAINEL ?>informacoes"
                class="<?= $fileName == 'informacoes' ? 'btSelected' : '' ?>">
                Informações</a>
            </div>
            <a href="<?= ROOT_PATH_PAINEL ?>?logout">Sair</a>
        </nav>
    </header>
    <main>
        <div class="centerMain">