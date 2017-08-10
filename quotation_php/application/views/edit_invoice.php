<?php $this->load->view('template/file_header.php'); ?>

<!-- start call url -->
<?php
  $invoice_list = base_url('home/view_invoice_list');
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
                        <div class="font-size-nav1">
                          <div class="dis-inblock bg-white-gray">
                            <span>You are here : </span>
                          </div>
                          <span class="a-hover">
                            <a href="<?php echo $invoice_list ?>" class="color-dark-gray-h">Invoice</a>
                          </span>
                          <i class="fa fa-angle-right"></i>
                          <span class="color-dark-red">Edit Invoice</span>
                        </div>
                    
                        <div class="mr-header font-regular header-edit-quo no-padding-lr">
                          <span><i class="fa fa-angle-right"></i> Edit Invoice</span>
                        </div>
                              
                        <!-- start form  -->
                        <div class="col-md-12 no-padding-lr font-18">
                          <form class="form">
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_invNo" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Invoice No :
                                <span class="color-dark-red">*</span>
                              </span>
                              <div class="col-sm-9 no-padding-lr">
                                <input type="text" class="form-control" id="ip_invNo" placeholder="Please enter invoice no" value="Inv-1000002">
                              </div>
                            </div>
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_invFile" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Path File Invoice :
                                <span class="color-dark-red">*</span>
                              </span>
                              <div class="col-sm-9 no-padding-lr">
                                <!-- <label for="upload-file" class="btn-edit font-light">
                                    <i class="fa fa-file-text color-light-gray2"></i>
                                    <span class="">Choose file</span>
                                </label>
                                <input type="file" name="photo" class="dis-none" id="upload-file" />
                                <span class="color-light-gray2 font-17 font-light">Please choose file .pdf</span> -->
                                <input type="file" name="photo" class="dis-none" id="upload-file" accept="application/pdf" />
                                <span class="color-light-gray2 font-light font-17 font-form-des">Please choose file .pdf</span>
                              </div>
                            </div>
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_invFile" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Path File Receipt :
                              </span>
                              <div class="col-sm-9 no-padding-lr">
                                <input type="file" class="dis-none" id="upload-file" accept="application/pdf" />
                                <span class="color-light-gray2 font-light font-17 font-form-des">Please choose file .pdf</span>
                              </div>
                            </div>
                    
                          <!-- start button save change -->
                            <div class="col-md-offset-4 col-md-4 col-sm-8 col-sm-offset-2 text-center mr-btn-profile mr-bot-btn n-pad">
                              <button type="button" class="btn btn-pass btn-quo-type">Save Change</button>
                            </div>
                    
                          </form>
                        </div>
                        <!-- end form -->
                    
                      </div>
                    
                    <!-- main-content end -->
                    </section>
                    
                    <section id="footer">
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
