<main class="contConteudo">

    <?php include('views/pages/templates/sliderhome.php'); ?>

    <div class="centerConteudo">
        <div class="tituloPag">
            <h1>Últimos anúncios cadastrados</h1>
        </div>


        <div class="contSliderUltAnunc">
            <?php 
                if(count($listaVeiculos) == 0){
                    echo 'Não existe veículo cadastrado';
                }else{

                    foreach ($listaVeiculos as $key => $value) {
                        if($key == 5)
                            break;
            ?>
                <div>
                    <div class="itemAnuncio">
                        <span class="material-symbols-outlined antItem">navigate_before</span>
                        <span class="material-symbols-outlined proxItem">navigate_next</span>
                        <ul class="indicadores"></ul>
                        <a href="<?= ROOT_PATH.'anuncio?id='.$value['id'] ?>" target="_blank">
                            <div class="sliderItem">
                                <div class="slideItem"><img class="imgItem" src="views/imagens/carro.jpg" alt="veículo"></div>

                                <div class="slideItem"><img class="imgItem" src="views/imagens/carro2.jpg" alt="veículo"></div>
                                
                                <div class="slideItem"><img class="imgItem" src="views/imagens/carro3.jpg" alt="veículo"></div>
                            </div>
                            <div class="detalhesItem">
                                <h2 class="tituloItem"><?= $value['marca-modelo'] ?></h2>
                                <h3 class="subtituloItem"><?= $value['desc-modelo'] ?></h3>
                                <div class="anoKmItem">
                                    <h2 class="anoItem"><?= $value['ano'] ?></h2>
                                    <h2 class="kmItem"><?= $value['km'] ?> km</h2>
                                </div>
                                <h2 class="valorItem">R$ <?= $value['valor'] ?>,00</h2>
                            </div>
                        </a>
                    </div>
                </div>
            <?php 
                    }
                }
            ?>
        </div>

        <div class="guiaSliderUltAnunc">
            
        </div>



        <div class="tituloPag">
            <h1>Anúncios em destaque</h1>
        </div>
        <div id="verTodos"><a href="<?= ROOT_PATH ?>estoque">Ver todos</a></div>
        <div class="contAnuncios">
            <?php 
                if(count($listaVeiculos) == 0){
                    echo 'Não existe veículo cadastrado';
                }else{

                    foreach ($listaVeicDest as $key => $value) {
            ?>
                <div class="itemAnuncio">
                    <span class="material-symbols-outlined antItem">navigate_before</span>
                    <span class="material-symbols-outlined proxItem">navigate_next</span>
                    <ul class="indicadores"></ul>
                    <a href="<?= ROOT_PATH.'anuncio?id='.$value['id'] ?>" target="_blank">
                        <div class="sliderItem">
                            <div class="slideItem"><img class="imgItem" src="views/imagens/carro.jpg" alt="veículo"></div>

                            <div class="slideItem"><img class="imgItem" src="views/imagens/carro2.jpg" alt="veículo"></div>
                            
                            <div class="slideItem"><img class="imgItem" src="views/imagens/carro3.jpg" alt="veículo"></div>
                        </div>
                        <div class="detalhesItem">
                                <h2 class="tituloItem"><?= $value['marca-modelo'] ?></h2>
                                <h3 class="subtituloItem"><?= $value['desc-modelo'] ?></h3>
                                <div class="anoKmItem">
                                    <h2 class="anoItem"><?= $value['ano'] ?></h2>
                                    <h2 class="kmItem"><?= $value['km'] ?> km</h2>
                                </div>
                                <h2 class="valorItem">R$ <?= $value['valor'] ?>,00</h2>
                        </div>
                    </a>
                </div>
            <?php 
                    }
                }
            ?>
        </div>
    </div>
</main>