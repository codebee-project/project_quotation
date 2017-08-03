$(document).ready(function(){
	scrollbar();
});

function scrollbar() {
//scroll bar for menu.
    $("#sidebar-wrapper").niceScroll(
	{styler:"fb",
	autohidemode: true,
	cursorcolor:"#d8322b",
	cursorwidth: '3',
	cursorborderradius: '10px',
	background: '#282828',
	spacebarenabled:false,
	cursorborder: ''});
//scroll bar for html.
    $("html").niceScroll(
	{styler:"fb",
	cursorcolor:"#d8322b",
	cursorwidth: '6',
	cursorborderradius: '10px',
	background: '#282828',
	spacebarenabled:false,
	cursorborder: '',
	zindex: '1000'});
	
}