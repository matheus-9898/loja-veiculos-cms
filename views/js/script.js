$(function () {

    /* #region  MODAL ENVIAR PROPOSTA */
    if (localStorage.getItem('viewTel') == null) {
        localStorage.setItem('viewTel', 'false');
    }
    var opcaoFormDadosCliente;

    $('.contContatosAnuncio > .email').click(function () {
        opcaoFormDadosCliente = 'proposta';
        $('.fundoDadosCliente').fadeIn().css('display', 'flex');

        if (localStorage.getItem('viewTel') == 'false') {
            $('.formDadosCliente').fadeIn();

        } else {
            $('.formEnvioProposta').fadeIn();
        }

        return false;
    })

    $('.formDadosCliente form').submit(function () {
        if (opcaoFormDadosCliente == 'proposta') {

            localStorage.setItem('viewTel', 'true');
            $('.formDadosCliente').fadeOut();
            setTimeout(function () {
                $('.formEnvioProposta').fadeIn();
            }, 400);
            return false;
        }

    })

    $('.formEnvioProposta form').submit(function () {
        if (opcaoFormDadosCliente == 'proposta') {

            $('.formEnvioProposta').fadeOut();
            $('.fundoDadosCliente').fadeOut();

            return false;
        }

    })
    /* #endregion */

    /* #region  MODAL CHAMAR NO ZAP */
    function chamarZap() {

        $('.contContatosAnuncio > .whatsapp').click(function () {
            opcaoFormDadosCliente = 'whatsapp';
            $('.fundoDadosCliente').fadeIn().css('display', 'flex');

            if (localStorage.getItem('viewTel') == 'false') {
                $('.formDadosCliente').fadeIn();

            } else {
                window.open('https://api.whatsapp.com/send/?phone=5511947095020&text&type=phone_number&app_absent=0', "_blank");
                $('.fundoDadosCliente').fadeOut();
            }

            return false;
        })

        $('.formDadosCliente form').submit(function () {

            if (opcaoFormDadosCliente == 'whatsapp') {

                localStorage.setItem('viewTel', 'true');
                $('.formDadosCliente').fadeOut();
                $('.fundoDadosCliente').fadeOut();
                window.open('https://api.whatsapp.com/send/?phone=5511947095020&text&type=phone_number&app_absent=0', "_blank");

                return false;
            }

        })
    }
    chamarZap();
    /* #endregion */

    /* #region  MENU SECUNDÁRIO */
    function menuSecundario() {

        var limitedMenu;

        function verificaLarguraTela() {
            if ($(window).width() < 769) {
                limitedMenu = 50;
            } else {
                limitedMenu = 120;
            }
        }
        verificaLarguraTela();

        $(window).resize(function () {
            verificaLarguraTela();
        })

        $(window).scroll(function () {
            if ($(this).scrollTop() > limitedMenu) {
                $("#contMenuSecundario").css("top", "0");
            } else {
                $("#contMenuSecundario").css("top", "-90px");
            }
        });

        $('#contMenuSecundario .material-symbols-outlined').click(function () {
            if ($('#contMenuSuspenso').css('display') == 'none') {

                $('#contMenuSuspenso').css('left', '100%');
                $('#contMenuSuspenso').css('display', 'block');

                $('#contMenuSuspenso').animate({
                    left: '0'
                }, 200)

            }
        })

        function fecharMenuMobile() {
            $('#contMenuSuspenso').animate({
                left: '100%'
            }, 200)
            setTimeout(function () {
                $('#contMenuSuspenso').css('display', 'none');
            }, 200)
        }

        $('#contMenuSecundario #closeMenu').click(function () {
            if ($('#contMenuSuspenso').css('display') == 'block') {
                fecharMenuMobile();
            }
        })

        $('#contMenuSecundario').click(function (e) {
            if (e.target === this && $('#contMenuSuspenso').css('display') == 'block') {
                fecharMenuMobile();
            }
        })

        $(window).resize(function () {

            if ($(window).width() >= 769) {
                $('#contMenuSuspenso').css('display', 'none');
            }
        })

    }
    menuSecundario();
    /* #endregion */

    /* #region  MODAL VER TELEFONE */
    function verTelefone() {

        $('.contContatosAnuncio > .telefone').click(function () {
            opcaoFormDadosCliente = 'telefone';
            $('.fundoDadosCliente').fadeIn().css('display', 'flex');

            if (localStorage.getItem('viewTel') == 'false') {
                $('.formDadosCliente').fadeIn();

            } else {
                $('.contVisualTel').fadeIn();
            }

            return false;
        })

        $('.formDadosCliente form').submit(function () {
            if (opcaoFormDadosCliente == 'telefone') {

                localStorage.setItem('viewTel', 'true');
                $('.formDadosCliente').fadeOut();
                setTimeout(function () {
                    $('.contVisualTel').fadeIn();
                }, 400);
                return false;
            }

        })

        $('.contPagAnunc').on('click', '.fundoDadosCliente', function (event) {
            if (event.target === this) {
                if ($('.formDadosCliente').css('display') != 'none') {
                    $('.formDadosCliente').fadeOut();
                }
                if ($('.contVisualTel').css('display') != 'none') {
                    $('.contVisualTel').fadeOut();
                }
                if ($('.formEnvioProposta').css('display') != 'none') {
                    $('.formEnvioProposta').fadeOut();
                }
                $('.fundoDadosCliente').fadeOut();
            }
        })
    }
    verTelefone();
    /* #endregion */

    /* #region  SLIDER ÚLTIMOS ANÚNCIOS */
    $('.contSliderUltAnunc').slick({
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        variableWidth: true,
        appendDots: $('.guiaSliderUltAnunc'),
        appendArrows: $('.guiaSliderUltAnunc')
    });

    $('.slick-dots li button').html('');
    $('.slick-prev').html('<span class="material-symbols-outlined">navigate_before</span>');
    $('.slick-next').html('<span class="material-symbols-outlined">navigate_next</span>');
    /* #endregion */

    /* #region  MODAL ANÚNCIO */
    var imagens = [];
    var indexAtual = 0;

    function exibirImagem() {
        $("#imgModal").attr("src", imagens[indexAtual]);
    }
    $(".miniatura").each(function () {
        imagens.push($(this).attr("src"));
    });

    $(".miniatura, #imagemPrincipal").click(function () {
        indexAtual = $(".miniatura, #imagemPrincipal").index(this);
        exibirImagem();
        $("#myModal").fadeIn().css('display', 'flex');
    });

    $("#fechar").click(function () {
        $("#myModal").fadeOut();
    });

    $("#myModal").click(function (e) {
        if (e.target === this) {

            $("#myModal").fadeOut();
        }
    });

    $(".modal-content").click(function (event) {
        event.stopPropagation();
    });

    $("#proximo").click(function () {
        indexAtual = (indexAtual + 1) % imagens.length;
        exibirImagem();
    });

    $("#anterior").click(function () {
        indexAtual = (indexAtual - 1 + imagens.length) % imagens.length;
        exibirImagem();
    });
    /* #endregion */

    /* #region  MENU SUSPENSO */
    $('#contCabSup .material-symbols-outlined').click(function () {
        if ($('#contMenuSuspenso').css('display') == 'none') {

            $('#contMenuSuspenso').css('left', '100%');
            $('#contMenuSuspenso').css('display', 'block');

            $('#contMenuSuspenso').animate({
                left: '0'
            }, 200)

        }
    })

    function fecharMenuMobile() {
        $('#contMenuSuspenso').animate({
            left: '100%'
        }, 200)
        setTimeout(function () {
            $('#contMenuSuspenso').css('display', 'none');
        }, 200)
    }

    $('#contMenuSuspenso #closeMenu').click(function () {
        if ($('#contMenuSuspenso').css('display') == 'block') {
            fecharMenuMobile();
        }
    })

    $('#contMenuSuspenso').click(function (e) {
        if (e.target === this && $('#contMenuSuspenso').css('display') == 'block') {
            fecharMenuMobile();
        }
    })

    $(window).resize(function () {

        if ($(window).width() >= 769) {
            $('#contMenuSuspenso').css('display', 'none');
        }
    })

    /* #endregion */

    /* #region  SLIDER ANÚNCIOS */
    $(".itemAnuncio").each(function () {
        const $sliderItem = $(this).find(".sliderItem");
        const $slideItem = $sliderItem.find(".slideItem");
        const $indicadores = $(this).find(".indicadores");
        const $antItem = $(this).find(".antItem");
        const $proxItem = $(this).find(".proxItem");
        let cont = 0;

        function mostrarSlide(i) {
            $slideItem.hide();
            $slideItem.eq(i).show();
            cont = i;
            passarIndicadores();
        }

        function passarIndicadores() {
            $indicadores.empty();
            $slideItem.each(function (i) {
                const indicador = $("<li></li>");
                if (i === cont) {
                    indicador.addClass("ativo");
                }
                $indicadores.append(indicador);
            });
        }

        $antItem.on("click", function () {
            mostrarSlide(cont - 1 < 0 ? $slideItem.length - 1 : cont - 1);
        });

        $proxItem.on("click", function () {
            mostrarSlide((cont + 1) % $slideItem.length);
        });

        mostrarSlide(cont);
    });
    /* #endregion */

    /* #region  SLIDER HOME */

    $('.sliderHome').slick({
        infinite: true,
        adaptiveHeight: true,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        appendDots: $('.sliderHome'),
        appendArrows: $('.sliderHome')
    })

    $('.sliderHome > .slick-dots li button').html('');
    $('.sliderHome > .slick-prev').html('<span class="material-symbols-outlined">navigate_before</span>');
    $('.sliderHome > .slick-next').html('<span class="material-symbols-outlined">navigate_next</span>');

    /* #endregion */

    /* #region  COMPARTILHAMENTO DO ANÚNCIO */
    $(".contSociais").jsSocials({
        showLabel: false,
        showCount: false,
        shares: ["facebook", "whatsapp", "telegram"]
    });
    /* #endregion */
})