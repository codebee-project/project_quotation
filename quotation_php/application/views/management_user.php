<?php $this->load->view('template/file_header.php'); ?>

<!-- start call url -->
<?php
  $add_user = base_url('home/view_add_user');
  $view_user = base_url('home/view_user');
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
                                
                            <!-- header -->
                            <div class="font-regular header-edit-quo no-padding-lr">
                                <span><i class="fa fa-angle-right"></i> Management User</span>
                            </div>
                            
                            <!-- search -->
                            <div class="col-md-12 col-sm-12 mr-search no-padding-lr">
                                <div class="col-md-10 col-sm-9 no-padding-l no-pd-r">  
                                    <div class="input-group date no-padding">
                                      <input type="text" class="form-control input-datepicker" placeholder="Search...">
                                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3 no-padding-r no-pd-l">
                                    <a href="<?php echo $add_user ?>" type="button" id="search_quo" class="btn btn-add">
                                    <i class="fa fa-plus-circle icon-plus"></i>
                                    Add User
                                    </a>
                                </div>
                            </div>
                                
                            <!--table-->
                            <div class="col-md-12 col-sm-12 color-dark-gray font-size-table no-padding-lr">
                                <table id="manage_list" class="table table-striped" cellspacing="0" width="100%">
                                    <thead>
                                        <tr class="bg-color-tr">
                                            <th>No</th>
                                            <th>Email address</th>
                                            <th>Password</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>john@gmail.com</td>
                                            <td>1234</td>
                                            <td>John</td>
                                            <td>Admin</td>
                                            <td>                                          
                                              <label class="switch">
                                                <input id="" type="checkbox" checked onclick="">
                                                <span class="slider round"></span>
                                              </label>
                                          	</td>
                                            <td class="width-td-status">
                                                <a href="<?php echo $view_user ?>" class="btn btn-view font-light">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>smith@gmail.com</td>
                                            <td>5678</td>
                                            <td>Smith</td>
                                            <td>Member</td>
                                            <td>                                          
                                              <label class="switch">
                                                <input id="" type="checkbox" checked onclick="">
                                                <span class="slider round"></span>
                                              </label>
                                            </td>
                                            <td class="width-td-status">
                                                <a href="#" class="btn btn-view font-light">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>john@gmail.com</td>
                                            <td>1234</td>
                                            <td>John</td>
                                            <td>Admin</td>
                                            <td>                                          
                                              <label class="switch">
                                                <input id="" type="checkbox" checked onclick="">
                                                <span class="slider round"></span>
                                              </label>
                                            </td>
                                            <td class="width-td-status">
                                                <a href="#" class="btn btn-view font-light">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>smith@gmail.com</td>
                                            <td>5678</td>
                                            <td>Smith</td>
                                            <td>Member</td>
                                            <td>                                          
                                              <label class="switch">
                                                <input id="" type="checkbox" checked onclick="">
                                                <span class="slider round"></span>
                                              </label>
                                            </td>
                                            <td class="width-td-status">
                                                <a href="#" class="btn btn-view font-light">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>05</td>
                                            <td>john@gmail.com</td>
                                            <td>1234</td>
                                            <td>John</td>
                                            <td>Admin</td>
                                            <td>                                          
                                              <label class="switch">
                                                <input id="" type="checkbox" checked onclick="">
                                                <span class="slider round"></span>
                                              </label>
                                          	</td>
                                            <td class="width-td-status">
                                                <a href="#" class="btn btn-view font-light">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>06</td>
                                            <td>smith@gmail.com</td>
                                            <td>5678</td>
                                            <td>Smith</td>
                                            <td>Member</td>
                                            <td>                                          
                                              <label class="switch">
                                                <input id="" type="checkbox" checked onclick="">
                                                <span class="slider round"></span>
                                              </label>
                                          	</td>
                                            <td class="width-td-status">
                                                <a href="#" class="btn btn-view font-light">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>07</td>
                                            <td>john@gmail.com</td>
                                            <td>1234</td>
                                            <td>John</td>
                                            <td>Admin</td>
                                            <td>                                          
                                              <label class="switch">
                                                <input id="" type="checkbox" checked onclick="">
                                                <span class="slider round"></span>
                                              </label>
                                          	</td>
                                            <td class="width-td-status">
                                                <a href="#" class="btn btn-view font-light">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>08</td>
                                            <td>smith@gmail.com</td>
                                            <td>5678</td>
                                            <td>Smith</td>
                                            <td>Member</td>
                                            <td>                                          
                                              <label class="switch">
                                                <input id="" type="checkbox" checked onclick="">
                                                <span class="slider round"></span>
                                              </label>
                                          	</td>
                                            <td class="width-td-status">
                                                <a href="#" class="btn btn-view font-light">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>09</td>
                                            <td>john@gmail.com</td>
                                            <td>1234</td>
                                            <td>John</td>
                                            <td>Admin</td>
                                            <td>                                          
                                              <label class="switch">
                                                <input id="" type="checkbox" checked onclick="">
                                                <span class="slider round"></span>
                                              </label>
                                          	</td>
                                            <td class="width-td-status">
                                                <a href="#" class="btn btn-view font-light">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>smith@gmail.com</td>
                                            <td>5678</td>
                                            <td>Smith</td>
                                            <td>Member</td>
                                            <td>                                          
                                              <label class="switch">
                                                <input id="" type="checkbox" checked onclick="">
                                                <span class="slider round"></span>
                                              </label>
                                          	</td>
                                            <td class="width-td-status">
                                                <a href="#" class="btn btn-view font-light">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table -->
                            
                            <!-- pagination -->
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
                </div>
            </div>
        </div>
    </div>
    <!-- page content -->
</div>
<!-- end wrapper/content -->


<?php $this->load->view('template/file_footer.php'); ?>