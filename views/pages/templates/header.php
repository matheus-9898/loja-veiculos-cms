<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interauto Multimarcas</title>
    <link rel="shortcut icon" href="views/imagens/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="views/css/slick.css">
    <link rel="stylesheet" href="views/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="views/css/jssocials.css">
    <link rel="stylesheet" href="views/css/jssocials-theme-flat.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="views/css/style.css">
</head>
<body>
    <header>
        <div id="contMenuSuspenso">
            <div id="centerMenuSusp">
                <div id="contContatoFechar">
                    <span class="material-symbols-outlined" id="closeMenu">close</span>
                </div>
                <div id="contRedesMS">
                    <a href="<?= $getInformacoes['instagram'] ?>" target="_blank"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
                    <a href="<?= $getInformacoes['facebook'] ?>" target="_blank"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a>
                    <a href="<?= $getInformacoes['tiktok'] ?>" target="_blank"><i class="fa-brands fa-tiktok" style="color: #ffffff;"></i></a>
                </div>
                <nav id="contLista">
                    <ul>
                        <li><a href="<?= ROOT_PATH ?>">Página Inicial</a></li>
                        <li><a href="<?= ROOT_PATH ?>sobre">A Empresa</a></li>
                        <li><a href="<?= ROOT_PATH ?>estoque">Estoque</a></li>
                        <li><a href="<?= ROOT_PATH ?>localizacao">Localização</a></li>
                        <li><a href="<?= ROOT_PATH ?>contato">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="contCabSup">
            <div id="centerCabSup">
                <a href="<?= ROOT_PATH ?>"><img src="views/imagens/logo.jpg" alt="Logo"></a>
                <div id="contRedesSociais">
                    <a href="<?= $getInformacoes['instagram'] ?>" target="_blank"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
                    <a href="<?= $getInformacoes['facebook'] ?>" target="_blank"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a>
                    <a href="<?= $getInformacoes['tiktok'] ?>" target="_blank"><i class="fa-brands fa-tiktok" style="color: #ffffff;"></i></a>
                </div>
                <span class="material-symbols-outlined">menu</span>
            </div>
        </div>
        <div id="contCabInf">
            <div id="centerCabInf">
                <nav>
                    <ul>
                        <li><a href="<?= ROOT_PATH ?>">Página Inicial</a></li>
                        <li><a href="<?= ROOT_PATH ?>sobre">A Empresa</a></li>
                        <li><a href="<?= ROOT_PATH ?>estoque">Estoque</a></li>
                        <li><a href="<?= ROOT_PATH ?>localizacao">Localização</a></li>
                        <li><a href="<?= ROOT_PATH ?>contato">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div id="contMenuSecundario">
            <div id="centerMenuSecundario">
                <a href="<?= ROOT_PATH ?>"><img src="views/imagens/logo.jpg" alt="Logo"></a>
                <nav>
                    <ul>
                        <li><a href="<?= ROOT_PATH ?>">Página Inicial</a></li>
                        <li><a href="<?= ROOT_PATH ?>sobre">A Empresa</a></li>
                        <li><a href="<?= ROOT_PATH ?>estoque">Estoque</a></li>
                        <li><a href="<?= ROOT_PATH ?>localizacao">Localização</a></li>
                        <li><a href="<?= ROOT_PATH ?>contato">Contato</a></li>
                    </ul>
                </nav>
                <div id="contRSociaisMS">
                    <a href="<?= $getInformacoes['instagram'] ?>" target="_blank"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
                    <a href="<?= $getInformacoes['facebook'] ?>" target="_blank"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a>
                    <a href="<?= $getInformacoes['tiktok'] ?>" target="_blank"><i class="fa-brands fa-tiktok" style="color: #ffffff;"></i></a>
                </div>
                <span class="material-symbols-outlined">menu</span>
            </div>
        </div>
    </header>