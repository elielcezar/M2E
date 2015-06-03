
/* HOME */

var janela = $(window).width();

if(janela>767){

    $('.nabvar, h1.m2e-home, .destaque img, .destaque .chamada, .destaque .fb, .destaque .twitter, .bloco.portfolio, .bloco.orcamento, .servico.logo, .servico.webdesign, .servico.emailmkt, .servico.impressos, .servico.facebook, .servico.google ').css('opacity','0');
        
        $('h1.m2e-home').one('inview', function (event, visible) {
            if (visible) {        
              $(this).addClass('animated bounceInDown').css('opacity','1');   
            } 
        });    
        $('.destaque img').one('inview', function (event, visible) {
            if (visible) {            
              $(this).addClass('animated fadeInRightBig');   
            } 
        });   
        $('.destaque .chamada').one('inview', function (event, visible) {
            if (visible) {            
              $(this).addClass('animated fadeInLeftBig');   
            } 
        });  
        $('.destaque .fb').one('inview', function (event, visible) {
            if (visible) {            
              $(this).addClass('animated fadeInLeftBig delay4');   
            } 
        });    
        $('.destaque .twitter').one('inview', function (event, visible) {
            if (visible) {            
              $(this).addClass('animated fadeInRightBig delay6');   
            } 
        });   
        $('.bloco.portfolio').one('inview', function (event, visible) {
            if (visible) {            
              $(this).addClass('animated fadeInUp delay10');   
            } 
        }); 
        $('.bloco.orcamento').one('inview', function (event, visible) {
            if (visible) {            
              $(this).addClass('animated fadeInUp delay12');   
            } 
        }); 

        $('.servico.logo').one('inview', function (event, visible) {
            if (visible) {            
              $(this).addClass('animated fadeIn');   
            } 
        }); 
        $('.servico.webdesign').one('inview', function (event, visible) {
            if (visible) {            
              $(this).addClass('animated fadeIn');   
            } 
        }); 
        $('.servico.emailmkt').one('inview', function (event, visible) {
            if (visible) {            
              $(this).addClass('animated fadeIn');   
            } 
        }); 

         $('.servico.impressos').one('inview', function (event, visible) {
            if (visible) {            
              $(this).addClass('animated fadeIn');   
            } 
        }); 
        $('.servico.facebook').one('inview', function (event, visible) {
            if (visible) {            
              $(this).addClass('animated fadeIn');   
            } 
        }); 
        $('.servico.google').one('inview', function (event, visible) {
            if (visible) {            
              $(this).addClass('animated fadeIn');   
            } 
        }); 

        
        /* portfolio geral */    

        $('.view-portfolio-geral2 .item').mouseenter(function(){
          $(this).find('.link a').addClass('animated bounceIn delay2').css('opacity','1');   
        }).mouseleave(function(){
          $(this).find('.link a').removeClass('animated bounceIn delay2').css('opacity','0');   
        });

        

        /* portfolio individual */
        $('.node-type-portfolio header h1.title').css('opacity','0');
        
        $('.node-type-portfolio header h1.title').one('inview', function (event, visible) {
            if (visible) {        
              $(this).addClass('animated bounceIn delay4').css('opacity','1');   
            } 
        }); 

        

        /* contato */
        $('.page-contato .form-contato').css('opacity','0');

        $('.page-contato .form-contato').one('inview', function (event, visible) {
            if (visible) {        
              $(this).addClass('animated bounceIn delay4').css('opacity','1');   
            } 
        });  

         

         /* orcamento */
        $('.page-orcamento header h1.title, .page-orcamento .view-orcamento .views-field-body, .page-orcamento .pane-webform-client-block-13').css('opacity','0');

        $('.page-orcamento header h1.title').one('inview', function (event, visible) {
            if (visible) {        
              $(this).addClass('animated fadeInDown');
            } 
        });  
         $('.page-orcamento .view-orcamento .views-field-body').one('inview', function (event, visible) {
            if (visible) {        
              $(this).addClass('animated fadeInUp delay4');
            } 
        });  
          $('.page-orcamento .pane-webform-client-block-13').one('inview', function (event, visible) {
            if (visible) {        
              $(this).addClass('animated fadeInUp delay8');
            } 
        });  

}