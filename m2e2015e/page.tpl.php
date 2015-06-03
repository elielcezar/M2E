<div id="wrapper" class="">




<?php include "sidebar.tpl.php"; ?>

<?php print render($page['content']); ?>

<div id="content"></div>

<?php include "footer.tpl.php"; ?>

</div><!-- wrapper -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/bootstrap.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.parallax-1.1.3.js" type="text/javascript" ></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/geral.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.inview.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.isotope.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.scrollTo-1.4.6-min.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>


<script>
jQuery(document).ready(function(){

  $('.chamada').localScroll();

});

</script>

<!--[if !IE]><!-->
<script src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/m2e2015d/js/custom_inview.js"></script>
<!--<![endif]-->
