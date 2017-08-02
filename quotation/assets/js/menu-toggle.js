$(document).ready(function(){
	
	toggle();
});

var wWidth = $(window).width();

function toggle() {
	if(wWidth <= 767){
		$("#wrapper").addClass("toggled");
		$("#toggle-bar").addClass("toggled");
	}
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
		$("#toggle-bar").toggleClass("toggled");
		$("#toggle-bar").removeClass("toggled-no-transition");
	});
}