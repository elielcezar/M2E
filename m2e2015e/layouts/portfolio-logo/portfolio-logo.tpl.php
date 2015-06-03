

<header>

<div class="container">

    <a id="menu-toggle">
        <span>MENU</span>
        <div class="burger"><b></b><b></b><b></b></div>
    </a>

    <div class="m2e"><a href="<?php print $GLOBALS['base_path']; ?>">M2E Comunicação Digital</a></div>

    <div class="chamada">

        <div class="titulo"><?php print $content['title']; ?></div>
        <?php print $content['resumo']; ?>

    </div><!-- chamada -->


</div>

</header>
<!-- HEADER -->




<div class="container">

    <?php print $content['middle']; ?>

</div>


<section id="portfolio">


        <div class="chamada">
            <div class="container">
                <h3>Nosso Portfólio</h3>
                <p>Confira mais algumas identidades visuais criadas pela M2E</p>
            </div>
        </div>

        <?php print views_embed_view('portfolio_logos', 'default'); ?>


    </section>
    <section id="call">
        <div class="container">
            <div class="col-sm-9"><h3>Vamos conversar sobre a sua empresa?<br/>Entre em contato e solicite um orçamento sem compromisso agora mesmo!</h3></div>
            <a class="botao destaque left" href="<?php print $GLOBALS['base_path']; ?>contato">Entre em Contato!<i class="fa fa-arrow-right"></i></a>
        </div>

    </section>
