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

        </div>
        <div class="col-sm-6">
             <h1 class="title" id="page-title">
                Gerenciamento de mídias sociais<br/> a partir de <strong>R$ 450,00</strong>
            </h1>
            <a class="botao destaque" href="<?php print $GLOBALS['base_path']; ?>contato">Clique e Solicite Um Orçamento!</a>
        </div>

    </div>
    </div><!-- chamada -->


</div>

</header>
<!-- HEADER -->


<div id="principal">

    <section id="destaque">
        <div class="container">
            <p>Para aproveitar todo o potencial do Facebook, não basta simplesmente criar uma página. É preciso também manter um padrão de comunicação profissional (envolvendo texto e imagens), além de experiência na hora de interagir com o público nas mais variadas situações. Para isso, oferecemos:</p>
        </div>
    </section>

    <section id="diferenciais">
        <div class="container">
            <ul>
                <li>Criação, configuração e administração de fanpage no Facebook (criação de imagens de capa, padrão de comunicação com imagens, instalação de aplicativos que permitem expandir as possibilidades de uso da fanpage, etc);</li>
                <li>Gestão de conteúdo: produção de posts no Facebook(conteúdo informativo, promoções, divulgação de seu produto/serviço)</li>
                <li>Interaçao com o público: estaremos sempre acompanhando as interações do público com a página, respondendo dúvidas e encaminhando eventuais demandas para você.</li>
                <li>Criação, configuração e administração de anúncios no Facebook</li>
                <li>Acompanhamento e cobertura de ações promocionais</li>
            </ul>
        </div>
    </section>

    <section id="tabela-precos">
        <div class="container">
            <h3>Tabela de Preços</h3>

            <div class="row">

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pricing-table">
                    <div class="pricing-header">
                        <p class="pricing-rate"><sup>R$</sup> 350 <span>/mês</span></p>
                    </div>

                    <div class="pricing-list">
                        <ul>
                            <li><i class="fa fa-envelope"></i>2 posts por semana</li>
                            <li><i class="fa fa-signal"></i>relatórios de desempenho</li>
                            <li><i class="fa fa-user"></i>interação com usuários</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pricing-table">
                    <div class="pricing-header">
                        <p class="pricing-rate"><sup>R$</sup> 500 <span>/mês</span></p>
                    </div>

                    <div class="pricing-list">
                        <ul>
                            <li><i class="fa fa-envelope"></i>3 posts por semana</li>
                            <li><i class="fa fa-signal"></i>relatórios de desempenho</li>
                            <li><i class="fa fa-user"></i>interação com usuários</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pricing-table">
                    <div class="pricing-header">
                        <p class="pricing-rate"><sup>R$</sup> 750<span>/mês</span></p>
                    </div>

                    <div class="pricing-list">
                        <ul>
                            <li><i class="fa fa-envelope"></i>30 posts por mês</li>
                            <li><i class="fa fa-signal"></i>relatórios de desempenho</li>
                            <li><i class="fa fa-user"></i>interação com usuários</li>
                        </ul>
                    </div>
                </div>
            </div>

            </div>

        </div>
    </section>


    <section id="contato">
         <div class="container">
                <h4>Gostaria de um plano personalizado? <br />Então entre em contato e solicite um orçamento!</h4>
                <?php
                     $block = module_invoke('webform', 'block_view', 'client-block-13');
                     print render($block['content']);
                  ?>
            </div>
    </section>


</div>
