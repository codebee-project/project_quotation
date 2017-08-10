<?php $this->load->view('template/file_header.php'); ?>

<!-- start call url -->
<?php
  $quotation_list = base_url('home/view_quotation_list');
?>
<!-- end call url -->

<!-- start wrapper/content -->
<div id="wrapper" class="col-md-12 no-pad-lr">
    <!-- page content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
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
                          <span  class="a-hover">
                            <a href="<?php echo $quotation_list ?>" class="color-dark-gray-h">Quotation</a>
                          </span>
                          <i class="fa fa-angle-right"></i>
                          <span class="color-dark-red">Add Quotation</span>
                        </div>
                    
                        <div class="mr-header font-regular header-edit-quo no-padding-lr">
                          <span><i class="fa fa-angle-right"></i> Add Quotation</span>
                        </div>
                    
                        <!-- start form add_quotation -->
                        <div class="col-md-12 no-padding-lr font-18">
                          <form class="form">
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_date" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Date :
                                <span class="color-dark-red">*</span>
                              </span>
                              <div id="sandbox-container col-sm-9">
                                <div class="col-md-9 no-padding-lr">
                    
                                  <div class="input-group date no-padding-lr">
                                    <input type="text" class="form-control input-datepicker" placeholder="dd/mm/yyyy">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                  </div>
                                </div>
                                <div class="col-md-3"></div>
                              </div>
                            </div>
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_quoNo" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Quotation No :
                                <span class="color-dark-red">*</span>
                              </span>
                              <div class="col-sm-9 no-padding-lr">
                                <input type="text" class="form-control" id="ip_quoNo" placeholder="Please enter quotation number">
                              </div>
                            </div>
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_quoFile" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Path File Quotation :
                                <span class="color-dark-red">*</span>
                              </span>
                              <div class="col-sm-9 no-padding-lr">
                                <!-- file path  <label for="upload-file" class="btn-edit font-light">
                                <i class="fa fa-file-text color-light-gray2"></i>
                                <span class="">Choose file</span>
                                </label> -->
                                <input type="file" name="photo" class="dis-none" id="upload-file" accept="application/pdf" />
                                <span class="color-light-gray2 font-light font-17 font-form-des">Please choose file .pdf</span>
                              </div>
                            </div>
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_quoType" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Quotation Type :
                                <span class="color-dark-red">*</span> 
                              </span>
                              <div class="col-sm-9 no-padding-lr">
                                <select id="sl_quoType" class="form-control pd-select-quo">
                                  <option selected="">-Select-</option>
                                  <option>Website</option>
                                  <option>Mobile Application</option>
                                </select>
                              </div>
                            </div>
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_comName" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Company Name :
                                <span class="color-dark-red">*</span>
                              </span>
                              <div class="col-sm-9 no-padding-lr">
                                <input type="text" class="form-control" id="ip_comName" placeholder="Please enter company name">
                              </div>
                            </div>
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_newPass" class="col-sm-3 control-label font-regular no-padding-lr">Working Status :</span>
                              <div class="col-sm-9 no-padding-lr font-17 font-light">
                                <label class="radio-inline rdo-edit mr-l-redio">
                                  <input type="radio" name="inlineRadioOptions" id="ip_success" value="success" checked> Success
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="inlineRadioOptions" id="ip_inprocess" value="inprocess"> Inprocess
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="inlineRadioOptions" id="ip_wait" value="wait"> Wait
                                </label>
                              </div>
                            </div>
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_newPass" class="col-sm-3 control-label font-regular no-padding-lr">Description :</span>
                              <div class="col-sm-9 no-padding-lr">
                                <textarea class="form-control" placeholder="Please enter description" rows="3"></textarea>
                              </div>
                            </div>
                          <!-- start button add_quotation -->
                            <div class="col-md-offset-4 col-md-4 col-sm-8 col-sm-offset-2 text-center mr-btn-profile mr-bot-btn n-pad">
                              <button type="button" class="btn btn-pass btn-quo">Save</button>
                            </div>
                          <!-- end button add_quotation -->
                          </form>
                        </div>
                        <!-- end form add_quotation -->
                      </div>
                    
                    <!-- main-content end -->
                    </section>
                    
                    <section>
                      <!--footer start-->
                        <div class="col-md-12 mr-footer no-padding-lr-lr">
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

<!-- datepicker -->
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-datepicker.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-datepicker.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/datepicker.js"); ?>"></script>