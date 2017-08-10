<?php $this->load->view('template/file_header.php'); ?>

<!-- start call url -->
<?php
  $contact_list = base_url('home/view_contact_list');
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
                        <div class="dis-inblock bg-white-gray">
                              <span>You are here : </span>
                        </div>
                        <span class="a-hover">
                          <a href="<?php echo $contact_list ?>" class="color-dark-gray-h">Contact</a>
                        </span>
                        <i class="fa fa-angle-right"></i>
                          <span class="color-dark-red">Edit Contact</span>
                                  
                        <div class="mr-header font-regular header-edit-quo no-padding-lr">
                            <span><i class="fa fa-angle-right"></i> Edit Contact</span>
                        </div>
                              
                            <!-- start form -->
                        <div class="col-md-12 no-padding-lr font-18">
                          <form class="form">
                    
                            <div class="form-group mr-form-profile col-sm-12 no-padding-lr">
                              <span id="sp_comName" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Company Name :
                                <span class="color-dark-red">*</span>
                              </span>
                              <div class="col-sm-9 no-padding-lr">
                                <input type="text" class="form-control" id="ip_comName" placeholder="Please enter company name" value="codebee">
                              </div>
                            </div>
                    
                            <div class="form-group mr-form-profile col-sm-12 no-padding-lr">
                              <span id="sp_comName" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Contact Name :
                                <span class="color-dark-red">*</span>
                              </span>
                              <div class="col-sm-9 no-padding-lr">
                                <input type="text" class="form-control" id="ip_conName" placeholder="Please enter contact name" value="John Smith">
                              </div>
                            </div>
                    
                          <!-- genauto input email start  -->
                            <div class="form-group mr-form-profile col-sm-12 no-padding-lr">
                              <span id="sp_email" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Email :</span>
                              <div class="input_fields_wrap col-sm-9 no-padding-lr">
                                <div class="col-md-12 dis-inblock no-padding-lr w-input">
                                  <input type="email" class="form-control dis-inblock control-input" id="exampleInputEmail1" placeholder="Please enter email address" value="smith.js@gmail.com">
                                  <i id="add-email" class="fa fa-plus-circle control-icon-plus control-pd-icon-plus"></i>
                                </div>
                              </div>
                            </div>
                          <!-- genauto input email end  -->
                    
                          <!-- genauto input email start  -->
                            <div class="form-group mr-form-profile col-sm-12 no-padding-lr">
                              <span id="sp_telephone" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Telephone :</span>
                              <div class="input_field_wrap col-sm-9 no-padding-lr">
                                <div class="col-md-12 dis-inblock no-padding-lr w-input">
                                  <input type="Telephone" class="form-control dis-inblock control-input" id="exampleInputTel1" placeholder="Please enter telephone number" value="091-1150292">
                                  <i id="add-tel" class="fa fa-plus-circle control-icon-plus control-pd-icon-plus"></i>
                                </div>
                              </div>
                            </div>
                          <!-- genauto input email end  -->
                          
                            <!-- button save change -->
                            <div class="col-md-offset-4 col-md-4 col-sm-8 col-sm-offset-2 text-center mr-btn-profile mr-bot-btn n-pad">
                              <button type="button" class="btn btn-pass btn-quo-type">Save Change</button>
                            </div>
                    
                          </form>
                        </div>
                      <!-- end form -->
                    
                      </div>
                    
                    <!-- end main-content -->
                    </section>
                    
                    <section id="footer">
                      <!--footer start-->
                      <div class="col-md-12 mr-footer no-padding">
                          <footer class="site-footer">
                              <div class="text-center">
                                  2017&copy; codebee
                                  <a id="back-to-top" href="#" class="go-top">
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

<!-- genauto -->
<script type="text/javascript" src="<?php echo base_url("assets/js/genauto.js"); ?>"></script>