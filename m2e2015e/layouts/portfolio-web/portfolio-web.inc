<?php

// Plugin definition
$plugin = array(
  'title' => t('Portfolio Web'),
  'category' => t('Columns: 1'),
  'icon' => 'portfolio-web.png',
  'theme' => 'portfolio-web',
  'css' => 'portfolio-web.css',
  'regions' => array(  	
  	'title' => t('Titulo'),
    'resumo' => t('Resumo'),
    'middle' => t('Coluna do Meio')
  	),
);
