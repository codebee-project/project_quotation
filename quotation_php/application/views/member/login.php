<?php $this->load->view('template/file_header_member.php'); ?>

<!-- start call url -->
<?php
  $regist = base_url('home/view_register');
  $forgot = base_url('home/view_forgot');
  $pass_log = base_url('home/login');
?>
<!-- end call url -->

  <div id="outer-center" class="col-md-12 text-center row-height ">
      <div  class="col-md-4 box-login inner">
          <div class="col-md-12 mr-logo n-pad">
            <img alt="logo" src="<?php echo base_url('assets/img/logo.png'); ?>" class="re-size-logo" />
          </div>
          <div class="col-md-12 mr-text-login n-pad">
            <span class="text-login color-dark-gray-h">You already have an account? Sign in here.</span>
          </div>
            <div class="col-md-12 mr-form-input n-pad">

              <?php 
                $attributes = array('class' => 'form_horizontal',"method" => 'post', 'id' => 'form_login');
                echo form_open_multipart('member/check_login', $attributes);
              ?> <!-- form -->
                <div class="mr-text-login inner-addon left-addon">
                  <i class="fa fa-user fa-lg"></i>      
                  <input type="email" id="log_email" name="log_email" class="form-control" placeholder="Email address" />
                </div>
                <div class="mr-bot-pass inner-addon left-addon">
                  <i class="fa fa-lock fa-lg"></i>      
                  <input type="password" id="log_pass" name="log_pass" class="form-control" placeholder="Password" />
                </div>
                <div class="form-group text-l font-responsive">
                  <span class="a-hover"><a href="<?php echo $forgot; ?>" class="color-dark-red">Forgot password?</a></span>
                </div>
                <button type="submit" class="btn btn-login font-regular">Sign in</button>
              </form>
              <div class="col-md-12 text-or">
                <span class="color-light-gray">or</span>
              </div>
          <?php 
            $attributes = array('class' => 'form_horizontal',"method" => 'post', 'id' => 'fb_login');
            echo form_open_multipart('member/log_Facebook', $attributes);
          ?> 
              <input type="hidden" name="input_email" id="input_email"></input>
              <input type="hidden" name="input_password" id="input_password"></input>
              <input type="hidden" name="input_name" id="input_name"></input>
              <input type="hidden" name="input_image" id="input_image"></input>
              <div class="form-group">
                <a id="fb_login" href="#" class="btn btn-fb font-regular" onclick="loginFB();">Connect With Facebook</a>
              </div>
          </form>
          </div>
          <div class="col-md-12 font-regular n-pad font-responsive">
              <span class="color-dark-gray-h">Don't have an account? </span>
              <span class="a-hover"><a href="<?php echo $regist; ?>" class="color-dark-red">REGISTER NOW ></a></span>
          </div>              
        
      </div>
  </div>

<?php $this->load->view('template/file_footer_member.php'); ?>


