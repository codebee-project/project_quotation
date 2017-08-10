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
                                
                        <!-- header -->
                        <div class="font-regular header-edit-quo no-padding-lr">
                            <span><i class="fa fa-angle-right"></i> Quotation</span>
                        </div>
                                
                        <!-- search -->
                        <div class="col-md-12 col-xs-12 col-sm-12 mr-search no-padding-lr">
                          <div class="col-md-9 col-xs-12 col-sm-9 no-padding-l no-pd-r">  
                            <div class="input-group date no-padding">
                              <input type="text" class="form-control input-datepicker" placeholder="Search...">
                              <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            </div>
                          </div>
                    
                          <div class="col-md-3 col-xs-12 col-sm-3 no-padding-r no-pd-l ">
                            <a href="<?php echo base_url('home/view_add_quotation'); ?>" id="search_quo" class="btn btn-add btn-add-quo">
                              <i class="fa fa-plus-circle icon-plus"></i>Add quotation
                            </a>
                          </div>
                        </div>
                    
                        <div class="col-md-12 col-xs-12 col-sm-12 color-dark-gray-h no-padding mr-c-viewquo mr-t-des font-size-descrip">
                          <div class="col-md-3 col-xs-12 col-sm-4  no-padding-lr">
                            <span class="font-regular">Description working status: </span>
                          </div>
                          <div class="col-md-9 col-xs-12 col-sm-8 mr-text-descrip-sum2 n-pad">
                            <div class="col-md-3 col-xs-12 n-pad flex">
                              <img alt="success" src="<?php echo base_url("assets/img/sq-success.png"); ?>" />
                              <span class="padding-text-descrip-sum2">Success</span>
                            </div>
                          <div class="col-md-3 col-xs-12 n-pad flex">
                            <img alt="inprocess" src="<?php echo base_url("assets/img/sq-inprocess.png"); ?>" />
                            <span class="padding-text-descrip-sum2">Inprocess</span>
                          </div>
                          <div class="col-md-3 col-xs-12 n-pad flex">
                            <img alt="wait" src="<?php echo base_url("assets/img/sq-wait.png"); ?>" />
                            <span class="padding-text-descrip-sum2">Wait</span>
                          </div>
                    
                          </div>
                        </div>
                                
                        <!--table-->
                        <div class="col-md-12 col-xs-12 color-dark-gray font-size-table no-padding-lr">
                            <table id="quotation_list" class="table table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr class="bg-color-tr">
                                        <th class="th-font-size">No</th>
                                        <th class="th-font-size">Date</th>
                                        <th class="th-font-size">Quo no</th>
                                        <th class="th-font-size">Type</th>
                                        <th class="th-font-size">Company</th>
                                        <th class="th-font-size">Contact</th>
                                        <th class="th-font-size">Email</th>
                                        <th class="th-font-size">Telephone</th>
                                        <th class="th-font-size">Inv no</th>
                                        <th class="th-font-size">Status</th>
                                        <th class="th-font-size">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr-color-suc">
                                        <td class="td-font-size">01</td>
                                        <td class="td-font-size">01/01/2560</td>
                                        <td class="td-font-size">Quo-0001</td>
                                        <td class="td-font-size">Website</td>
                                        <td class="td-font-size">The Walk</td>
                                        <td class="td-font-size">John</td>
                                        <td class="td-font-size">John@gmail.com</td>
                                        <td class="td-font-size">02-0000012</td>
                                        <td class="td-font-size">Inv-0001</td>
                                        <td class="td-font-size">
                                          <label class="switch">
                                            <input id="" type="checkbox" checked onclick="">
                                            <span class="slider round"></span>
                                          </label>
                                        </td>
                                        <td class="td-font-size width-td-status">
                                            <a href="<?php echo base_url('home/view_quotation'); ?>" class="btn btn-view font-light">View</a>
                                            <a href="<?php echo base_url('home/view_edit_quotation'); ?>" class="btn btn-edit-quo font-light">Edit</a>
                                            <a href="<?php echo base_url('home/view_add_doc_quotation'); ?>" class="btn btn-add-doc font-light">Add Document</a>
                                            <a href="<?php echo base_url('home/view_add_inv_quotation'); ?>" class="btn btn-add-con font-light">Add Invoice</a>
                                            <a href="<?php echo base_url('home/view_add_con_quotation'); ?>" class="btn btn-add-inv font-light">Add Contact</a>
                                        </td>
                                    </tr>
                                    <tr class="tr-color-in">
                                        <td class="td-font-size">02</td>
                                        <td class="td-font-size">01/01/2560</td>
                                        <td class="td-font-size">Quo-0002</td>
                                        <td class="td-font-size">Website</td>
                                        <td class="td-font-size">The Walk</td>
                                        <td class="td-font-size">John</td>
                                        <td class="td-font-size">John@gmail.com</td>
                                        <td class="td-font-size">02-0000012</td>
                                        <td class="td-font-size">Inv-0002</td>
                                        <td class="td-font-size">
                                          <label class="switch">
                                            <input id="" type="checkbox" checked onclick="">
                                            <span class="slider round"></span>
                                          </label>
                                        </td>
                                        <td class="td-font-size width-td-status">
                                            <a href="#" class="btn btn-view font-light">View</a>
                                            <a href="#" class="btn btn-edit-quo font-light">Edit</a>
                                            <a href="../../html/add_doc_quotation.html" class="btn btn-add-doc font-light">Add Document</a>
                                            <a href="../../html/add_invoice_quotation.html" class="btn btn-add-con font-light">Add Invoice</a>
                                            <a href="../../html/add_contact_quotation.html" class="btn btn-add-inv font-light">Add Contact</a>
                                        </td>
                                    </tr>
                                    <tr class="tr-color-wa">
                                        <td class="td-font-size">03</td>
                                        <td class="td-font-size">01/01/2560</td>
                                        <td class="td-font-size">Quo-0003</td>
                                        <td class="td-font-size">Website</td>
                                        <td class="td-font-size">The Walk</td>
                                        <td class="td-font-size">John</td>
                                        <td class="td-font-size">John@gmail.com</td>
                                        <td class="td-font-size">02-0000012</td>
                                        <td class="td-font-size">Inv-0003</td>
                                        <td class="td-font-size">
                                          <label class="switch">
                                            <input type="checkbox" checked onclick="">
                                            <span class="slider round"></span>
                                          </label>
                                        </td>
                                        <td class="td-font-size width-td-status">
                                            <a href="#" class="btn btn-view font-light">View</a>
                                            <a href="#" class="btn btn-edit-quo font-light">Edit</a>
                                            <a href="../../html/add_doc_quotation.html" class="btn btn-add-doc font-light">Add Document</a>
                                            <a href="../../html/add_invoice_quotation.html" class="btn btn-add-con font-light">Add Invoice</a>
                                            <a href="../../html/add_contact_quotation.html" class="btn btn-add-inv font-light">Add Contact</a>
                                        </td>
                                    </tr>
                                    <tr id="t1" class="tr-color-off">
                                        <td class="td-font-size">04</td>
                                        <td class="td-font-size">01/01/2560</td>
                                        <td class="td-font-size">Quo-0004</td>
                                        <td class="td-font-size">Website</td>
                                        <td class="td-font-size">The Walk</td>
                                        <td class="td-font-size">John</td>
                                        <td class="td-font-size">John@gmail.com</td>
                                        <td class="td-font-size">02-0000012</td>
                                        <td class="td-font-size">Inv-0004</td>
                                        <td class="td-font-size">
                                          <label class="switch">
                                            <input id="checkbox1" type="checkbox" onclick="">
                                            <span class="slider round"></span>
                                          </label>
                                        </td>
                                        <td class="td-font-size width-td-status" >
                                            <a href="#" class="btn btn-view font-light">View</a>
                                            <a href="#" class="btn btn-edit-quo font-light">Edit</a>
                                            <a href="../../html/add_doc_quotation.html" class="btn btn-add-doc font-light">Add Document</a>
                                            <a href="../../html/add_invoice_quotation.html" class="btn btn-add-con font-light">Add Invoice</a>
                                            <a href="../../html/add_contact_quotation.html" class="btn btn-add-inv font-light">Add Contact</a>
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