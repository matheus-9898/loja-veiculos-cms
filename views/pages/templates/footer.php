<footer id="contRodape">
        <div id="centerRodape">
            <div id="contDadosRodape">
                <div id="end">
                    <h2><?= $getInformacoes['cidade'] ?></h2>
                    <p class="txtLighter"><?= $getInformacoes['endereco'] ?></p>
                </div>
                <div id="atendimento">
                    <h2>Atendimento:</h2>
                    <p class="txtLighter">Segunda à sexta: <?= $getInformacoes['atendimento_2a6a'] ?></p>
                    <p class="txtLighter">Sábado: <?= $getInformacoes['atendimento_sab'] ?></p>
                </div>
                <div id="tels">
                    <h2><?= $getInformacoes['whatsapp'] ?></h2>
                    <h2><?= $getInformacoes['tel_cont'] ?></h2>
                </div>
<!--                 <div id="autobig">
                    <h2 class="txtLighter">Estamos no:</h2>
                    <a href="https://www.autobig.com.br/" target="_blanck"><img src="views/imagens/autobig.png" alt="autobig"></a>
                </div> -->
            </div>
            <hr>
            <div id="copyRodape">
                <span><strong>Desenvolvido por Matheus Machado</strong></span>
            </div>
        </div>
    </footer>
    <script src="views/js/jquery.js"></script>
    <script src="views/js/slick.js"></script>
    <script src="views/js/jssocials.js"></script>
    <script src="views/js/script.js"></script>
</body>
</html>