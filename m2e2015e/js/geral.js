
jQuery(document).ready(function ($) {


/*-- Menu Toggle Script --*/

$('body').click(function() {
   $("#wrapper").removeClass("toggled");
});
$('#menu-toggle').click(function(e){
    e.stopPropagation();
    $("#wrapper").toggleClass("toggled");
});
/*$('#menu-toggle').mouseenter(function(e){
    e.stopPropagation();
    $("#wrapper").addClass("toggled");
});*/
$('#menu-principal').click(function(e){
    e.stopPropagation();
});
/*$('#sidebar').mouseleave(function(e){
    $("#wrapper").removeClass("toggled");
});*/



});
