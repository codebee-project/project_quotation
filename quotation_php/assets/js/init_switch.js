// JavaScript Document
$(document).ready(function() {
	chk_status();
});

function chk_status() {
	//for check status active/unactive
	$('input[type=checkbox]').change(function() {
	  if ($(this).is(':checked')) {
		  alert('checked');
		  $(this).removeClass("tr-color-off")
	  } else {
		  alert('unchecked');
		  $(this).addClass("tr-color-off")
	  }
	});
}