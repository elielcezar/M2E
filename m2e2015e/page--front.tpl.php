<div id="wrapper" class="">


<header>

    <div id="particles">
        <div id="intro">
        </div>
    </div>

      <div class="container">

          <a id="menu-toggle">
              <span>MENU</span>
              <div class="burger"><b></b><b></b><b></b></div>
          </a>




           <div class="chamada">
               <h1 class="m2e"><a href="<?php print $GLOBALS['base_path']; ?>"><img src="<?php print base_path() . path_to_theme() .'/' ?>img/m2e.png" class="img-responsive" /></a></h1>
               <div class="col-sm-12">

                   <h2>Sua empresa e <span id="typed1"></span><br/>trabalhando juntas</h2>

                    <p class="destaque">
                        Criamos sites, logotipos, campanhas online e
                        cuidamos da presença da sua marca nas redes sociais
                    </p>
                     <a class="botao dark" href="#webdesign">Conheça o nosso trabalho</a>
                    <a class="botao dark left" href="<?php print $GLOBALS['base_path']; ?>contato">Solicite um Orçamento <i class="fa fa-arrow-right"></i></a>
                </div>
          </div>

          <?php include "sidebar.tpl.php"; ?>


    </div>

</header>
<!-- HEADER -->





<div id="principal">


<section id="webdesign">
    <div class="container">
        <div class="row">
             <div class="col-sm-6">
                <h3>Desenvolvimento de Sites</h3>
                <p>Sites a partir de <strong>R$ 399,00</strong>, sem mensalidades ou taxa de manutenção!</p>
                <p>Produzimos layouts exclusivos ou ainda, se você preferir, pode escolher entre diversos modelos prontos que podem ser personalizados de acordo com suas necessidades.</p>
                <p>Sites com conteúdo 100% gerenciável por você e sua equipe, sem a necessidade de ajuda profissional.</p>
                <a class="botao left" href="<?php print $GLOBALS['base_path']; ?>webdesign">Saiba Mais <i class="fa fa-arrow-right"></i></a>
            </div>
            <div class="col-sm-6"><img src="<?php print base_path() . path_to_theme() .'/' ?>img/webdesign.png" class="img-responsive" /></div>
        </div>
    </div>
</section>

<!--section id="ecommerce">

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>Lojas Virtuais</h3>
                <p>Lojas virtuais objetivas e atrativas, sem limites de produtos e integradas com as principais formas de pagamento, correios e midias sociais, que facilitam a compra para seu cliente e oferecem um ambiente agradável e seguro.</p>
                <p>Além de desenvolver sua loja virtual, também ofereço serviços de criação de banners, newsletters e consultoria para que você mantenha sua loja “viva”, interessante e vendendo para seus clientes.</p>

            </div>
            <div class="col-sm-6"><img src="<?php print base_path() . path_to_theme() .'/' ?>img/ecommerce.jpg" class="img-responsive" /></div>

        </div>
  </div>

</section-->

<section id="socialmedia">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">&nbsp;</div>
            <div class="col-sm-6">
                <h3>Gerenciamento de Mídias Sociais</h3>
                <p>Administramos a presença da sua marca no Facebook, Twitter e Instagram gerando conteúdo, imagens e monitorando a interação com o público.</p>
                <p>Transforme seus perfis nas redes sociais em verdadeiros canais de relacionamento com seus clientes!</p>
                <a class="botao left dark" href="<?php print $GLOBALS['base_path']; ?>midias-sociais">Saiba Mais <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
  </div>
</section>


<section id="logos">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>Logotipos / Identidade Visual</h3>
                <p>Nós criamos logotipos e sistemas de identidade visual completos, garantindo a padronização de todos os materiais e produtos que estamparem a marca da sua empresa.</p>
                <p>Precisando reformular o logo da sua empresa ou dar uma cara nova para seus materiais de divulgação? Nós temos a solução na medida para você.</p>
                <a class="botao left" href="<?php print $GLOBALS['base_path']; ?>logos">Saiba Mais <i class="fa fa-arrow-right"></i></a>
            </div>
            <div class="col-sm-6"><img src="<?php print base_path() . path_to_theme() .'/' ?>img/logos.jpg" class="img-responsive" /></div>
        </div>
  </div>
</section>


 <section id="ads">
    <div class="container">
        <div class="row">
             <div class="col-sm-6"><img src="<?php print base_path() . path_to_theme() .'/' ?>img/ads.png" class="img-responsive" /></div>
            <div class="col-sm-6">
                <h3>Anúncios no Google e Facebook Ads</h3>
                <p>Publique anúncios de sua empresa no Google e no Facebook! Eles são exibidos apenas quando alguém procura pelas palavras-chave que você escolheu e você só paga quando alguém clicar em seu anúncio.</p>
                <a class="botao left" href="<?php print $GLOBALS['base_path']; ?>ads">Saiba Mais <i class="fa fa-arrow-right"></i></a>
            </div>

        </div>
  </div>
</section>



<section id="portfolio">

        <div class="chamada">
            <div class="container">
                <h3>Nosso Portfólio</h3>
                <p>Confira alguns dos projetos mais recentes realizados pela nossa equipe</p>

                <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#saibamais">Saiba Mais</button>
                <div class="modal fade" id="saibamais" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-body" id="content">

                                </div>
                              </div>
                            </div>
                        </div>
            </div>
        </div>

        <?php print views_embed_view('portfolio_home2', 'default'); ?>

</section>





<section id="call">
    <div class="container">
        <div class="col-sm-9"><h3>Vamos conversar sobre a sua empresa?<br/>Entre em contato e solicite um orçamento sem compromisso agora mesmo!</h3></div>
        <a class="botao destaque left" href="<?php print $GLOBALS['base_path']; ?>contato">Entre em Contato!<i class="fa fa-arrow-right"></i></a>
    </div>

</section>


</div>


<!--section id="local">
    <div id="googlemaps"></div>


        <div class="container">
            <div class="form-contato">
                <p class="email"><i class="fa fa-envelope-o"></i> <a href="mailto:contato@agenciam2e.com.br">contato@agenciam2e.com.br</a></p>
                <p class="fone-wpp"><i class="fa fa-whatsapp"></i> 41 9963-1609</p>
                <p class="fb"><i class="fa fa-facebook"></i> <a href="https://www.facebook.com/agenciam2e">fb.com/agenciam2e</a></p>
            <?php
                 $block = module_invoke('webform', 'block_view', 'client-block-6');
                 print render($block['content']);
              ?>
            </div>
        </div>


</section-->



<!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->







<?php include "footer.tpl.php"; ?>

</div><!-- wrapper -->




<script src="<?php print base_path() . path_to_theme() .'/' ?>js/particles.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/app.js"></script>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.parallax-1.1.3.js" type="text/javascript" ></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/geral.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.inview.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.isotope.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.scrollTo-1.4.6-min.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/typed.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/wodry.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.particleground.js"></script>



<script>
jQuery(document).ready(function(){

  $('.chamada').localScroll();

    $(function(){

        $("#typed1").typed({
            strings: ["nossa equipe", "nosso design", "nossas idéias"],
            typeSpeed: 50,
            backDelay: 500,
            loop: false,
            contentType: 'html', // or text
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

    });



});


/**
 * Particleground demo
 * @author Jonathan Nicol - @mrjnicol
 */

document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('particles'), {
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  var intro = document.getElementById('intro');
  intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
}, false);


/*
// jQuery plugin example:
$(document).ready(function() {
  $('#particles').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  $('.intro').css({
    'margin-top': -($('.intro').height() / 2)
  });
});
*/



</script>



<!--[if !IE]><!-->
<script src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015d/js/custom_inview.js"></script>
<!--<![endif]-->
