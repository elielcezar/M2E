<header> 

<div class="container">

    <div class="m2e"><a href="<?php print $GLOBALS['base_path']; ?>">M2E Comunicação Digital</a></div>            

    
    <div class="chamada">
    <div class="row">
        <div class="col-sm-5">
        
             <h1 class="title" id="page-title">
                Seu site a partir de <strong>R$ 399,00</strong>
            </h1>                
                <p>Blogs, sites institucionais, portfólios, lojas virtuais e uma infinidade de sites com foco na praticidade e facilidade de uso.</p>
                <a class="botao destaque" href="#diferenciais">Saiba Mais <i class="fa fa-chevron-circle-down"></i></a>
                        
        </div>
        <div class="col-sm-7"><img src="<?php print base_path() . path_to_theme() .'/' ?>img/webdesign.png" class="img-responsive" /></div>
    
    </div>
    </div><!-- chamada -->
    

</div>

</header>    
<!-- HEADER -->  


<div id="principal">
    
    <section id="destaques">    
        <div class="container">    
            <div class="col-sm-4">
                <img src="<?php print base_path() . path_to_theme() .'/' ?>img/icon_responsivo.png" class="img-responsive" />
                <h4>Design Responsivo</h4>
                <p>O site se adapta a qualquer tamanho de tela, de celulares à monitores desktop</p>
            </div>
            <div class="col-sm-4">
                <img src="<?php print base_path() . path_to_theme() .'/' ?>img/icon_designcustom.png" class="img-responsive" />
                <h4>Layouts Customizáveis</h4>
                <p>Escolha entre layouts exclusivos ou modelos prontos personalizadospara sua empresa</p>
            </div>
            <div class="col-sm-4">
                <img src="<?php print base_path() . path_to_theme() .'/' ?>img/icon_conteudo.png" class="img-responsive" />
                <h4>Conteúdo Gerenciável</h4>
                <p>Publique, exclua e edite conteúdos do site via Painel de Controle sem auxílio profissional</p>
            </div>
        </div>  
    </section>
    
    
    <section id="diferenciais">    
        <div class="container">    
            <div class="col-sm-6">
                <ul>
                    <li><strong>Design responsivo:</strong> o site se adapta a qualquer tamanho de tela, desde smartphones até tablets e monitores de mesa.</li>
                    <li><strong>100% Customizável:</strong> produzimos layouts exclusivos ou ainda, se você preferir, temos vários modelos prontos que podem ser personalizados de acordo com suas necessidades.</li>
                    <li><strong>Sem mensalidades</strong>, sem custos adicionais ou taxas de manutenção.</li>                    
                    <li><strong>SEO:</strong> os códigos de todos os nossos sites são otimizados para que você obtenha um melhor posicionamento em sites de busca, como o Google e Bing.</li>                    
                    <li>Integração com <strong>Twitter, Instagram e Facebook</strong>;</li>                    
                    <li>Relatórios detalhados e estatísticas de acessos ao site utilizando integração com o <strong>Google Analytics</strong></li>
                    <li><strong>Painel de controle para administração do site,</strong> permitindo que você crie, exclua ou altere conteúdos do site sem a necessidade de conhecimento técnico ou auxílio profissional.</li>
                </ul>
            </div>
            <div class="col-sm-6">
                <h3>Entre em Contato e Solicite um Orçamento</h3>
                <?php
                     $block = module_invoke('webform', 'block_view', 'client-block-13');
                     print render($block['content']);
                  ?>
                
            </div>
        </div>  
    </section>
    
    
    <section id="portfolio">
    
        
        <div class="chamada">
            <div class="container">
                <h3>Confira o Nosso Porfólio</h3>    
                <p>Alguns dos últimos trabalhamos que fizemos envolvendo a criação de sites.</p>    
            </div>
        </div>
        <div class="container">
        <?php print views_embed_view('portfolio_webdesign', 'default'); ?>
        </div>

    </section>
    
    
   
</div>




