<?php $this->load->view('template/file_header.php'); ?>

<!-- start wrapper/content -->
<div id="wrapper" class="col-md-12 no-pad-lr">
    <!-- page content -->
    <div id="page-content-wrapper">
        <div class="container-fluid no-padding-lr">
            <div class="row">
                <div class="col-lg-12">
                
                    <!--main content start-->
                    <section id="main-content">
                    
                    <div class="font-header-dash">
                        <section id="Date">
                            <div class="col-md-12 font-regular no-padding-lr header-edit-quo">
                                <i class="fa fa-angle-right"></i> 
                                <span>Dashboard</span>
                            </div>
                            <div class="col-md-12 col-sm-12 no-padding-lr mr-box-summary">
                                <form>
                                    <div class="col-md-10 col-sm-10 no-padding-l no-pd-r">
                                        <div class="input-daterange input-group date" id="datepicker">
                                            <input type="text" class="input-sm form-control" name="start" />
                                            <span class="input-group-addon">To</span>
                                            <input type="text" class="input-sm form-control" name="end" />
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2 no-padding-r no-pd-l">
                                        <button type="submit" class="btn btn-submit mr-t-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </section>
                        
                        <section id="total">
                            <div class="col-md-12 col-sm-12 text-color-summary no-padding-lr mr-box-summary">
                            
                            <!-- total quotation -->
                                <div class="col-md-3 col-sm-6 pd-box1 no-pd-r">
                                    <div class="bg-color-box1">
                                        <div class="col-md-3 top-icon-summary pd-l-ipad">
                                            <i class="fa fa-file-text fa-3x icon-summary"></i>
                                        </div>
                                        <div class="col-md-9 text-right pd-r-ipad">
                                            <div class="small">Total Quotation</div><br/ >
                                            <div class="huge">200</div>
                                        </div>
                                    </div>
                                </div>
                            <!-- total invoice -->
                                <div class="col-md-3 col-sm-6 pd-box2 no-pd-lr no-pd-r-sm">
                                    <div class="bg-color-box2">
                                        <div class="col-md-3 top-icon-summary pd-l-ipad">
                                            <i class="fa fa-file-text fa-3x icon-summary"></i>
                                        </div>
                                        <div class="col-md-9 text-right mr-l-box2 pd-r-ipad">
                                            <div class="small">Total Invoice</div><br/ >
                                            <div class="huge">200</div>
                                        </div>
                                    </div>
                                </div>
                            <!-- total contact -->
                                <div class="col-md-3 col-sm-6 pd-box3 no-pd-lr no-pd-l-sm">
                                    <div class="bg-color-box3">
                                        <div class="col-md-3 top-icon-summary pd-l-ipad">
                                            <i class="fa fa-address-book fa-3x icon-summary"></i>
                                        </div>
                                        <div class="col-md-9 text-right mr-l-box3 pd-r-ipad">
                                            <div class="small">Total Contact</div><br/ >
                                            <div class="huge">200</div>
                                        </div>
                                    </div>
                                </div>
                            <!-- total company -->
                                <div class="col-md-3 col-sm-6 pd-box4 no-pd-l">
                                    <div class="bg-color-box4">
                                        <div class="col-md-3 top-icon-summary pd-l-ipad">
                                            <i class="fa fa-building fa-3x icon-summary"></i>
                                        </div>
                                        <div class="col-md-9 text-right pd-r-ipad">
                                            <div class="small">Total Company</div><br/ >
                                            <div class="huge">200</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    
                        <section id="Summary">
                                <!-- morris start-->
                                <div class="col-md-12 col-sm-12 no-padding-lr pd-l-ipad pd-r-ipad">
                                    <div class="col-md-6 col-sm-12 no-padding-lr mr-box-summary mr-t-panel">
                                        <i class="fa fa-angle-right"></i>
                                        <span class="font-size-h">Summary quotation working status</span>
                        
                                        <div class="content-panel panel-summary">
                                              <div class="panel-body">
                                                    <div class="col-md-8 col-sm-8 no-pd-lr"> 
                                                            <div id="hero-donut" class="graph"></div>
                                                    </div>
                                                    
                                                    <div class="text-descrip-summary col-md-4 col-sm-4 no-pd-lr">
                                                        <div class="col-md-12 mr-text-descrip-sum no-padding-lr">
                                                            <img alt="success" src="<?php echo base_url("assets/img/s-success.png"); ?>" />
                                                            <span class="padding-text-descrip-sum">Success</span>
                                                        </div>
                                                        <div class="col-md-12 mr-text-descrip-sum no-padding-lr">
                                                            <img alt="inprocess" src="<?php echo base_url("assets/img/s-inprocess.png"); ?>" />
                                                            <span class="padding-text-descrip-sum">Inprocess</span>
                                                        </div>
                                                        <div class="col-md-12 mr-text-descrip-sum no-padding-lr">
                                                            <img alt="wait" src="<?php echo base_url("assets/img/s-wait.png"); ?>" />
                                                            <span class="padding-text-descrip-sum">Wait</span>
                                                        </div>
                                                    </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                    </div>
                                
                                </div>
                                    
                                <div class="col-md-12 col-sm-12 no-padding-lr mr-t-panel">
                                    <div class="content-panel">
                                        <span class="font-size-h"><i class="fa fa-angle-right"></i> Quarter</span>
                                        <div class="panel-body no-padding-lr">
                                          <div id="hero-bar" class="graph"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12 col-xs-12 col-sm-12 no-padding-lr mr-b-das">
                                    <div class="col-md-12 col-xs-12 col-sm-12 text-left mr-text-descrip-sum2 no-pd-lr">
                                        <div class="col-xs-12 col-sm-3 mr-descrip-quarter">
                                            <img alt="success" src="<?php echo base_url("assets/img/s-success.png"); ?>" />
                                            <span class="padding-text-descrip-sum2">Success</span>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 mr-descrip-quarter">
                                            <img alt="inprocess" src="<?php echo base_url("assets/img/s-inprocess.png"); ?>" />
                                            <span class="padding-text-descrip-sum2">Inprocess</span>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 mr-descrip-quarter">
                                            <img alt="wait" src="<?php echo base_url("assets/img/s-wait.png"); ?>" />
                                            <span class="padding-text-descrip-sum2">Wait</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- morris end-->
                        </section>
                    </div>  
                    
                    <!--main content end-->
                    </section>
                    
                    <section>
                        <!--footer start-->
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
                        <!--footer end--> 
                    </section>

                </div>
            </div>
        </div>
    </div>
    <!-- page content -->
</div>
<!-- end wrapper/content -->

<?php $this->load->view('template/file_footer.php'); ?>

<!-- script for graph morris  -->
<script type="text/javascript" src="<?php echo base_url("assets/js/raphael-min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/morris-0.4.3.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/morris-conf.js"); ?>"></script>

<!-- datepicker -->
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-datepicker.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-datepicker.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/datepicker.js"); ?>"></script>