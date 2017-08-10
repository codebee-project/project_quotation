<?php $this->load->view('template/file_header.php'); ?>

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
                            <a href="../../html/management_user.html" class="color-dark-gray-h">Management User</a>
                          </span>
                          <i class="fa fa-angle-right"></i>
                          <span class="color-dark-red">Add User</span>
                        </div>
                    
                        <div class="mr-header font-regular header-edit-quo no-padding-lr">
                          <span><i class="fa fa-angle-right"></i> Add User</span>
                        </div>
                    
                    
                        <div class="no-padding-lr">
                          <!-- start form -->
                          <div class="col-md-12 no-padding-lr font-18">
                            <form class="form">
                    
                              <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                                <span id="sp_comName" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Name :
                                  <span class="color-dark-red">*</span>
                                </span>
                                <div class="col-sm-9 no-padding-lr">
                                  <input type="text" class="form-control" id="ip_userName" placeholder="Please enter name">
                                </div>
                              </div>
                    
                              <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                                <span id="sp_ident" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Email address :
                                    <span class="color-dark-red">*</span>
                                </span>
                                <div class="col-sm-9 no-padding-lr">
                                  <input type="text" class="form-control" id="ip_userEmil" placeholder="Please enter email address">
                                </div>
                              </div>
                    
                    
                              <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                                <span id="sp_address" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Password :
                                    <span class="color-dark-red">*</span>
                                </span>
                                <div class="col-sm-9 no-padding-lr">
                                  <input type="password" class="form-control" id="ip_userEmil" placeholder="Please enter password">
                                </div>
                              </div>
                              
                              <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                                <span id="sp_address" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Confirm password :
                                    <span class="color-dark-red">*</span>
                                </span>
                                <div class="col-sm-9 no-padding-lr">
                                  <input type="password" class="form-control" id="ip_userEmil" placeholder="Please enter confirm password">
                                </div>
                              </div>
                              
                              <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                                <span id="sp_address" class="col-sm-3 control-label font-regular no-padding-lr">Type :</span>
                                <div class="col-sm-9 no-padding-lr font-17 font-light">
                                  <label class="radio-inline add-radio">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1"> Super admin
                                  </label>
                                  <label class="radio-inline add-radio">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2"> Admin
                                  </label>
                                  <label class="radio-inline add-radio">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3" checked> Member
                                  </label>
                                </div>
                              </div>
                    
                              <!-- start button save -->
                              <div class="col-md-offset-4 col-md-4 col-sm-8 col-sm-offset-2 text-center mr-btn-profile mr-bot-btn n-pad">
                                <button type="button" class="btn btn-pass btn-quo-type">Save</button>
                              </div>
                          
                            </form>
                          </div>
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