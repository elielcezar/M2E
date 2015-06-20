
jQuery(document).ready(function ($) {


/*-- Menu Toggle Script --*/

$('body').click(function() {
   $("#wrapper").removeClass("toggled");
});
$('#menu-toggle').click(function(e){
    e.stopPropagation();
    $("#wrapper").toggleClass("toggled");
});
$('#menu-toggle').mouseenter(function(e){
    e.stopPropagation();
    $("#wrapper").addClass("toggled");
});
$('#menu-principal').click(function(e){
    e.stopPropagation();
});
$('#sidebar').mouseleave(function(e){
    $("#wrapper").removeClass("toggled");
});



function largura_container(){
    var larguraContainer = $('header .container').width() - 90;    
    $('header #menu-toggle').css('margin-left',''+larguraContainer+'px');    
}

largura_container();

 $(window).resize(function () {
	   largura_container();
	});

});


jQuery(document).ready(function(){

  $(function(){
      $("#typed1").typed({
          strings: ["nossa equipe", "nosso design", "nossas idéias"],
          typeSpeed: 50,
          backDelay: 500,
          loop: false,
          contentType: 'html', // or text
          loopCount: false,
          callback: function(){ foo(); },
          resetCallback: function() { newTyped(); }
      });
  });
 
  $('.chamada').localScroll();
  $('.menu').localScroll();  


});


document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('particles'), {
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
});
var intro = document.getElementById('intro');
intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
}, false);






$(function(){      
      var $container = $('.view-portfolio-home2');
      $container.isotope({
        itemSelector : '.item'
      });
      $('#filters a').click(function(){
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector });
        return false;
      });      
      
      $(window).resize(function () {
        $container
          .isotope('reLayout');
        return false;
      });
});

