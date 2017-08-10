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
                    
                      <div class="font-regular menu-header-profile">
                    
                        <div class="col-md-12 col-sm-12 font-regular no-padding-lr header-edit-quo">
                          <span><i class="fa fa-angle-right"></i> Edit Profile</span>
                        </div>
                              
                        <!-- start form  profile-->
                        <div class="col-md-12 col-sm-12 no-padding-lr font-18">
                          <form class="form">
                              <div class="col-md-12 col-sm-12 box-profile font-18 font-regular color-dark-gray-h">
                    
                                <!-- start img file -->
                                <div class="col-md-offset-4 col-md-4 col-sm-12 text-center mr-img-file">
                                  <img src="../../html/assets/img/profile.png" alt="profile">
                                </div>
                                
                                <div class="col-md-offset-4 col-md-4 col-sm-12 text-center mr-img-btn">
                                  <label for="upload-file" class="btn-edit font-light">
                                    <span class="">Edit photo</span>
                                  </label>
                                  <input type="file" name="photo" id="upload-file" accept="image/*" />
                                </div>
                                <!-- end img file -->
                                
                                
                                <!-- start form profile -->
                                <div class="col-md-12 col-sm-12 n-pad">
                                
                                    <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                                      <span for="sp_email" class="col-sm-3 control-label font-regular text-l n-pad">Email Address :</span>
                                      <div class="col-sm-9 n-pad">
                                        <input type="email" class="form-control" id="ip_email" placeholder="Email address" disabled="disabled" value="example@gmail.com">
                                      </div>
                                    </div>
                                
                                    <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                                      <span id="sp_name" class="col-sm-3 control-label font-regular text-l n-pad">Name :</span>
                                      <div class="col-sm-9 n-pad">
                                        <input type="text" class="form-control" id="ip_name" placeholder="Name">
                                      </div>
                                    </div>
                                </div>
                                  
                                <div class="col-md-offset-4 col-sm-8 col-sm-offset-2 col-md-4 text-center mr-btn-profile n-pad">
                                  <button type="button" class="btn btn-profile btn-quo-type">Save change</button>
                                </div>
                    
                              </div>
                          </form>
                        </div>
                    
                        <!-- end form profile -->
                    
                    <!-- password-content start -->
                        <div class="col-md-12  col-sm-12 font-regular no-padding-lr header-edit-quo mr-t-changepass n-pad">
                          <span><i class="fa fa-angle-right"></i> Change Password</span>
                        </div>    
                    
                        <div class="col-md-12 col-sm-12 box-profile mr-box-editpro font-18 font-regular color-dark-gray-h">
                    
                          <!-- start form pass -->
                          <div class="col-md-12 col-sm-12 n-pad">
                            <form class="form">
                    
                              <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                                <span id="sp_curPass" class="col-sm-3 control-label font-regular text-l n-pad">Current Password :</span>
                                <div class="col-sm-9 n-pad">
                                  <input type="password" class="form-control" id="ip_curPass" placeholder="Please enter current password">
                                </div>
                              </div>
                    
                              <div class="form-group mr-form-profile mr-newPass col-md-12  col-sm-12 no-padding-lr">
                                <span id="sp_newPass" class="col-sm-3 control-label text-l font-regular n-pad">New Password :</span>
                                <div class="col-sm-9 n-pad">
                                  <input type="password" class="form-control" id="ip_newPass" placeholder="Please enter new password">
                                </div>
                              </div>
                    
                              <div class="form-group mr-descript col-md-12 col-sm-12 no-padding-lr">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9 n-pad">
                                  <span class="color-light-gray font-17 font-light f-edit-profile">Please enter your password over 6 characters.</span>
                                </div>
                              </div>
                    
                              <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                                <span id="sp_conPass" class="col-sm-3 control-label text-l font-regular n-pad">Confirm New Password :</span>
                                <div class="col-sm-9 n-pad">
                                  <input type="password" class="form-control" id="ip_newPass" placeholder="Please enter confirm new password">
                                </div>
                              </div>
                              
                              <div class="col-md-offset-4 col-md-4 col-sm-8 col-sm-offset-2 text-center mr-btn-profile n-pad">
                                <button type="button" class="btn btn-pass btn-quo-type btn-quo-type">Save change</button>
                              </div>
                    
                            </form>
                          </div>
                          <!-- end form pass -->
                          
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