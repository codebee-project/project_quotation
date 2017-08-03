<?php $this->load->view('template/file_header_member.php'); ?>
<!-- start call url -->
<?php
  $login = base_url('home/index');
?>
<!-- end call url -->

  <div id="outer-center" class="col-md-12 text-center row-height">
      <div  class="col-md-4 box-regis inner">

        <div class="col-md-12 mr-text-forgot">
            <span class="text-regis">Register</span>
        </div>

        <div class="col-md-12 mr-form-input-forgot n-pad">
          <form class="mr-form">
          <!--upload profile-->
              <div class="col-md-12 form-group">
                <label for="upload-photo">
                  <img src="<?php echo base_url("assets/img/profile.png"); ?>" alt="profile" class="img-circle img-regis">
                  <i class="fa fa-camera fa-2x icon-camera"></i>
                </label>
                <input type="file" name="photo" id="upload-photo" />
              </div>

          <!--name-->
              <div class="col-md-12 mr-text-login inner-addon left-addon no-padding-lr">
                <i class="fa fa-address-card fa-lg"></i>      
                <input type="text" id="reg_name" class="form-control" placeholder="Name" />
              </div>

          <!--email-->
              <div class="col-md-12 mr-text-login inner-addon left-addon no-padding-lr">
                <i class="fa fa-user  fa-lg"></i>      
                <input type="email" id="reg_email" class="form-control" placeholder="Email address" />
              </div>

          <!--pass-->
              <div class="col-md-12 mr-bot-pass inner-addon left-addon no-padding-lr">
                <i class="fa fa-lock fa-lg"></i>  
                <input type="password" id="reg_pass" class="form-control" placeholder="Password">
              </div>
              <div class="col-md-12 form-group text-l no-padding-lr">
                <span class="text-descrip color-light-gray">Please enter your password over 8 characters.</span>
              </div>

          <!--con pass-->
              <div class="col-md-12 form-group inner-addon left-addon no-padding-lr">
                  <i class="fa fa-lock fa-lg"></i>  
                    <input type="password" id="reg_con-pass" class="form-control" placeholder="Confirm Password">
              </div>

              <button type="submit" class="btn btn-login font-regular">Register</button>

          </form>

          <div class="col-md-12 text-or">
            <span>or</span>
          </div> 
          <div class="form-group">
            <a class="btn btn-fb font-regular">Connect With Facebook</a>
          </div>

      <!-- next > register -->
          <div class="col-md-12 font-regular">
              <span class="color-dark-gray-h">Return to</span><span class="a-hover"><a href="<?php echo $login; ?>" class="color-dark-red"> SING IN ></a></span>
          </div>

        </div>
      </div>
  </div>

<?php $this->load->view('template/file_footer_member.php'); ?>