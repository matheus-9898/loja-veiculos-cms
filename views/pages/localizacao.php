<main class="contConteudo">
    <div class="centerConteudo">
        <div class="tituloPag">
            <h1>Localização</h1>
        </div>
        <div class="contLocalizacao">
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3528.703223084591!2d-46.88465772475282!3d-23.200205848423295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf26c71485a5e5%3A0xe4835f3403ccf6fb!2sAv.%20Dr.Odil%20Campos%20de%20S%C3%A1es%2C%20492%20-%20Jardim%20Sao%20Bento%2C%20Jundia%C3%AD%20-%20SP%2C%2013207-145!5e1!3m2!1spt-BR!2sbr!4v1697228165287!5m2!1spt-BR!2sbr" width="90%" style="margin: 0 auto; aspect-ratio: 1.33; box-shadow: 1px 1px 8px #888888a8; border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</main>