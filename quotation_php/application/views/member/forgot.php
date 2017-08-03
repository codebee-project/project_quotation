<?php $this->load->view('template/file_header_member.php'); ?>
<!-- start call url -->
<?php
  $login = base_url('home/index');
?>
<!-- end call url -->

  <div id="outer-center" class="col-md-12 text-center row-height">
      <div  class="col-md-5 box-forgot inner">

          <div class="col-md-12 mr-text-forgot">
              <span class="text-forgot">Forgot Password</span>
          </div>

          <div class="col-md-12 form-group n-pad">
              <span class="text-login color-dark-gray-h">Enter your email address below to correct your password</span>
          </div>

          <div class="col-md-12 mr-form-input-forgot n-pad">
              <form>
              <!-- email user -->
                  <div class="mr-email-forgot inner-addon left-addon">
                    <i class="fa fa-user fa-lg"></i>      
                    <input type="text" class="form-control" placeholder="Enter your email address" />
                  </div>
              <!-- forgot -->
                  <div class="form-group text-l">
                      <span class="text-exmaple-forgot color-light-gray">*Example : example@exam.co.th</span>
                  </div>
              <!-- send email -->
              	<div class="form-group">
                  	<button type="submit" class="btn btn-send-mail">Send mail</button>
                  </div>
              </form>
      	<!-- next > register -->
              <div class="col-md-12 font-regular">
                  <span class="color-dark-gray-h">Return to</span><span class="a-hover"><a href="<?php echo $login; ?>" class="color-dark-red"> SING IN ></a></span>
              </div>
          </div>
      </div>
  </div>

<?php $this->load->view('template/file_footer_member.php'); ?>
