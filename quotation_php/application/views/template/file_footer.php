<!-- start footer -->
<div class="col-md-12 mr-footer no-padding-lr">
    <footer class="site-footer">
        <div class="text-right">
            2017&copy; codebee
            <a id="back-to-top" href="#" class="go-top text-center">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
</div>
<!-- end footer -->

</body>
    <!-- script js -->
    <script src="<?php echo base_url("assets/js/jquery/jquery.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootbox.min.js"); ?>"></script>
    <!-- script for scrollbar (html and toggle bar) -->
    <script src="<?php echo base_url("assets/js/jquery.scrollTo.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.nicescroll.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/js/scrollbar.js"); ?>"></script>
    <!-- script for toggle (header hamburger bar) -->
    <script src="<?php echo base_url("assets/js/menu-toggle.js"); ?>"></script>
    <!-- script for datatable -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.dataTables.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/dataTables.bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/dataTables.responsive.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/responsive.bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/init_datatable.js"); ?>"></script>
    <!-- script switch toggle on/off -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/init_switch.js"); ?>"></script>
    <!-- script for button back to top (footer) -->
    <script src="<?php echo base_url("assets/js/backtotop.js"); ?>"></script>
    <script>
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
                    window.location.href = "<?php echo base_url('html/register.html') ?>";
                }else {

                }
            }
            });
        });
        }
    </script>
    
</html>