
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
                            <li class="breadcrumb-item active"><?= $page_name ?></li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center text-right d-none d-md-block">
                        <button type="button" class="btn btn-info theme-bg add_new" data-toggle="modal" data-target=".add_segment_modal"><i class="fa fa-plus-circle"></i> Add New</button>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                <div class="table-responsive m-t-40">
                                    <table id="stock_out_segments" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Segment ID</th>
                                                <th class="text-center">Segment Name</th>
                                                <th class="text-center">Date Added</th>
                                                <th >Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade add_segment_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog  ">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Add Segment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form id="Segment_Add" action="#">
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Segment Name</label>
                                                    <input type="text" class="form-control" name="segment_name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Outlet Name</label>
                                                    <select class="form-control" name="FK_branch_id" required>
                                                      <option value="" selected>Select an outlet</option>
                                                      <?php foreach (_get_all_outlets() as $outlet): ?>
                                                        <option value="<?= $outlet['PK_branch_id'] ?>"><?= $outlet['outlet_name'] ?></option>
                                                      <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="card-body text-center">
                                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Add</button>
                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                            </form>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="modal fade view_segment_details_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog  ">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Segment Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="#">
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Segment Name</label>
                                                    <input type="text" class="form-control" name="segment_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Outlet Name</label>
                                                    <select class="form-control" name="FK_branch_id" required>
                                                      <option value="" selected>Select an outlet</option>
                                                      <?php foreach (_get_all_outlets() as $outlet): ?>
                                                        <option value="<?= $outlet['PK_branch_id'] ?>"><?= $outlet['outlet_name'] ?></option>
                                                      <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="modal fade edit_segment_details_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog  ">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Edit Segment Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form id="Segment_Edit" action="#">
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Segment Name</label>
                                                    <input type="text" class="form-control" name="segment_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Outlet Name</label>
                                                    <select class="form-control" name="FK_branch_id" required>
                                                      <option value="" selected>Select an outlet</option>
                                                      <?php foreach (_get_all_outlets() as $outlet): ?>
                                                        <option value="<?= $outlet['PK_branch_id'] ?>"><?= $outlet['outlet_name'] ?></option>
                                                      <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="card-body text-center">
                                                <button type="submit" class="btn btn-success edit_Button"> <i class="fa fa-check"></i> Save</button>
                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                            </form>
                      </div>
                    </div>
                  </div>
                </div>
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
