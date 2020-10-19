	    function showmenu() {
			$('html').css('height', '100%');      
	      	$('html').css('overflow-y', 'hidden');	      	
	      	$('.menu-wall').css('visibility', 'visible');      
	      	$('ul.menu').css('visibility', 'visible');      
	      	$('ul.menu').css('top', '30%');
	      	$('ul.menu').css('transition', 'top 0.5s');
	    }
	    function hidemenu() {
	      	$('html').css('height', 'auto');
	      	$('html').css('overflow-y', 'scroll');	      	
	      	$('.menu-wall').css('visibility', 'hidden');
	      	$('ul.menu').css('visibility', 'hidden');
	      	$('ul.menu').css('top', '25%');
	    }