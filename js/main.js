$(document).ready(function() {

	var result = 100 / (($('.menu ul li').size())+2);
	console.log(result);
	
	$('.toggler__center').click(function() {
	    $('.menu').toggleClass('gocenter');
	     $('.swiper-wrapper').css('-webkit-transform','translateX(-'+result+'%)'); 
	});
	
	$('.menu a').click(function() {
	    $('.menu').toggleClass('gocenter');
	});
	
	$('.menu li:nth-child(2) a').click(function() {
	    
	    $('.swiper-wrapper').css('-webkit-transform','translateX(-'+(result*2)+'%)');
	});
	$('.menu li:nth-child(3) a').click(function() {
	    $('.swiper-wrapper').css('-webkit-transform','translateX(-'+(result*3)+'%)');
	});
	$('.menu li:nth-child(4) a').click(function() {
	    $('.swiper-wrapper').css('-webkit-transform','translateX(-'+(result*4)+'%)');
	});
	$('.menu li:nth-child(5) a').click(function() {
	    $('.swiper-wrapper').css('-webkit-transform','translateX(0)');
	});
	
	/*
function changeName(){
	var swiper = $('section');
	
		if(swiper.hasclass('dribbble') &&! swiper.hasclass('swiper-slide-active')){
			document.$('.title').html("Dribbble");
		}
	}
*/
});

 