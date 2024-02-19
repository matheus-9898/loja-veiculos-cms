<div id="contOutros">
                <h2>Informações</h2>
                <form action="<?= ROOT_PATH_PAINEL ?>" method="post" enctype="multipart/form-data">
                    <div class="contNumZap">
                        <label for="numZap">Whatsapp:</label>
                        <input type="text" id="numZap" name="numZap" value="<?= $getInformacoes['whatsapp'] ?>">
                    </div>
                    <div class="contTelCont">
                        <label for="telCont">Telefone de contato:</label>
                        <input type="text" id="telCont" name="telCont" value="<?= $getInformacoes['tel_cont'] ?>">
                    </div>
                    <div class="contEmail">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="<?= $getInformacoes['email'] ?>">
                    </div>
                    <div class="contEnd">
                        <label for="endereco">Endereço:</label>
                        <input type="text" id="endereco" name="endereco" value="<?= $getInformacoes['endereco'] ?>">
                    </div>
                    <div class="contCidade">
                        <label for="cidade">Cidade - Estado:</label>
                        <input type="text" id="cidade" name="cidade" value="<?= $getInformacoes['cidade'] ?>">
                    </div>
                    <div class="contAtend2a6a">
                        <label for="atend2a6a">Atendimento(2ª a 6ª):</label>
                        <input type="text" id="atend2a6a" name="atend2a6a" value="<?= $getInformacoes['atendimento_2a6a'] ?>">
                    </div>
                    <div class="contAtendSab">
                        <label for="atendSab">Atendimento(sábado):</label>
                        <input type="text" id="atendSab" name="atendSab" value="<?= $getInformacoes['atendimento_sab'] ?>">
                    </div>
                    <div class="contLinkInsta">
                        <label for="linkInsta">Instagram:</label>
                        <input type="text" id="linkInsta" name="linkInsta" value="<?= $getInformacoes['instagram'] ?>">
                    </div>
                    <div class="contLinkFace">
                        <label for="linkFace">Facebook:</label>
                        <input type="text" id="linkFace" name="linkFace" value="<?= $getInformacoes['facebook'] ?>">
                    </div>
                    <div class="contLinkTiktok">
                        <label for="linkTiktok">Tiktok:</label>
                        <input type="text" id="linkTiktok" name="linkTiktok" value="<?= $getInformacoes['tiktok'] ?>">
                    </div>
                    <div class="contSobre">
                        <label for="sobre">Sobre:</label>
                        <textarea id="sobre" cols="30" rows="3" name="sobre"><?= $getInformacoes['sobre'] ?></textarea>
                    </div>
                    <div class="contSobreImg">
                        <label for="sobreImg">Imagem(sobre):</label>
                        <input type="file" id="sobreImg" name="sobreImg">
                        <input style="display: none;" type="text" name="imgNameBD" value="<?= $getInformacoes['imagem_sobre'] ?>">
                    </div>
                    <div class="contSubmit">
                        <input type="submit" value="Salvar" name="formInfo">
                    </div>
                </form>
            </div>