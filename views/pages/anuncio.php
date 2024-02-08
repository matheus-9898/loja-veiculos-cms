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
                <img src="views/imagens/carro.jpg" alt="Imagem principal" id="imagemPrincipal" class="miniatura">
                <div class="contMiniaturas">
                    <img src="views/imagens/carro2.jpg" alt="Miniatura" class="miniatura">
                    <img src="views/imagens/carro3.jpg" alt="Miniatura" class="miniatura">
                    <img src="views/imagens/carro4.jpg" alt="Miniatura" class="miniatura">
                    <img src="views/imagens/carro5.jpg" alt="Miniatura" class="miniatura">
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
                <h1 class="tituloPagAnunc">VOLKSWAGEN AMAROK</h1>
                <h2 class="subtituloPagAnunc">2.0 HIGHLINE 4X4 CD 16V TURBO INTERCOOLER DIESEL 4P MANUAL</h2>
                <div class="precoPagAnunc">
                    <h2>R$ 60.000,00</h2>
                </div>
                <div class="desc1PagAnunc">
                    <ul>
                        <li><strong>Ano:</strong> 2016/2017</li>
                        <li><strong>Cor:</strong> preto</li>
                        <li><strong>Combustível:</strong> Flex</li>
                        <li><strong>Único dono:</strong> Não</li>
                        <li><strong>Km:</strong> 76.000</li>
                        <li><strong>Portas:</strong> 2</li>
                        <li><strong>Final da Placa:</strong> ...301</li>
                    </ul>
                </div>
                <hr>
                <div class="opcionaisPagAnunc">
                    <h2>Opcionais</h2>
                    <ul>
                        <li><span class="material-symbols-outlined">task_alt</span> Airbag motorista</li>
                        <li><span class="material-symbols-outlined">task_alt</span> Airbag passageiro</li>
                        <li><span class="material-symbols-outlined">task_alt</span> Alarme</li>
                        <li><span class="material-symbols-outlined">task_alt</span> Ar-condicionado</li>
                        <li><span class="material-symbols-outlined">task_alt</span> Ar-quente</li>
                        <li><span class="material-symbols-outlined">task_alt</span> Direção hidráulica</li>
                        <li><span class="material-symbols-outlined">task_alt</span> Kit multimídia</li>
                        <li><span class="material-symbols-outlined">task_alt</span> Rodas de liga leve</li>
                        <li><span class="material-symbols-outlined">task_alt</span> Travas elétricas</li>
                        <li><span class="material-symbols-outlined">task_alt</span> Trio elétrico</li>
                        <li><span class="material-symbols-outlined">task_alt</span> Vidro elétrico</li>
                        <li><span class="material-symbols-outlined">task_alt</span> Volante com regulagem</li>
                    </ul>
                </div>
                <hr>
                <div class="desc2PagAnunc">
                    <h2>Descrição</h2>
                    <p>SAVEIRO CROSS</p>
                </div>
            </div>
        </div>
    </div>
</main>