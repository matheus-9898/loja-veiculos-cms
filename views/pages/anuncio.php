<main class="contConteudo"> 

<?php include('views/pages/templates/sliderhome.php'); ?>    

    <div class="centerConteudo">
        <div class="contPagAnunc">

            <div class="fundoDadosCliente">
                    <div class="formDadosCliente">
                        <p>Para acessar, nos fale sobre você.</p>
                        <p class="txtAmarelo">É rápido.</p>
                        <span>Para agilizar o contato, seus dados serão compartilhados com o vendedor.</span>
                        <form>
                            <input type="text" name="nome" placeholder="Nome" required>

                            <input type="email" name="email" placeholder="E-mail" required>

                            <input type="tel" name="telefone" placeholder="Telefone" required>

                            <input type="submit" value="Próximo">
                        </form>
                    </div>

                    <div class="contVisualTel">
                        <span>Seus dados foram enviados ao vendedo.</span>
                        <br>
                        <span>Para agilizar o atendimento, entre em contato pelo número abaixo.</span>
                        <p><i class="fa-solid fa-phone fa-beat" style="color: #424446;"></i>  (11) 4087-4131</p>
                    </div>

                    <div class="formEnvioProposta">
                        <p>Envie sua proposta.</p>
                        <form>
                            <textarea name="mensagemProposta" placeholder="Mensagem" required><?= 'Olá vi o anúncio do veículo (...) e gostaria de mais informações. https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?></textarea>

                            <input type="submit" value="Enviar">
                        </form>
                    </div>
            </div>
            
            <div id="myModal" class="modal">
                <span class="fechar material-symbols-outlined" id="fechar">close</span>
                <img class="modal-content" id="imgModal">
                <span class="anterior material-symbols-outlined" id="anterior">navigate_before</span>
                <span class="proximo material-symbols-outlined" id="proximo">navigate_next</span>
            </div>

            <div class="divEsq">
                <?php 
                    $fotos = explode('/',$dadosAnuncio[0]['fotos']);
                ?>
                <img src="views/imagens/anuncios/<?= $fotos[0] ?>" alt="Imagem principal" id="imagemPrincipal" class="miniatura">
                <div class="contMiniaturas">
                    <?php 
                        for($i=1; $i < count($fotos); $i++){
                            if($fotos[$i] != null){
                    ?>
                        <img src="views/imagens/anuncios/<?= $fotos[$i] ?>" alt="Miniatura" class="miniatura">
                    <?php 
                            }
                        }
                    ?>
                </div>
                <h2>Contatos:</h2>
                <div class="contContatosAnuncio">
                    <a href="" class="email"><i class="fa-regular fa-envelope" style="color: #ffffff;"></i>ENVIAR PROPOSTA</a>
                    <a href="" target="_blank" class="whatsapp"><i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>CHAMAR NO ZAP</a>
                    <a href="" class="telefone"><i class="fa-solid fa-phone" style="color: #ffffff;"></i>VER TELEFONE</a>
                    <a href="<?= ROOT_PATH ?>estoque" class="estoque" target="_blank"><i class="fa-solid fa-car" style="color: #ffffff;"></i>VER ESTOQUE</a>
                </div>
                <h2>Compartilhar:</h2>
                <div class="contSociais"></div>
            </div>
            <div class="divDir">
                <h1 class="tituloPagAnunc"><?= $dadosAnuncio[0]['marca-modelo'] ?></h1>
                <h2 class="subtituloPagAnunc"><?= $dadosAnuncio[0]['desc-modelo'] ?></h2>
                <div class="precoPagAnunc">
                    <h2>R$ <?= $dadosAnuncio[0]['valor'] ?>,00</h2>
                </div>
                <div class="desc1PagAnunc">
                    <ul>
                        <li><strong>Ano: </strong><?= $dadosAnuncio[0]['ano'] ?></li>
                        <li><strong>Cor: </strong><?= $dadosAnuncio[0]['cor'] ?></li>
                        <li><strong>Combustível: </strong><?= $dadosAnuncio[0]['combustivel'] ?></li>
                        <li><strong>Único dono: </strong><?= $dadosAnuncio[0]['unico-dono'] ?></li>
                        <li><strong>Km: </strong><?= $dadosAnuncio[0]['km'] ?></li>
                        <li><strong>Portas: </strong><?= $dadosAnuncio[0]['quant-portas'] ?></li>
                        <li><strong>Final da Placa: </strong>...<?= $dadosAnuncio[0]['final-placa'] ?></li>
                    </ul>
                </div>
                <hr>
                <div class="opcionaisPagAnunc">
                    <h2>Opcionais</h2>
                    <ul>
                        <?php 
                            $opcionais = explode('/',$dadosAnuncio[0]['opcionais']);
                            foreach ($opcionais as $key => $value) {
                        ?>
                            <li><span class="material-symbols-outlined">task_alt</span> <?= $value ?></li>
                        <?php 
                            }
                        ?>
                    </ul>
                </div>
                <hr>
                <div class="desc2PagAnunc">
                    <h2>Descrição</h2>
                    <p><?= $dadosAnuncio[0]['descricao'] ?></p>
                </div>
            </div>
        </div>
    </div>
</main>