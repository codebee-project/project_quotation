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
        <div class="container-fluid no-padding-lr">
            <div class="row">
                <div class="col-lg-12">
                
                    <!-- main-content start -->
                    <section id="main-content">
                    
                        <div class="font-content-view-quo">
                    
                        <!--navigation-->
                        <div class="font-size-nav1">
                            <div class="col-md-12 font-navi-view-quo no-padding-lr">
                            <div class="dis-inblock bg-white-gray color-dark-gray-h">
                              <span>You are here : </span>
                            </div>
                            <span  class="a-hover">
                              <a href="<?php echo $quotation_list ?>" class="color-dark-gray-h">Quotation</a>
                            </span>
                            <i class="fa fa-angle-right"></i>
                            <a href="#"><span class="color-dark-red">Add Document</span></a>
                          </div>
                        </div>
                    
                        <div class="col-md-12 font-h-view-quo no-padding-lr mr-header">
                          <i class="fa fa-angle-right"></i> 
                          <span>Add Document</span>
                        </div>
                            
                            <!--content-->
                            
                            <!--date-->
                            <div class="col-md-12 col-sm-12 color-dark-gray-h mr-c-viewquo no-padding-lr"> 
                                <div class="col-md-3 col-sm-3 no-padding-lr  font-regular">
                                    <span>Date :</span>
                                </div>
                                <div class="col-md-9 col-sm-9 no-padding-lr font-light font-17">
                                    <span>01/01/2560</span>
                                </div>
                            </div>
                            
                            <!--quo no-->
                            <div class="col-md-12 col-sm-12 color-dark-gray-h mr-c-viewquo no-padding-lr"> 
                                <div class="col-md-3 col-sm-3 col-sm-12 no-padding-lr  font-regular">
                                    <span>Quotation no :</span>
                                </div>
                                <div class="col-md-9 col-sm-9 no-padding-lr font-light font-17">
                                    <span>Quo-0050</span>
                                </div>
                            </div>
                            
                            <!--path file quotation-->
                            <div class="col-md-12 col-sm-12 color-dark-gray-h mr-c-viewquo no-padding-lr"> 
                                <div class="col-md-3 col-sm-3 no-padding-lr  font-regular">
                                    <span>Path file quotation :</span>
                                </div>
                                <div class="col-md-9 col-sm-9 no-padding-lr font-light color-dark-gray-h">
                                    <button type="file" class="btn-file btn-default font-17">View file</button>
                                </div>
                            </div>
                    
                            <!--conpany name-->
                            <div class="col-md-12 col-sm-12 color-dark-gray-h mr-c-viewquo no-padding-lr"> 
                                <div class="col-md-3 col-sm-3 no-padding-lr  font-regular">
                                    <span>Company name :</span>
                                </div>
                                <div class="col-md-9 col-sm-9 no-padding-lr font-light font-17">
                                    <span>The walk</span>
                                </div>
                            </div>
                            
                            <!--add contact-->
                            <div class="col-md-12 col-sm-12 color-dark-gray-h mr-c-viewquo no-padding-lr"> 
                                <div class="col-md-3 col-sm-3 no-padding-lr  font-regular">
                                    <span>Document :</span>
                                </div>
                                <div class="col-md-7 col-sm-7 no-padding-lr font-light">
                                    <input type="text" class="form-control" name="contact" placeholder="Please enter document name">
                                </div>
                                <div class="col-md-2 col-sm-2 text-center no-padding-lr">
                                    <button type="button" class="btn btn-pass btn-add-quo">Add</button>
                                </div>
                            </div>
                            
                            <!-- table -->
                            <div class="col-md-12 col-sm-12 color-dark-gray font-size-table no-padding-lr">
                                <table id="add_doc_quo" class="table table-striped" cellspacing="0" width="100%">
                                    <thead>
                                        <tr class="bg-color-tr">
                                            <th>No</th>
                                            <th>Document Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>requirement_savedee_1</td>
                                            <td><a href="#"><i class="fa fa-trash fa-2x"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>requirement_savedee_2</td>
                                            <td><a href="#"><i class="fa fa-trash fa-2x"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>requirement_savedee_3</td>
                                            <td><a href="#"><i class="fa fa-trash fa-2x"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end tabel -->
                    
                            <div class="col-md-12 col-xs-12 col-sm-12 no-padding-lr mr-b-pagi add-in-quo font-17">
                                <div class="col-md-6 col-xs-12 col-sm-6 no-padding-lr font-size-pagi color-dark-gray-h">
                                    <span>Showing 1 to 5 of 10 entries</span>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-6 no-padding-lr next-right font-size-pagi">
                                    <ul class="pagination pagination-sm no-mr-tb">
                                      <li><a href="#">Previous</a></li>
                                      <li><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                      <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    <!-- main content end -->
                    </section>
                    
                    <section>
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