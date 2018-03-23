var $navWrapper = $('.nav-wrapper');
var $nav = $('nav');
var $wrapper = $('.wrapper');
var $wrapperWidth = $wrapper.width();
var $navHeight = $nav.outerHeight();


$(window).bind('resize load', function(){
    $wrapperWidth = $wrapper.width();
    $navHeight = $nav.outerHeight();
    $navWrapper.height($navHeight);
    $('.nav-container').css('maxWidth', $wrapperWidth);
});




$('.work').hover(
	function(){
		$('.work-overlay', this).fadeIn(400);
	},
	function(){
		$('.work-overlay', this).fadeOut(400);
	}

)

$('.menu-trigger').click(function(){
	$(this).toggleClass('menu-trigger-active');
	$('.mobile-list').slideToggle();
});





$(window).scroll(function(){
    if(!$nav.hasClass('fixed-nav')){
        if($(window).scrollTop()>500){
            $nav.addClass('fixed-nav');
            $('.logo').html('<img src="/larsen/img/logo-scroll.png" alt="larsen-logo"></img>')
        }
    }else{
        if($(window).scrollTop()<500){
            $nav.removeClass('fixed-nav');
        }
    }


});
