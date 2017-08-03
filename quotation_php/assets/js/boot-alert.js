$(document).ready(function() {
	tem_logout();
});

var base_url = "<?php echo base_url(); ?>";

function tem_logout() {
$(document).on("click", "#logout", function(e) { //click id:logout for run function
	bootbox.confirm({
		message: "You want to logout?", //message on alert
		buttons: {
			confirm: { //button confirm
				label: 'Yes',
				className: 'btn-con'
			},
			cancel: { //button cancel
				label: 'No',
				className: 'btn-can'
			}
		},
	callback: function (result) { //callback for event confirm or cancel
		if(result == true){
			alert(base_url);
		    window.location.href = "base_url"+"home";
		}else {

		}
	}
	});
});
}