
  
$( document ).ready(function() {
	  $('.navbar-toggle, .hamburger-menu').click(function(){
		  $('.navbar-toggle').toggleClass('navbar-on');
		  $('.hamburger-menu').fadeToggle();
		  $('.hamburger-menu').removeClass('nav-hide');
	});
});
  