</body>

    <!-- script js -->
    <script src="<?php echo base_url("assets/js/jquery/jquery.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootbox.min.js"); ?>"></script>
    <!-- script for scrollbar (html and toggle bar) -->
    <script src="<?php echo base_url("assets/js/jquery.scrollTo.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.nicescroll.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/js/scrollbar.js"); ?>"></script>
    <!-- script for validate -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.validate.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/init_validate.js"); ?>"></script>
    <!-- script for facebook login -->
    <script src="<?php echo base_url("assets/js/fblogin.js"); ?>"></script>
    <!-- script for change image -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/onchange-image.js"); ?>"></script>
	<script type="text/javascript">
        $(document).ready(function() {
            check_ready();
        });

		function check_ready() {
        	var message = '<?php if(isset($alert)){ echo $alert;}; ?>';
        	if(message != "" && message != null){
        		bootbox.confirm({
        			title: "codebee",
        			message: message,
					buttons: {                    
						confirm: { //button confirm
	                        label: 'Yes',
	                        className: 'dis-none'
	                    },
	                    cancel: { //button cancel
	                        label: 'OK',
	                        className: 'btn-can'
	                    }
                	},
	                callback: function (result) { //callback for event confirm or cancel
		            }
	        	});
        	}
        }
    </script>

    <script>
    function loginFB(){
        fbLogin();
    }
    </script>


</html>