<?php

// Plugin definition
$plugin = array(
  'title' => t('Portfolio Individual'),
  'category' => t('Columns: 1'),
  'icon' => 'bootstrap-portfolio-individual.png',
  'theme' => 'bootstrap-portfolio-individual',
  'css' => 'bootstrap-portfolio-individual.css',
  'regions' => array(  	
  	'title' => t('Titulo'),
    'resumo' => t('Resumo'),
    'middle' => t('Coluna do Meio')
  	),
);
