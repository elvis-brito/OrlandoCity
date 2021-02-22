<?php include_once("header.php"); ?>
<section>
    <div class="container">
        <div class="container text-center title-default-roxo m-5">
            <h2>carrinho de compras</h2>
            <hr>
        </div>
        <table id="cart-products" class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2">Produtos</th>
                    <th class="text-center">Quantidade</th>
                    <th class="text-center">Entrega</th>
                    <th class="text-center">Valor Unitário</th>
                    <th class="text-center">Valor Total</th>
                    <th class="text-center">&nbsp;</th>
                </tr>
            </thead>
            <tbody class="content-table">
                <tr>
                    <td class="text-center"><img src="img/produtos/iphone.jpg"></td>
                    <td class="text-center">Nome do Produto</td>
                    <td class="col-xs-2 text-center">
                        <span>
                            <button href="#" class="btn text-roxo" type="button"><i class="fas fa-chevron-down"></i></button>
                        </span>

                        <span>
                            <button href="#" class="btn text-roxo" type="button"><i class="fas fa-chevron-up"></i></button>
                        </span>
                    </td>
                    <td class="text-center col-xs-2"></td>
                    <td class="text-center">R$ 1.500,99</td>
                    <td class="text-center">R$ 1.500,99</td>
                    <td class="text-center">
                        <span>
                            <button href="#" class="btn text-roxo" type="button"><i class="fas fa-times"></i></button>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
        <div id="calculo-de-frete" class="row">
            <div class="col-sm-8">
                <div class="box-outline-grey">
                    <p style="margin:28px auto;">Simule o prazo de entrega e o frete para seu CEP abaixo:</p>
                    <div class="input-group col-xs-4">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Calcular Frete</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box-cart-totais">
                    <table class="table">
                        <tr>
                            <td>Subtotal ({{produtos.length}} item):</td>
                            <td class="text-right">R$ {{carrinho.subtotal}}</td>
                        </tr>
                        <tr>
                            <td>Frete:</td>
                            <td class="text-right">R$ {{carrinho.frete}}</td>
                        </tr>
                        <tr style="border-top:#999 1px solid;">
                            <td class="text-roxo text-bold">Total:</td>
                            <td class="text-roxo text-bold text-right">R$ {{carrinho.total}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-roxo float-right" style="margin-top:10px">comprar</button>

    </div>
    </div>



</section>
<?php include_once("footer.php"); ?>

<script>
    angular.module("shop", []).controller("cart-controller", function($scope, $http) {

        var carregarCarrinho = function() {

            $http({
                method: 'GET',
                url: 'carrinho-dados'
            }).then(function(response) {

                console.log(response);

            }, function(response) {

                console.error(response);

            });

        };

        $scope.carrinho = {
            cep: '01310-100',
            subtotal: '1.110,00',
            frete: '0,00',
            total: '1.110,00'
        };

        $scope.produtos = [{
            nome_prod_long: 'Smartphone Motorola Moto X Play Dual',
            preco: '1.500,99',
            total: '1.500,99',
            qtd: 1,
            foto_principal: 'iphone.jpg',
            prazo: '11 dias úteis',
            id_prod: 1
        }, {
            nome_prod_long: 'Smartphone Motorola Moto X Play Dual',
            preco: '1.500,99',
            total: '1.500,99',
            qtd: 1,
            foto_principal: 'iphone.jpg',
            prazo: '10 dias úteis',
            id_prod: 2
        }];

        $scope.addQtd = function(_produto) {

            $http({
                method: 'POST',
                url: 'carrinho-produto',
                data: JSON.stringify({
                    id_prod: _produto.id_prod
                })
            }).then(function(response) {

                console.log(response);

            }, function() {



            });

        };

        $scope.removeQtd = function(_produto) {



        };

    });
</script>