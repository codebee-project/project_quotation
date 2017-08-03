$(document).ready(function(){
	//screen_center();
	wh_run();
	alert("มาใช้ของเค้าทำมายย อิอิ ><");
});

var hTop;
var two = 2;
var wWidth = $(window).width();
var wHeight = $(window).height();
var leftbox = (wWidth - $('.box-login').outerWidth())/two;
var topbox = (wHeight - $('.box-login').outerHeight())/two;
var locations = "https://www.codebee.co.th/intern_project/quotation/";
var login = "login.html";
var forgot = "forgot.html";
var register = "register.html";

function screen_center() {
	if(window.location == locations+login) { // if for location login.html
		if (wWidth <= 374) {
			hTop = 397;
			topbox = ((wHeight - hTop)/two);
			wh_run(topbox);
		} else if (wWidth >= 375 && wWidth <= 411) {
			hTop = 434;
			topbox = ((wHeight - hTop)/two);
			wh_run(topbox);
		} else if (wWidth >= 412 && wWidth <= 599) {
			hTop = 453;
			topbox = ((wHeight - hTop)/two);
			wh_run(topbox);
		} else if (wWidth >= 600 && wWidth <= 767) {
			hTop = 534;
			topbox = ((wHeight - hTop)/two);
			wh_run(topbox);
		}
	} else if (window.location == locations+forgot) { // if for location forgot.html
		if (wWidth <= 374) {
			hTop = 311;
			topbox = ((wHeight - hTop)/two);
			wh_run(topbox);
		} else if (wWidth >= 375 && wWidth <= 411) {
			hTop = 272;
			topbox = ((wHeight - hTop)/two);
			wh_run(topbox);
		} else if (wWidth >= 412 && wWidth <= 599) {
			hTop = 257;
			topbox = ((wHeight - hTop)/two);
			wh_run(topbox);
		} else if (wWidth >= 600 && wWidth <= 767) {
			hTop = 266;
			topbox = ((wHeight - hTop)/two);
			wh_run(topbox);
		}
	} else if (window.location == locations+register){ // if for location register.html
		if (wWidth <= 374) {
			hTop = 560;
			topbox = ((wHeight - hTop)/two);
			wh_run(topbox);
		} else if (wWidth >= 375 && wWidth <= 411) {
			hTop = 538;
			topbox = ((wHeight - hTop)/two);
			wh_run(topbox);
		} else if (wWidth >= 412 && wWidth <= 599) {
			hTop = 527;
			topbox = ((wHeight - hTop)/two);
			wh_run(topbox);
		} else if (wWidth >= 600 && wWidth <= 767) {
			hTop = 561;
			topbox = ((wHeight - hTop)/two);
			wh_run(topbox);
		}
	}
}

function wh_run() {
	$(window).resize(function(){
		$('.box-login').css({
			position:'absolute',
			left: leftbox,
			top: topbox
		});
	});	
	// To initially run the function:
	$(window).resize();	
}

function check_alert() {
	alert("width : "+$(window).width()+"\n"+"height : "+$(window).height());
	alert("outerWidth : "+$('.box-login').outerWidth()+"\n"+"outerHeight : "+$('.box-login').outerHeight());
}