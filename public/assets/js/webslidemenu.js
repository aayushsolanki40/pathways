document.addEventListener("touchstart", function() {},false);  
$(function() {
	$('#wsnavtoggle').click(function () {
		//$('.wsmenucontainer').toggleClass('wsoffcanvasopener');
		if($(this).hasClass('active')){
			hideSubmenu();
			$('.navibar').removeClass('zindex');
		}
		else{
			$('.wsmenucontainer').addClass('wsoffcanvasopener');
			$('.animated-arrow').addClass('active');
			$('.navibar').addClass('zindex');
		}
	});
	$('.overlapblackbg').click(function () {
	  $('.wsmenucontainer').removeClass('wsoffcanvasopener');
		hideSubmenu();
	});

	$('.wsmenu-list> li').has('.wsmenu-submenu').find('> a').prepend('<span class="wsmenu-click subMenuLink"><i class="wsmenu-arrow fa fa-angle-down"></i></span>');
	
	$('.wsmenu-submenu > li').has('.third-column').find('h3').append('<span class="wsmenu-click subSubMenuLink"><i class="wsmenu-arrow fa fa-angle-down"></i></span>');
	$('.wsmenu-submenu > li').has('.third-column').find('.menu-list').prepend('<li class="menu-back"><div class="menu-back-link2"><span>Back</span></div></li>');
	
	$('.wsmenu-list > li').has('.megamenu').prepend('<span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span>');
	$('.subMenuLink').click(function(){
		$(this).toggleClass('ws-activearrow')
		.parent().siblings().children().removeClass('ws-activearrow');
		//$(".wsmenu-submenu, .megamenu").not($(this).siblings('.wsmenu-submenu, .megamenu')).slideUp('slow');
		//$(this).siblings('.wsmenu-submenu').slideToggle('slow');
		//$(this).siblings('.megamenu').slideToggle('slow');
		$(this).parents('.mobile-sub').addClass('slided');
		$(this).parent('a').parent('li').find('.wsmenu-submenu').addClass('showSubMenu');
	});
	
	$('.wsmenu-submenu li.menu-back .menu-back-link').click(function(){
		var menu_back=$(this);
		menu_back.parents('.mobile-sub').removeClass('slided');
		
		setTimeout(function(){
			menu_back.parents('li').find('.wsmenu-click').removeClass('ws-activearrow');
			menu_back.parents('li').find('.wsmenu-submenu').removeClass('showSubMenu');
		},400)	
	});
	
	$('.subSubMenuLink').click(function(){
		$(this).parents('.mobile-sub').addClass('slided2');
		$(this).parents('.third-column').find('.menu-list').addClass('showSubSubMenu');
	});
	
	$('.wsmenu-submenu li.menu-back .menu-back-link2').click(function(){
		var menu_back2=$(this);
		menu_back2.parents('.mobile-sub').removeClass('slided2');
		
		setTimeout(function(){
			menu_back2.parents('.third-column').find('.menu-list').removeClass('showSubSubMenu');
		},400)	
	});
	
	
	$('.wsmenu-list > li > ul > li').has('.wsmenu-submenu-sub').prepend('<span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span>');
	$('.wsmenu-list > li > ul > li > ul > li').has('.wsmenu-submenu-sub-sub').prepend('<span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span>');

	$('.wsmenu-click02').click(function(){
		$(this).children('.wsmenu-arrow').toggleClass('wsmenu-rotate');
		$(this).siblings('.wsmenu-submenu-sub').slideToggle('slow');
		$(this).siblings('.wsmenu-submenu-sub-sub').slideToggle('slow');
	
	});
	function hideSubmenu(){
		$('.wsmain').addClass('slidedBack');
		$('.overlapblackbg').addClass('bgdull');
		$('.animated-arrow').removeClass('active');
		setTimeout(function(){
			$('.wsmenucontainer').removeClass('wsoffcanvasopener');
			$('.mobile-sub').removeClass('slided');
			$('.mobile-sub').removeClass('slided2');
			$('.wsmain').removeClass('slidedBack');
			$('.wsmenu-submenu').removeClass('showSubMenu');
			$('.overlapblackbg').removeClass('bgdull');
			$('.menu-list').removeClass('showSubSubMenu');
		},400)	
	}

});