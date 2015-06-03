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

             <h1 class="title" id="page-title">
                Seu site a partir de <strong>R$ 399,00</strong>
            </h1>
                <p>Blogs, sites institucionais, portfólios, lojas virtuais e uma infinidade de sites com foco na praticidade e facilidade de uso.</p>
                <a class="botao destaque" href="#contato">Solicite Um Orçamento!</a>

        </div>
        <div class="col-sm-6"><img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/webdesign.png" class="img-responsive" /></div>

    </div>
    </div><!-- chamada -->


</div>

</header>
<!-- HEADER -->


<div id="principal">


    <section id="diferenciais">
        <div class="container">
            <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-4 item">
                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_responsivo.png" class="img-responsive" />
                    <p><strong>Design responsivo:</strong></p><p>Tenha um único site se adapta a qualquer tamanho de tela, desde smartphones até tablets e monitores de mesa.</p>
                </div>
                <div class="col-sm-4 item">
                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_designcustom.png" class="img-responsive" />
                    <p><strong>100% Customizável</strong></p><p>Produzimos layouts exclusivos ou, se você preferir, pode escolher um modelo pronto para adaptar de acordo com suas necessidades.</p>
                </div>
                <div class="col-sm-4 item">
                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_html.png" class="img-responsive" />
                    <p><strong>SEO</strong></p><p>Nossos códigos são otimizados para obter um melhor posicionamento em sites de busca como Google e Bing.</p>
                </div>
                <div class="col-sm-4 item">
                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_money.png" class="img-responsive" />
                    <p><strong>Sem mensalidades</strong></p><p>O valor cobrado pelo seu site é único, sem custos adicionais ou taxas de manutenção.</p>
                </div>
                <div class="col-sm-4 item">
                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_socialmedia.png" class="img-responsive" />
                    <p><strong>Integração com Redes Sociais</strong></p><p>Permitindo que seus visitantes curtam e compartilhem seu conteúdo facilmente.</p>
                </div>
                <div class="col-sm-4 item">
                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_analytics.png" class="img-responsive" />
                    <p><strong>Integração com Google Analytics</strong></p><p>Obtenha relatórios detalhados e estatísticas de acessos ao seu site.</p>
                </div>
                <div class="col-sm-4 item">
                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_admin.png" class="img-responsive" />
                    <p><strong>Painel de controle</strong></p><p>Crie, exclua ou altere o conteúdo do site sem a necessidade de conhecimento técnico ou auxílio profissional.</p>
                </div>
                <div class="col-sm-4 item">
                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_formcontato.png" class="img-responsive" />
                    <p><strong>Página de Contato</strong></p><p>Melhore a comunicação com seus clientes através de uma página com formulário de envio de mensagens, <a href="/contato">como essa aqui.</a></p>
                </div>
                <div class="col-sm-4 item">
                    <img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/icon_socialmedia-.png" class="img-responsive" />
                    <p><strong>Lojas Virtuais</strong></p><p>Desenvolvemos lojas profissionais e de fácil administração utilizando o Magento, o sistema de e-commerce mais popular do mundo.</p>
                </div>

                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">


        <div class="chamada">
            <div class="container">
                <h3>Confira o Nosso Portfólio</h3>
                <p>Alguns dos últimos trabalhamos que fizemos envolvendo a criação de sites.</p>
            </div>
        </div>

        <?php print views_embed_view('portfolio_webdesign', 'default'); ?>

    </section>


        <!--section id="contato">
         <div class="container">
                <h4>Gostou do nosso trabalho? Então entre em contato <br/>  e solicite um orçamento sem compromisso!</h4>
                <?php
                     $block = module_invoke('webform', 'block_view', 'client-block-13');
                     print render($block['content']);
                  ?>
            </div>
    </section-->

    <section id="call">
        <div class="container">
            <div class="col-sm-9"><h3>Vamos conversar sobre a sua empresa?<br/>Entre em contato e agende uma reunião ou <br /> solicite um orçamento agora mesmo!</h3></div>
            <a class="botao destaque left" href="<?php print $GLOBALS['base_path']; ?>contato">Entre em Contato!<i class="fa fa-arrow-right"></i></a>
        </div>

    </section>



</div>
