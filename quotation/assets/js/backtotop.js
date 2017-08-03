$(document).ready(function(){
	totop();
});

function totop() {
	//function back to top -> click for back to top page.
	$('#back-to-top').on('click', function (e) {
		e.preventDefault();
		$('html,body').animate({
			scrollTop: 0
		}, 700);
	});
}