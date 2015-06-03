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


     

      <div class="col-sm-12 servico"> 

            <div class="col-sm-3">
              <img src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015b/img/ico_logo.png" class="img-responsive">
            </div>
            <div class="col-sm-9">
              <h4>LOGOTIPOS / IDENTIDADE VISUAL</h4>
              <p>Criação de logotipos e sistemas de identidade visual completos, garantindo a unidade visual de todos os materiais e produtos que estamparem a marca da sua empresa. A criação do logotipo passa por diversas etapas, desde a reunião de briefing, quando o você irá nos fornecer todas as informações relevantes sobre sua empresa, passando pela elaboração do conceito, a geração de alternativas até a aprovação final. </p>
            </div>
            
      </div>
      <div class="col-sm-12 servico"> 
            <div class="col-sm-9">
                <h3>SITES INSTITUCIONAIS, BLOGS E E-COMMERCE</h3>
                <p>Criação de sites com foco em usabilidade e facilidade de manutenção. Nossos sites são desenvolvidos de forma que o próprio cliente pode atualiza-lo , editando notícias, páginas, banners,  etc, sem a precisar de qualquer ajuda profissional. Desenvolvemos Blogs, Sites Institucionais, Portfólios, E-commerce, e o que mais você precisar.</p>
            </div>                             
           	<div class="col-sm-3">
              <img src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015b/img/ico_web.png" class="img-responsive">
            </div>            
      </div>
       <div class="col-sm-12 servico">                    
	        <div class="col-sm-3">
            <img src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015b/img/ico_newsletter.png" class="img-responsive">
          </div>
          <div class="col-sm-9">
            <h3>Email Marketing</h3>
            <p>O e-mail marketing ainda é uma das formas mais populares para divulgar e vender produtos e serviços. No entanto, sua eficácia está diretamente ligada à qualidade visual de sua produção. É preciso ter um material de qualidade para transmitir profissionalismo para seus clientes, aumentando significativamente a porcentagem de cliques e vendas.</p>
          </div>
       </div>
       <div class="col-sm-12 servico">                    
          <div class="col-sm-9">
            <h3>MATERIAIS IMPRESSOS</h3>
            <p>Nosso portfólio conta com inúmeras criações de materiais impressos como: flyers, catálogos, cartazes, anúncios para jornais e revistas, outdoors e muito mais. Muitas vezes, uma peça gráfica impressa pode ser o complemento ideal para o lançamento de um novo site ou para reforçar uma campanha online.</p>
          </div> 
          <div class="col-sm-3">	
            <img src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015b/img/ico_impresso.png" class="img-responsive">
          </div>                     
      </div>
       <div class="col-sm-12 servico">                    
          	<div class="col-sm-3">
                <img src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015b/img/ico_web.png" class="img-responsive">
            </div>
            <div class="col-sm-9">
                <h3>Facebook</h3>
                <p>Nosso portfólio conta com inúmeras criações de materiais impressos como: flyers, catálogos, cartazes, anúncios para jornais e revistas, outdoors e muito mais. </p>
            </div>            
      </div>
       <div class="col-sm-12 servico">                              
          <div class="col-sm-9">
              <h3>Anúncios no Google</h3>
               <p>Nosso portfólio conta com inúmeras criações de materiais impressos como: flyers, catálogos, cartazes, anúncios para jornais e revistas, outdoors e muito mais. </p>
          </div>
          <div class="col-sm-3">
            <img src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015b/img/ico_newsletter.png" class="img-responsive">
          </div>
      </div>

    
    
     
      	<div class="col-sm-12"> <?php print $content['middle']; ?></div>
     

  
   
 </section>  

  
</div>
