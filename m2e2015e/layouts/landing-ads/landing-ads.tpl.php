<header>

<div class="container">

    <a id="menu-toggle">
        <span>MENU</span>
        <div class="burger"><b></b><b></b><b></b></div>
    </a>

    <div class="m2e"><a href="<?php print $GLOBALS['base_path']; ?>">M2E Comunicação Digital</a></div>


    <div class="chamada">
    <div class="row">
        <div class="col-sm-6">

             <h1 class="title" id="page-title">Campanhas no Google e Facebook</h1>
                <p>Blogs, sites institucionais, portfólios, lojas virtuais e uma infinidade de sites com foco na praticidade e facilidade de uso.</p>
                <a class="botao dark" href="<?php print $GLOBALS['base_path']; ?>contato">Solicite Um Orçamento!</a>

        </div>
        <div class="col-sm-6"><img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/ads.png" class="img-responsive" /></div>

    </div>
    </div><!-- chamada -->


</div>

</header>
<!-- HEADER -->


<div id="principal">

    <section id="destaque">
        <div class="container">

            <div class="row">

                <div class="col-sm-6">
                    <p>O AdWords é diferente dos meios de publicidade tradicionais: não vem com listas nem tabelas de preços. Em vez disso, o modelo de preços padrão baseia-se num leilão de custo por clique (CPC). Não existe gasto mínimo. Você paga apenas o que definir como orçamento!</p>
                    <p> O Google AdWords é uma categoria de anúncios pagos do Google. Eles ficam posicionados à direita e acima dos resultados orgânicos e, em alguns casos, no final da página.</p>
                    <p>Assim, podemos criar campanhas altamente direcionadas ao público alvo com segmentações avançadas de região e o melhor, tudo muito bem direcionado pelo Google.</p>
                </div>

                <div class="col-sm-6">
                    <p>Os anúncios vão mostrar o que de melhor oferece seu site. Por isso, fazemos uma análise para entender melhor a sua arquitetura e definir as primeiras palavras chave do anúncio. Logo depois realizaremos um apanhado de keywords relevantes para o seu anúncio, maximizando as possibilidades de cliques. Para isso, usamos o Planejador de Palavras Chave do Google, que nos informa dados significativos como sinônimos, volume de busca, etc.</p>
                    <p>De forma otimizada e com base nos passos anteriores criamos os anúncios e seus grupos de palavras chave e iniciamos a campanha. É importante ressaltar a importância dessa fase, pois o índice de qualidade dos anúncios estão diretamente ligados às páginas do seu site.</p>                                    
                </div>

            </div>

        </div>

    </section>

    <section id="diferenciais">
        <div class="container">
            <div class="col-sm-6 item">

                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_coins.png" class="img-responsive" />
                    <h5>VOCÊ PODE TER POUCA VERBA E UMA CAMPANHA COM GRANDES RESULTADOS</h5>
                    <p>Pois tudo depende de como será otimizada e se o seu site deve está bem alinhado com as diretrizes do Google.</p>


            </div>

             <div class="col-sm-6 item">

                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_click.png" class="img-responsive" />
                    <h5>VOCÊ SÓ PAGA SE O CLIENTE CLICAR</h5>
                    <p>O Google trabalha com custo por clique(CPC), ou seja, o valor que você escolhe pagar sempre que um usuário clicar em seu anúncio. Selecione um custo máximo por clique de R$ 0,30, por exemplo, e o Adwords nunca cobrará mais do que R$ 0,30 por nenhum clique. </p>

            </div>

            <div class="col-sm-6 item">

                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_graph.png" class="img-responsive" />
                    <h5>CONTROLE TOTAL DE SEU INVESTIMENTO</h5>
                    <p> Você pode mudar e editar o anúncio sempre que necessário, definir o orçamento diário e até pausar uma campanha. </p>

            </div>

             <div class="col-sm-6 item">

                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_results.png" class="img-responsive" />
                    <h5>PAGUE APENAS PELOS RESULTADOS</h5>
                    <p>Você só paga quando alguém realmente clica no seu anúncio. Basta definir um orçamento com o qual se sinta confortável e ajustá-lo à medida que começar a ver resultados.</p>
            </div>




            </div>

    </section>


    <section id="contato">
         <div class="container">
                <h4>Vamos conversar sobre a sua empresa? <br/> Então entre em contato e solicite um orçamento!</h4>
                <?php
                     $block = module_invoke('webform', 'block_view', 'client-block-13');
                     print render($block['content']);
                  ?>
            </div>
    </section>






     <!--section id="diferencial-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 icon">
                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_coins.png" class="img-responsive" />
                </div>
                <div class="col-sm-10">
                    <h3>VOCÊ PODE TER POUCA VERBA E UMA CAMPANHA COM GRANDES RESULTADOS</h3>
                    <p>Pois tudo depende de como será otimizada e se o seu site deve está bem alinhado com as diretrizes do Google.</p>
                </div>
            </div>

            </div>

    </section>

     <section id="diferencial-2">
        <div class="container">

            <div class="row">
                <div class="col-sm-2 icon">
                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_click.png" class="img-responsive" />
                </div>
                <div class="col-sm-10">
                    <h3>VOCÊ SÓ PAGA SE O CLIENTE CLICAR</h3>
                    <p>O Google trabalha com custo por clique(CPC), ou seja, o valor que você escolhe pagar sempre que um usuário clicar em seu anúncio. Selecione um custo máximo por clique de R$ 0,30, por exemplo, e o Adwords nunca cobrará mais do que R$ 0,30 por nenhum clique. </p>
                </div>
            </div>


         </div>

    </section>

     <section id="diferencial-3">
        <div class="container">

            <div class="row">
                <div class="col-sm-2 icon">
                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_graph.png" class="img-responsive" />
                </div>
                <div class="col-sm-10">
                    <h3>CONTROLE TOTAL DE SEU INVESTIMENTO</h3>
                    <p> Você pode mudar e editar o anúncio sempre que necessário, definir o orçamento diário e até pausar uma campanha. </p>
                </div>
            </div>

        </div>
    </section>

     <section id="diferencial-4">
        <div class="container">

            <div class="row">
                <div class="col-sm-2 icon">
                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_results.png" class="img-responsive" />
                </div>
                <div class="col-sm-10">
                    <h3>PAGUE APENAS PELOS RESULTADOS</h3>
                    <p>Você só paga quando alguém realmente clica no seu anúncio. Basta definir um orçamento com o qual se sinta confortável e ajustá-lo à medida que começar a ver resultados.</p>
                </div>
            </div>

        </div>

    </section-->

</div>
