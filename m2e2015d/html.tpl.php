<!DOCTYPE html>
<html>
  <head>
  
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php if ($is_front):  ?>
      <meta name="abstract" content="Desenvolvemos sites, logotipos, materiais impressos, realizamos gestão de mídias sociais e tudo o que a sua empresa precisar para se comunicar com seus clientes com qualidade e profissionalismo." />
      <meta name="keywords" content="agencia, publicidade, logotipos, logos, sites, website, web design, facebook, social media, midias sociais, design" />
      <link rel="shortlink" href="http://agenciam2e.com.br" />      
      <meta name="description" content="Desenvolvemos sites, logotipos, materiais impressos, realizamos gestão de mídias sociais e tudo o que a sua empresa precisar para se comunicar com seus clientes com qualidade e profissionalismo." />
      <meta property="fb:admins" content="569142923"/>
      <meta property="fb:app_id" content="266106020219698"/>   
      <meta property="og:title" content="M2E Comunicação Digital"/>
      <meta property="og:description" content="Desenvolvemos sites, logotipos, materiais impressos, realizamos gestão de mídias sociais e tudo o que a sua empresa precisar para se comunicar com seus clientes com qualidade e profissionalismo."/>
      <meta property="og:image" content="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2014/images/avatar.png"/> 
      <meta property="og:type" content="website" /> 
      <link rel="image_src" href="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2014/images/avatar.png" />
  <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015d/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015d/css/bootstrap-theme.css" rel="stylesheet">

<link href="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015d/css/animate.css" rel="stylesheet">
    <?php print $styles; ?>
    <?php print $scripts; ?>
    
<!--[if lt IE 7]>
  <link href="assets/css/font-awesome-ie7.min.css" rel="stylesheet">
  <![endif]-->
    <!-- Fav and touch icons -->
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2014/images/favicon.png">
<meta name="google-site-verification" content="LF0NM4y6mrDwRUx8TOWE4YMFzDdgXgap6K_ms5uyJr4" />
</head>
<!-- /HEAD-->
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=1426332407652536&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
    
</body>
</html>
      