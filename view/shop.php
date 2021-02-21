<?php include_once("header.php"); ?>
<section>
    <div class="container" id="destaque-produtos-container">
        <div id="destaque-produtos" class="owl-carousel owl-theme">

            <div class="row">
                <div class="col-sm-6 col-imagem">
                    <img src="img/produtos/moto-x.png" alt="">
                </div>
                <div class="col-sm-6 col-descricao">
                    <h2>Smartphone Motorola Moto X Play Dual Chip Desbloqueado Android 5.1</h2>
                    <div class="box-valor">
                        <div class="text-noboleto text-arial-cinza">no boleto</div>
                        <div class="text-por text-arial-cinza">por</div>
                        <div class="text-reais text-roxo">R$</div>
                        <div class="text-valor text-roxo">1.259</div>
                        <div class="text-valor-centavos text-roxo">,10</div>
                        <div class="text-parcelas text-arial-cinza">ou em até 8x de R$178,88</div>
                        <div class="text-total text-arial-cinza">total à prazo R$ 1.399,00</div>
                    </div>
                    <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i>comprar agora</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-imagem">
                    <img src="img/produtos/moto-x.png" alt="">
                </div>
                <div class="col-sm-6 col-descricao">
                    <h2>Smartphone Motorola Moto X Play Dual Chip Desbloqueado Android 5.1</h2>
                    <div class="box-valor">
                        <div class="text-noboleto text-arial-cinza">no boleto</div>
                        <div class="text-por text-arial-cinza">por</div>
                        <div class="text-reais text-roxo">R$</div>
                        <div class="text-valor text-roxo">1.259</div>
                        <div class="text-valor-centavos text-roxo">,10</div>
                        <div class="text-parcelas text-arial-cinza">ou em até 8x de R$178,88</div>
                        <div class="text-total text-arial-cinza">total à prazo R$ 1.399,00</div>
                    </div>
                    <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i>comprar agora</a>
                </div>
            </div>
        </div>
        <button id="btn-destaque-prev" type="button"><i class="fas fa-angle-left"></i></button>
        <button id="btn-destaque-next" type="button"><i class="fas fa-angle-right"></i></button>
    </div>

    <div id="promocoes" class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="box-promocao box-1">
                    <p>escolha por desconto</p>
                </div>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">40</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">60</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">80</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">85</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mais-buscados" class="container">
        <div class="row text-center">
            <h2>os mais buscados</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="box-produto-info">
                    <a href="#">
                        <img src="img/produtos/panelas.png" alt="Panelas" class="produto-img" />
                        <h3>Conjunto de Panelas Tramontina Versalhes Alumínio Antiaderente</h3>
                        <div class="estrelas"></div>
                        <div class="text-qtd-reviews text-arial-cinza">(300)</div>
                        <div class="text-valor text-roxo">R$ 109,90</div>
                        <div class="text-parcelado text-arial-cinza">10x de R$10,99 sem juros</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once("footer.php"); ?>

<script>
    $("#destaque-produtos").owlCarousel({
        autoplay: 5000,
        items: 1,
        singleItem: true
    });

    var owl = $("#destaque-produtos");

    owl.owlCarousel();

    $('#btn-destaque-prev').on("click", function() {

        owl.trigger('prev.owl.carousel');
    });

    $('#btn-destaque-next').on("click", function() {
        owl.trigger('next.owl.carousel');
    });
</script>