<?php

// Plugin definition
$plugin = array(
  'title' => t('Portfolio Logo'),
  'category' => t('Columns: 1'),
  'icon' => 'portfolio-logo.png',
  'theme' => 'portfolio-logo',
  'css' => 'portfolio-logo.css',
  'regions' => array(  	
  	'title' => t('Titulo'),
    'resumo' => t('Resumo'),
    'middle' => t('Coluna do Meio')
  	),
);
