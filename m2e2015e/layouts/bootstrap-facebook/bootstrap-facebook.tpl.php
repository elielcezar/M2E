<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * additional areas for the top and the bottom.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom row.
 */
?>
<div class="bootstrap panel-display panel-1col clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  
  <section class="conteudo">
  
  

  	 <h2>O Que Fazemos</h2>     

     

      <div class="col-sm-4 servico">                              
            <div class="ico"><img src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015b/img/ico_logo.png" class="img-responsive"></div>
            <h3>Logotipos</h3>
            <p>Criação de logotipos e sistemas de identidade visual completos.</p>
            <a class="button" href="#">Saiba Mais</a>
      </div>
      <div class="col-sm-4 servico">                              
           	<div class="ico"><img src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015b/img/ico_web.png" class="img-responsive"></div>            
            <h3>Web Design</h3>
            <p>Desenvolvemos sites institucionais, blogs e e-commerces, com foco em usabilidade e facilidade de manutenção.</p>                      
            <a class="button" href="#">Saiba Mais</a>
      </div>
       <div class="col-sm-4 servico">                    
	        <div class="ico"><img src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015b/img/ico_newsletter.png" class="img-responsive"></div>            
            <h3>Email Marketing</h3>
            <p>O e-mail marketing ainda é uma das formas mais populares para divulgar e vender produtos e serviços. </p>            
            <a class="button" href="#">Saiba Mais</a>
       </div>
       <div class="col-sm-4 servico">                    
          	<div class="ico"><img src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015b/img/ico_impresso.png" class="img-responsive"></div>
           	<h3>Materiais Impressos</h3>
            <p>Nosso portfólio conta com inúmeras criações de materiais impressos como: flyers, catálogos, cartazes, anúncios para jornais e revistas, outdoors e muito mais. </p>            
            <a class="button" href="#">Saiba Mais</a>
      </div>
       <div class="col-sm-4 servico">                    
          	<div class="ico"><img src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015b/img/ico_web.png" class="img-responsive"></div>
            <h3>Facebook</h3>
            <p>Nosso portfólio conta com inúmeras criações de materiais impressos como: flyers, catálogos, cartazes, anúncios para jornais e revistas, outdoors e muito mais. </p>          
            <a class="button" href="#">Saiba Mais</a>
      </div>
       <div class="col-sm-4 servico">                    
          <div class="ico"><img src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015b/img/ico_newsletter.png" class="img-responsive"></div>          
          <h3>Anúncios no Google</h3>
           <p>Nosso portfólio conta com inúmeras criações de materiais impressos como: flyers, catálogos, cartazes, anúncios para jornais e revistas, outdoors e muito mais. </p>           
           <a class="button" href="#">Saiba Mais</a>
      </div>

    
    
     
      	<div class="col-sm-12"> <?php print $content['middle']; ?></div>
     

  
   
 </section>  

  
</div>
