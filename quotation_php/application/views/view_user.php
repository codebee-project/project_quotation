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
                    
                        <div class="font-content-view-quo">
                    
                            <!--navigation-->
                            <div class="col-md-12 font-navi-view-quo no-padding-lr">
                                <div class="dis-inblock bg-white-gray"><span>You are here : </span></div>
                                <span class="a-hover">
                                    <a href="../../html/management_user.html" class="color-dark-gray-h">Management User</a>
                                </span>
                                <span class="color-dark-red"><i class="fa fa-angle-right"></i> View Profile User</span>
                            </div>
                                
                            <!-- header -->
                            <div class="col-md-12 font-h-view-quo no-padding-lr">
                                <i class="fa fa-angle-right"></i> 
                                <span>View Profile User</span>
                            </div>
                                
                            <!--content-->
                            
                            <!--img-->
                            <div class="col-md-12 color-dark-gray-h mr-c-viewquo no-padding-lr text-center"> 
                                <img src="../../html/assets/img/profile.png">
                            </div>
                            
                            <form>
                            <!-- Emil -->
                            <div class="col-md-12 color-dark-gray-h mr-c-viewquo no-padding-lr"> 
                                <div class="col-md-3 no-padding-lr  font-regular">
                                    <span>Email address :</span>
                                </div>
                                <div class="col-md-9 no-padding-lr font-light font-17">
                                    <input type="email" class="form-control " id="" placeholder=""  value="example@gmail.com">
                                </div>
                            </div>
                            
                            <!--pass-->
                            <div class="col-md-12 color-dark-gray-h mr-c-viewquo no-padding-lr"> 
                                <div class="col-md-3 no-padding-lr  font-regular">
                                    <span>Password :</span>
                                </div>
                                <div class="col-md-9 no-padding-lr font-light color-dark-gray-h">
                                    <input type="text" class="form-control " id="" placeholder=""  value="1234">
                                </div>
                            </div>
                            
                            <!-- name -->
                            <div class="col-md-12 color-dark-gray-h mr-c-viewquo no-padding-lr"> 
                                <div class="col-md-3 no-padding-lr  font-regular">
                                    <span>Name :</span>
                                </div>
                                <div class="col-md-9 no-padding-lr font-light font-17">
                                    <input type="text" class="form-control " id="" placeholder=""  value="Smith">
                                </div>
                            </div>
                            
                            <!-- type -->
                            <div class="col-md-12 color-dark-gray-h mr-c-viewquo no-padding-lr"> 
                                <div class="col-md-3 no-padding-lr  font-regular">
                                    <span>Type :</span>
                                </div>
                                <div class="col-md-9 no-padding-lr font-light font-17">
                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                        Super admin
                                      </label>
                                    </div>
                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        Admin
                                      </label>
                                    </div>
                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" checked>
                                        Member
                                      </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-offset-4 col-md-4 col-sm-offset-2 col-sm-8 text-center mr-btn-profile n-pad">
                              <button type="button" class="btn btn-profile btn-quo-type">Save change</button>
                            </div>
                            
                            </form>
                          
                            <!--Report view-->
                            <div class="col-md-12 col-sm-12 color-dark-gray-h mr-c-viewquo no-padding-lr mr-b-report"> 
                                <div class="col-md-3 no-padding-lr  font-regular ">
                                    <span>Report create quotation</span>
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-sm-12 color-dark-gray font-size-table no-padding-lr">
                                <table id="view_user_list" class="table table-striped" cellspacing="0" width="100%">
                                    <thead>
                                        <tr class="bg-color-tr">
                                            <th>No</th>
                                            <th>Quotation no</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Quo-0005</td>
                                            <td>Brielle Williamson</td>
                                            <td>2012/12/02</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>Quo-0005</td>
                                            <td>Integration Specialist</td>
                                            <td>2012/12/02</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Quo-0005</td>
                                            <td>Integration Specialist</td>
                                            <td>2012/12/02</td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>Quo-0005</td>
                                            <td>Integration Specialist</td>
                                            <td>2012/12/02</td>
                                        </tr>
                                        <tr>
                                            <td>05</td>
                                            <td>Quo-0005</td>
                                            <td>Integration Specialist</td>
                                            <td>2012/12/02</td>
                                        </tr>
                                        <tr>
                                            <td>06</td>
                                            <td>Quo-0005</td>
                                            <td>Integration Specialist</td>
                                            <td>2012/12/02</td>
                                        </tr>
                                        <tr>
                                            <td>07</td>
                                            <td>Quo-0005</td>
                                            <td>Integration Specialist</td>
                                            <td>2012/12/02</td>
                                        </tr>
                                        <tr>
                                            <td>08</td>
                                            <td>Quo-0005</td>
                                            <td>Integration Specialist</td>
                                            <td>2012/12/02</td>
                                        </tr>
                                        <tr>
                                            <td>09</td>
                                            <td>Quo-0005</td>
                                            <td>Integration Specialist</td>
                                            <td>2012/12/02</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Quo-0005</td>
                                            <td>Integration Specialist</td>
                                            <td>2012/12/02</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="col-md-12 col-xs-12 col-sm-12 no-padding-lr mr-b-pagi">
                                <div class="col-md-6 col-xs-12 col-sm-6 no-padding-lr font-size-pagi color-dark-gray-h font-17">
                                    <span>Showing 1 to 5 of 10 entries</span>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-6 no-padding-lr next-right font-size-pagi">
                                    <ul class="pagination pagination-sm no-mr-tb">
                                      <li><a href="#" class="no-pd-l">Previous</a></li>
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
                    <!-- main-content end -->
                    </section>
                    
                    <section id="footer">
                        <!--footer start-->
                        <div class="col-md-12 mr-footer no-padding-lr">
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