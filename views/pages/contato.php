<main class="contConteudo">  
    <div class="centerConteudo">
        <div class="tituloPag">
            <h1>Contato</h1>
        </div>
        <div class="contContato">
            <div class="formContato">
                <div class="tituloFormContato">
                    <h2>Envie um e-mail</h2>
                </div>
                <form>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="Seu Nome" required>

                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="Seu E-mail" required>

                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" placeholder="Seu Telefone" required>

                    <label for="mensagem">Mensagem</label>
                    <textarea name="mensagem" placeholder="Mensagem" required></textarea>

                    <input type="submit" value="Enviar" name="acao">
                </form>
            </div>
            <div class="dadosContato">
                <div class="tituloDadosContato">
                    <h2>Telefone</h2>
                </div>
                <span><i class="fa-solid fa-phone" style="color: #666;"></i> <?= $getInformacoes['tel_cont'] ?>
                </span>
                <span><i class="fa-brands fa-whatsapp" style="color: #666;"></i> <?= $getInformacoes['whatsapp'] ?></span>
                <div class="tituloDadosContato">
                    <h2>E-mail</h2>
                </div>
                <span><i class="fa-regular fa-envelope" style="color: #666;"></i> <?= $getInformacoes['email'] ?></span>
                <div class="tituloDadosContato">
                    <h2>Endereço</h2>
                </div>
                <span><span class="material-symbols-outlined">location_on</span><?= $getInformacoes['endereco'].' - '.$getInformacoes['cidade'] ?></span>
            </div>
        </div>
    </div>
</main>