<?php $this->load->view('template/file_header.php'); ?>

<?php
  $document_list = base_url('Document/view_document_list');
?>

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
                          <span  class="a-hover">
                            <a href="<?php echo $document_list ?>" class="color-dark-gray-h">Document</a>
                          </span>
                          <i class="fa fa-angle-right"></i>
                          <span class="color-dark-red">Add Document</span>
                        </div>
                    
                        <div class="mr-header font-regular header-edit-quo no-padding-lr">
                          <span><i class="fa fa-angle-right"></i> Add Document</span>
                        </div>
                              
                        <!-- start form add_invoice -->
                        <div class="col-md-12 no-padding-lr font-18">
                        
                            <?php 
								$attributes = array('class' => 'form', 'method' => 'post', 'id' => 'form_add_document');
								echo form_open_multipart('Document/add_document', $attributes) 
							?>
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_invNo" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Document Name :
                                <span class="color-dark-red">*</span>
                              </span>
                              <div class="col-sm-9 no-padding-lr">
                                <input type="text" class="form-control" id="ip_docName" name="ip_docName" placeholder="Please enter document name">
                              </div>
                            </div>
                    
                            <div class="form-group mr-form-profile col-md-12 col-sm-12 no-padding-lr">
                              <span id="sp_invFile" class="col-sm-3 control-label font-regular sp-quo-edit no-padding-lr">Path File Document :
                                <span class="color-dark-red">*</span>
                              </span>
                              <div class="col-sm-9 no-padding-lr">
                                <input type="file" class="dis-none" id="upload_fileDoc" name="upload_fileDoc" accept="application/pdf" />
                                <span class="color-light-gray2 font-light font-17 font-form-des">Please choose file .pdf/.doc</span>
                              </div>
                            </div>
                    
                            <!-- start button add_quotation_type -->
                            <div class="col-md-offset-4 col-md-4 col-sm-8 col-sm-offset-2 text-center mr-btn-profile mr-bot-btn n-pad">
                              <button type="submit" class="btn btn-pass btn-quo-type">Save</button>
                            </div>
                    
                          <!-- end form add_invoice -->
                          </form>
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