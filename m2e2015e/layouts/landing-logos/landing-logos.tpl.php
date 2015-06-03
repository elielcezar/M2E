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
                Criação de Logotipos a partir de <strong>R$ 850,00</strong>
            </h1>
                <p>O logotipo é a assinatura da sua empresa, ele é quem traduz visualmente a personalidade da sua marca e faz o seu público se identificar com seu produto ou serviço.</p>
                <a class="botao destaque" href="#diferenciais">Solicite Um Orçamento!</a>

        </div>
        <div class="col-sm-6"><img src="<?php print base_path() ?>/sites/all/themes/m2e2015e/img/logos.jpg" class="img-responsive" /></div>

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
                    <p>Possuir uma boa Identidade Visual é fundamental para uma marca que procura se apresentar ao mercado de forma sólida e profissional e nós sabemos que quando o assunto é a sua marca, ninguém conhece melhor o assunto do que você mesmo.</p>
                    <p>É por isso que procuramos sempre trabalhar o mais próximo possível de nossos clientes em todas as etapas de desenvolvimento de identidade visual. </p>
                </div>
                <div class="col-sm-6">
                    <p>O processo começa com o levantamento do briefing, quando você irá nos contar tudo sobre o seu negócio e quais são suas expectativas em relação à sua empresa nos próximos anos. Em seguida, realizamos uma boa pesquisa de mercado, para descobrir o como seus clientes e sua concorrência se comportam.</p>
                    <p>Somente a partir daí começamos a criação propriamente dita e, após muita discussão aqui na agência, apresentamos até três conceitos que sintetizam todas as informações que reunimos até então. </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <p><a href="http://127.0.0.1:82/m2e/" class="jquey_ajax_load" data-target="teste">Também fazemos:</a> <strong> Cartão de Visita / Papel Timbrado e Envelopes / Pasta Corporativa / Folders e Flyers / Manual de Marca</strong> </p>
                </div>
            </div>

            <div id="teste"><p>lorem ipsum</p></div>
        </div>
    </section>

    


    <section id="portfolio">


        <div class="chamada">
            <div class="container">
                <h3>Confira o Nosso Porfólio</h3>
                <p>Alguns dos últimos trabalhamos que fizemos envolvendo a criação de logotipos.</p>
            </div>
        </div>

        <?php print views_embed_view('portfolio_logos', 'default'); ?>


    </section>

    <section id="contato">
         <div class="container">
                <h4>Gostou do nosso Trabalho? <br/> Então entre em contato e solicite um orçamento!</h4>
                <?php
                     $block = module_invoke('webform', 'block_view', 'client-block-13');
                     print render($block['content']);
                  ?>
            </div>
    </section>



</div>


<script type="text/javascript">

/* open folding content */
$('.cd-gallery a').on('click', function(event){
	event.preventDefault();
	openItemInfo($(this).attr('href'));
});
function openItemInfo(url) {
	/* check if mobile or desktop */
	var mq = viewportSize();
	if( $('.cd-gallery').offset().top > $(window).scrollTop() && mq != 'mobile') {
		/* if content is visible above the .cd-gallery - scroll before opening the folding panel */
		$('body,html').animate({
			'scrollTop': $('.cd-gallery').offset().top
		}, 100, function(){
           	toggleContent(url, true);
        });

	} else {
		toggleContent(url, true);
	}
}

function toggleContent(url, bool) {
	if( bool ) {
		/* load and show new content */
		$('.cd-fold-content').load(url+' .cd-fold-content > *', function(event){
			$('body').addClass('overflow-hidden');
			$('.cd-folding-panel').addClass('is-open');
			$('.cd-main').addClass('fold-is-open');
		});

	} else {
		/* close the folding panel */
		$('.cd-folding-panel').removeClass('is-open')
		$('.cd-main').removeClass('fold-is-open');

		/* ...*/
	}

}

</script>
