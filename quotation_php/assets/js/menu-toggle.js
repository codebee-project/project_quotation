$(document).ready(function(){
	toggle();
});

var wWidth = $(window).width();

function toggle() {
	//check width from window and add class toggled.
	if(wWidth <= 767){
		$("#wrapper").addClass("toggled");
		$("#toggle-bar").addClass("toggled");
	}
	//when id:menu-toggle click function toggleClass just running
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
		$("#toggle-bar").toggleClass("toggled");
		$("#toggle-bar").removeClass("toggled-no-transition");
		opacity();
	});
}	

function opacity() {
	if(wWidth <= 767){
		//check id:wrapper has class toggled for add/remove opacity class.
		if($("#wrapper").hasClass("toggled")){
			$("body").removeClass("bg-block");
		} else {
			$("body").addClass("bg-block");
		}
	}
}