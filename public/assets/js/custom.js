var flag=1;
$(document).ready(function() {
	$('.dropdown-link').on('click',function(){
		var drop_evt = $(this);
		if(drop_evt.hasClass('active'))
		{
			$('.dropdown-link').removeClass('active');
			$('.dropdown').removeClass('opened');
		}
		else{
			$('.dropdown-link').removeClass('active');
			$('.dropdown').removeClass('opened');
			drop_evt.addClass('active');
			drop_evt.next('.dropdown').addClass('opened');
		}
	});
	$('.navi-link').click(function(){
		if($(this).hasClass('active')){
			$(this).next('.navi-sub').slideUp();
			$(this).removeClass('active');
		}
		else{
			$('.navi-sub').slideUp();
			$('.navi-link').removeClass('active');
			$(this).next('.navi-sub').slideDown();
			$(this).addClass('active');
		}
		//$('.navi-sub').not($(this).parent('a').siblings('.navi-sub')).slideUp('slow');
		/*$(this).next('.navi-sub').slideToggle();
		$(this).toggleClass('active');*/
	});
	/*menu-bar-link*/
	$('.search-link').on('click',function(){
		//$('.search-link').addClass('active');
		$('.search-bar').addClass('z-index1');
		$('.search-area-div').addClass('opacity1');
		$('header').addClass('search-opened');
		$('.search-bar-base').addClass('base-opened');
		setTimeout(function(){
			$('.search-bar').addClass('search-bar-move-top');
			$('.search-bar-base').addClass('search-bar-base-move-top');
			$('.search-term').addClass('search-type');
			flag=2;
			$('.close-btn').addClass('show');
		},400);

	});
	$('.close-btn').on('click',function(){
		if(flag == 2){
			closeSearch()
		}
	});


    $(".explore-tab").click(function(e){
        $(".explore-tab").removeClass('active');
        $(this).addClass('active');

    })

});
function closeSearch(){
	flag=1;
	//$('.search-link').addClass('active');
	$('.close-btn').removeClass('show');
	$('.search-term').animate({'opacity':0},200);
	$('.search-term').removeClass('search-type');
	$('.search-bar').removeClass('search-bar-move-top');
	$('.search-bar-base').removeClass('search-bar-base-move-top');
	setTimeout(function(){
		$('header').removeClass('search-opened');
	},300);
	setTimeout(function(){
		$('.search-bar-base').delay(300).animate({'opacity':0},500);
		setTimeout(function(){
			$('.search-term').removeAttr('style');
			$('.search-area-div').removeClass('opacity1');
			setTimeout(function(){
				$('.search-bar').removeClass('z-index1');
				$('.search-bar-base').removeClass('base-opened');
				$('.search-bar-base').removeAttr('style');
				setTimeout(function(){
				},350);
			},500);
		},350);
	},300);
}
var elem = $('#main-container');
if(elem.length){
	for (var i = 1; i <= 20; i++) {
		document.getElementById('main-container').innerHTML += '<div class="position-absolute glowLine line'+i+'"></div>'
	}
	var allButtons = document.querySelectorAll('.glowLine');
	allButtons.forEach(function(b, i){
	b.addEventListener('click', function(){
		alert(i + 1)
	})
	})
}
else{}

$(window).scroll(function(){
	 "use strict";
	if ($(this).scrollTop() > 100){
		$('header').addClass('small-header');
	} else {
		$('header').removeClass('small-header');
	}
});
var slide_id=1;
$(document).ready(function() {
	addRemoveStyle();
});
var win_width,win_height,slideshow_img_ht;
function addRemoveStyle(){
	"use strict";
	win_width = $(window).width();
	win_height = $(window).height();
	investmentHT();
}
$(window).resize(function() {
	"use strict";
	setTimeout(function(){
		addRemoveStyle();
	},100)

});
$(window).load(function(){

});
$(document).mouseup(function(e)
{
	"use strict";
	var dropdown1 = $('.dropdown');
	var dropdown2 = $('.dropdown-link');
	if (!dropdown1.is(e.target) && dropdown1.has(e.target).length === 0)
	{
		if (!dropdown2.is(e.target) && dropdown2.has(e.target).length === 0)
		{
			$('.dropdown-link').removeClass('active');
			$('.dropdown').removeClass('opened');
		}
	}
	var navi1 = $('.navi-sub');
	var navi2 = $('.navi-link');
	if (!navi1.is(e.target) && navi1.has(e.target).length === 0)
	{
		if (!navi2.is(e.target) && navi2.has(e.target).length === 0)
		{
			$('.navi-sub').slideUp();
			$('.navi-link').removeClass('active');
		}
	}
	var search1 = $('.search-bar-base');
	var search2 = $('.search-bar');
	if (!search1.is(e.target) && search1.has(e.target).length === 0)
	{
		if (!search2.is(e.target) && search2.has(e.target).length === 0)
		{
			$('.close-btn').trigger('click');
		}
	}
});

function investmentHT(){
	var max = -1;
    var h;
    $('.investment-box').each(function () {
        $('.investment-box').css({ 'height': 'auto' });
        h = $(this).innerHeight();
        max = h > max ? h : max;
		$('.investment-box').removeAttr('style');
       // $('.investment-box').css({ 'height': max });
    });
	$('head').append('<style type="text/css">.investment-box{height:'+max+'px}</style>');

}
