var loadFile = function(event) {
	var output = document.getElementById('img_profile');
	output.src = URL.createObjectURL(event.target.files[0]);
};