<?php $this->load->view('template/file_header.php'); ?>

<!-- start call url -->
<?php
  $company_list = base_url('Company/view_company_list');
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
                    
                      <!-- navigation -->
                      <div class="font-regular edit-quo-navigator">
                        <div class="font-size-nav1">
                          <div class="dis-inblock bg-white-gray">
                            <span>You are here : </span>
                          </div>
                          <span class="a-hover">
                            <a href="<?php echo $company_list ?>" class=" color-dark-gray-h">Company</a>
                          </span>
                          <i class="fa fa-angle-right"></i>
                          <span class="color-dark-red">Add Company</span>
                        </div>
                        <div class="mr-header font-regular header-edit-quo no-padding-lr">
                          <span><i class="fa fa-angle-right"></i> Add Company</span>
                        </div>
                    
                        <div class="no-padding-lr">
                        <!-- start form add_company -->
                          <div class="col-md-12 no-padding-lr font-18">
                          
                            <?php 
								$attributes = array('class' => 'form', 'method' => 'post', 'id' => 'form_add_company');
								echo form_open_multipart('Company/add_company', $attributes) 
							?>
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_comName" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Company Name :
                                <span class="color-dark-red">*</span>
                              </span>
                              <div class="col-sm-9 no-padding-lr">
                                <input type="text" class="form-control" id="ip_comName" name="ip_comName" placeholder="Please enter company name">
                              </div>
                            </div>
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_ident" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Identity :</span>
                              <div class="col-sm-9 no-padding-lr">
                                <input type="text" class="form-control" id="ip_ident" name="ip_ident" placeholder="Please enter identity">
                              </div>
                            </div>
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_address" class="col-sm-3 control-label font-regular no-padding-lr">Address :</span>
                              <div class="col-sm-9 no-padding-lr">
                                <textarea class="form-control" id="ip_comAddress" name="ip_comAddress" placeholder="Please enter company address" rows="3"></textarea>
                              </div>
                            </div>
                            
                    
                            <!-- start button save -->
                            <div class="col-md-offset-4 col-md-4 col-sm-8 col-sm-offset-2 text-center mr-btn-profile mr-bot-btn n-pad">
                              <button type="submit" class="btn btn-pass btn-quo-type">Save</button>
                            </div>
                            </form>
                          <!-- end form add_invoice -->
                          </div>
                        </div>
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
