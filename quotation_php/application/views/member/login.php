<?php $this->load->view('template/file_header_member.php'); ?>
<!-- start call url -->
<?php
  $regist = base_url('home/view_register');
  $forgot = base_url('home/view_forgot');
?>
<!-- end call url -->

  <div id="outer-center" class="col-md-12 text-center row-height ">
      <div  class="col-md-4 box-login inner">
          <div class="col-md-12 mr-logo n-pad">
            <img alt="logo" src="https://www.codebee.co.th/intern_project/quotation/assets/img/logo.png" class="re-size-logo" />
          </div>
          <div class="col-md-12 mr-text-login n-pad">
            <span class="text-login color-dark-gray-h">You already have an account? Sign in here.</span>
          </div>
            <div class="col-md-12 mr-form-input n-pad">
              <form>
                <div class="mr-text-login inner-addon left-addon">
                  <i class="fa fa-user fa-lg"></i>      
                  <input type="email" id="log_email" class="form-control" placeholder="Email address" />
                </div>
                <div class="mr-bot-pass inner-addon left-addon">
                  <i class="fa fa-lock fa-lg"></i>      
                  <input type="password" id="log_pass" class="form-control" placeholder="Password" />
                </div>
                <div class="form-group text-l font-responsive">
                  <span class="a-hover"><a href="<?php echo $forgot; ?>" class="color-dark-red">Forgot password?</a></span>
                </div>
                <a href="dashboard.html" class="btn btn-login font-regular">Sign in</a>
              </form>
              <div class="col-md-12 text-or">
                <span class="color-light-gray">or</span>
              </div>
              <div class="form-group">
                <a href="#" class="btn btn-fb font-regular">Connect With Facebook</a>
              </div>
          </div>
          <div class="col-md-12 font-regular n-pad font-responsive">
              <span class="color-dark-gray-h">Don't have an account? </span>
              <span class="a-hover"><a href="<?php echo $regist; ?>" class="color-dark-red">REGISTER NOW ></a></span>
          </div>              
        
      </div>
  </div>

<?php $this->load->view('template/file_footer_member.php'); ?>


