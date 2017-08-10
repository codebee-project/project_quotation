<?php $this->load->view('template/file_header.php'); ?>

<!-- start call url -->
<?php
  $type_list = base_url('home/view_quotation_type');
?>
<!-- end call url -->

<!-- start wrapper/content -->
<div id="wrapper" class="col-md-12 no-pad-lr">
    <!-- page content -->
    <div id="page-content-wrapper">
        <div class="container-fluid no-padding-lr">
            <div class="row">
                <div class="col-lg-12">
                
                    <!-- main-content start -->
                    <section id="main-content">
                    
                      <div class="font-regular edit-quo-navigator">
                    
                        <!-- navigation -->
                        <div class="font-size-navi">
                          <div class="dis-inblock bg-white-gray">
                            <span>You are here : </span>
                          </div>
                          <span>Webstie Setting</span>
                          <i class="fa fa-angle-right"></i>
                          <span class="a-hover">
                            <a href="<?php echo $type_list ?>" class="color-dark-gray-h">Quotation Type</a>
                          </span>
                          <i class="fa fa-angle-right"></i>
                          <span class="color-dark-red">Add Quotation Type</span>
                        </div>
                              
                        <div class="mr-header font-regular header-edit-quo no-padding-lr">
                          <span><i class="fa fa-angle-right"></i> Add Quotation Type</span>
                        </div>
                              
                        <!-- start form -->
                        <div class="col-md-12 col-sm-12 no-padding-lr font-18">
                          <form class="form">
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_quoType" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Quotation Type :
                                <span class="color-dark-red">*</span>
                              </span>
                              <div class="col-sm-9 n-pad mr-t-input">
                                <input type="text" class="form-control" id="ip_quoType" placeholder="Please enter quotation type">
                              </div>
                            </div>
                    
                            <!-- btn save -->
                            <div class="col-md-offset-4 col-md-4 col-sm-offset-2 col-sm-8 text-center mr-btn-profile n-pad">
                              <button type="button" class="btn btn-pass btn-quo-type">Save</button>
                            </div>
                          
                          </form>
                        </div>
                        <!-- end form -->
                    
                      </div>
                    
                    <!-- main-content end -->
                    </section>
                    
                    <section>
                      <!--footer start-->
                      <div class="col-md-12 mr-footer no-padding">
                          <footer class="site-footer">
                              <div class="text-center">
                                  2017&copy; codebee
                                  <a href="#" class="go-top">
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