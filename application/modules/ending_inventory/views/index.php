
    <div id="main-wrapper">
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor"><?= $title ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active"><?= $title ?></li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center text-right d-none d-md-block">
 
                        <!-- <a href="#" class="btn btn-success"><i class="fa fa-plus"></i> Record Monthly Inventory</a> -->
                        <button class="btn btn-success btn-print-inv"><i class="fa fa-print"></i> Print</button>

                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row printdiv">
                    <div class="col-md-2">
                        <label for="">Date From:</label>
                        <div class="fbold"><?= date("F 01, Y")?></div>
                    </div>
                    <div class="col-md-2">
                        <label for="">Date To:</label>
                        <div class="fbold"><?= date('F t, Y')?></div>
                    </div>
                   
                    <div class="col-12">
                        <div class="card mt-3 text-center">
                            <h4 class="text-center mt-4">LIST OF ALL ITEMS</h4>
                            <p>Listed below are all the items that are recorded within the coverage date</p>
                        </div>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Unit</th>
                                    <th>Category</th>
                                    <th>Amount</th>
                                    <th>Beg. Qty.</th>
                                    <th>Total In</th>
                                    <th>Total Out.</th>
                                    <th>Ending Qty.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($movements as $key) { 
                                    $tot_in =   $key->inv_data["tot_tr_in"] + $key->inv_data["tot_po"];
                                    $tot_out =   $key->inv_data["tot_so"];
                                ?>
                                  <tr>
                                      <td><?= $key->material_name?></td>
                                      <td><?= $key->unit?></td>
                                      <td><?= $key->category_name?></td>
                                      <td>&#8369;<?= $key->sales_price?></td>
                                      <td><?= $key->inv_data["beg_env"]?></td>
                                      <td><?=  $tot_in?></td>
                                      <td><?=  $tot_out?></td>
                                      <td><?=  $key->quantity?></td>
                                  </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                        <div class="text-left">
                            <h4 class="mt-4">Total Items: <?= count($movements)?></h4>
                        </div>
                    </div>
                </div>

                <?php
                    if(isset($has_modal)){
                        $this->load->view($has_modal);
                    }
                ?>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                Euro Baker Inventory System
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    