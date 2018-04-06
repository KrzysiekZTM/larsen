var $navWrapper = $('.nav-wrapper');
var $nav = $('nav');
var $wrapper = $('.wrapper');
var $wrapperWidth = $wrapper.width();
var $navHeight = $nav.outerHeight();
var $languageMenu = $('.language-menu');
var $logo = $('.logo').html();
var $work = $('.work');

//nav resize
$(window).bind('resize load', function(){
    $wrapperWidth = $wrapper.width();
    $navHeight = $nav.outerHeight();
    $navWrapper.height($navHeight);
    $('.nav-container').css('maxWidth', $wrapperWidth);
});

//open mobile nav
$('.menu-trigger').click(function(){
	$(this).toggleClass('menu-trigger-active');
	$('.mobile-list').slideToggle();
});

//navigation scroll effect
$(window).scroll(function(){
    if(!$nav.hasClass('fixed-nav')){
        if($(window).scrollTop()>500){
            $nav.addClass('fixed-nav');
            $('.logo').html('<img src="/larsen/img/logo-scroll.png" alt="larsen-logo"></img>')
        }
    }else{
        if($(window).scrollTop()<500){
            $nav.removeClass('fixed-nav');
            $('.logo').html($logo);
        }
    }
});

//show language choise on desktop
$languageMenu.hover(function(){
    $('ul', this).slideToggle(400);
});


//work ovelay show

$('.work-overlay').hover(function(){
    $(this).css('opacity', 1);
}, function(){
    $(this).css('opacity', 0);
});


