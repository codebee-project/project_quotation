$(document).ready(function(){
	$(document).ready(function(){

		$(window).resize(function(){

		$('.box-login').css({
			position:'absolute',
			left: ($(window).width() - $('.box-login').outerWidth())/2,
			top: ($(window).height() - $('.box-login').outerHeight())/2
			});
		});
		// To initially run the function:
		$(window).resize();

	});
});

/*function check_alert() {
	alert("width : "+$(window).width()+"\n"+"height : "+$(window).height());
	alert("outerWidth : "+$('.box-login').outerWidth()+"\n"+"outerHeight : "+$('.box-login').outerHeight());	
}*/