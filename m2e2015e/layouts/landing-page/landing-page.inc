<?php

// Plugin definition
$plugin = array(
  'title' => t('Landing Page Geral'),
  'category' => t('Columns: 1'),
  'icon' => 'landing-page.png',
  'theme' => 'landing-page',
  'css' => 'landing-page.css',
  'regions' => array(  	  	
    'titulo' => t('Titulo'),
    'chamada' => t('Chamada'),
    'destaque1' => t('Destaque 1'),
    'destaque2' => t('Destaque 2'),
    'destaque3' => t('Destaque 3'),
    'diferenciais' => t('Diferenciais'),
    'portfolio' => t('Portfolio')
  	),
);
