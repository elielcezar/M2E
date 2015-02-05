<header> 
  
  <!-- Static navbar -->
  
      <div class="navbar navbar-default animated" role="navigation">
        <div class="container">
          <div class="row">
           <h1 class="m2e"><a href="<?php print $GLOBALS['base_path']; ?>">M2E Comunicação Digital</a></h1>            
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>            
            </div>            
            <div class="navbar-collapse collapse">
              <ul class="links nav navbar-nav">
                <li class="menu-home"><a href="<?php print $GLOBALS['base_path']; ?>">Home</a></li>
                <!--li class="menu-servicos"><a href="<?php print $GLOBALS['base_path']; ?>servicos">O Que Fazemos</a></li-->
                <li class="menu-portfolio"><a href="<?php print $GLOBALS['base_path']; ?>portfolio">Portfólio</a></li>            
                <li class="menu-contato"><a href="<?php print $GLOBALS['base_path']; ?>contato">Contato</a></li>                    
                <li class="menu-orcamento"><a href="<?php print $GLOBALS['base_path']; ?>orcamento">Solicite um Orçamento</a></li>

                <li class="menu-facebook"><a href="https://www.facebook.com/agenciam2e">Facebook</a></li>
                <li class="menu-twitter"><a href="https://twitter.com/agenciam2e">Twitter</a></li>
              </ul>            
            </div><!--/.nav-collapse -->                 
          </div>
      </div>
    </div>
 

   
    
    <div class="container destaque">
         <h1 class="title" id="page-title"><?php print $title; ?></h1>         
    </div><!-- destaque -->
    

</header>    
<!-- HEADER --> 
      
<div class="local-tasks">
  <div class="container">        
    <?php if ($messages): ?>
        <div id="messages">
          <div class="section clearfix">
        <?php print $messages; ?>
        </div></div> <!-- /.section, /#messages -->          
    <?php endif; ?>
    <?php if ($tabs): ?>
        <div class="tabs">
        <?php print render($tabs); ?>
        </div>
    <?php endif; ?> 
  </div>  
</div>
    
<div id="principal">
  <?php print render($page['content']); ?>
</div>
<footer>
  <div class="rodape1">
      <div class="container">
          <div class="row">
            <div class="col-sm-12"><a  class="fale-conosco" href="http://agenciam2e.com.br/orcamento">Solicite um Orçamento ></a></div>
          </div>
          <div class="row">
              <div class="col-sm-4"><div class="fone"><span>Telefone/Whatsapp <br /> 41 9963-1609</span></div></div>
              <div class="col-sm-4"><div class="email"><span>contato@agenciam2e.com.br</span></div></div>
              <div class="col-sm-4"><div class="endereco"><span>Rua Anna Gbur Barcik, 499 <br /> Curitiba - PR</span></div></div>
          </div>
      </div>
  </div>
  <div class="rodape2">
      <div class="container">
        <div class="col-xs-6 facebook"><div class="fb-like" data-href="https://www.facebook.com/agenciam2e" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div></div>
        <div class="col-xs-6 m2e"><img src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015d/img/m2e-rodape.png" class="img-responsive"></div>
      </div>
  </div>
</footer>
    
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015d/js/bootstrap.min.js"></script>
<script src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015d/js/jquery.parallax-1.1.3.js" type="text/javascript" ></script>
<script src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015d/js/geral.js"></script>
<script src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015d/js/jquery.inview.js"></script>
<script src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015d/js/jquery.isotope.min.js"></script>


<script>

$(document).ready(function(){    

  $('header').parallax("50%", 0.3);  

   $(document).scroll(function () {
        var y = $(this).scrollTop();        
        if (y > 200) {
          $('.navbar').addClass('white');          
        } else {          
          $('.navbar').removeClass('white');        
        }
    }); 


    $(function(){      
      var $container = $('.view-portfolio-geral2');
      $container.isotope({
        itemSelector : '.views-row'
      });
      $('#filters a').click(function(){
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector });
        return false;
      });          
    });

});     

</script>

<!--[if !IE]><!-->
<script src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015d/js/custom_inview.js"></script>
<!--<![endif]--> 


