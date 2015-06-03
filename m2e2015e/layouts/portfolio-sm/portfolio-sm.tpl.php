

<header> 

<div class="container">

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
                <p>Confira mais alguns projetos envolvendo o gerenciamento de mídias sociais</p>
            </div>
        </div>
        <div class="container">
        <?php print views_embed_view('portfolio_home2', 'default'); ?>
        </div>

    </section> 