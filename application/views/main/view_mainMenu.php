<main id="main">

   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('{base_url}design/assets/img/2020-07-28.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>MAIN MENU</h2>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>MANAGE MAIN MENU</span>
          <h2>MANAGE MAIN MENU</h2>

        </div>

		 <!-- Content wrapper -->
         <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="">
                    <div class="card-body">
                        <div class="row py-2 mt-2">
                            <span class="fs-5 fw-bold mb-5">REGISTER MAIN MENU </span>
                            <div class="row ">
                                <div>Main Menu<span class="red-text mb-2">*</span></div>
                                <div class="col-lg-3 p-t-20 mb-3">
                                    <input class="form-control" type="text" id="inpMainMenuName" oninput="InputAdd(this)">
                                </div>
                                <div class="col-lg-3 p-t-20 mb-3">
                                    <button type="button" class="" style="background-color: orange; color: white; padding: 8px 20px; border: none; border-radius: 10px; cursor: pointer;" id="btnSaveAdd"><i class="fa fa-plus"></i> Add Main Menu</button>
                                </div>
                                <!-- <div class="col-lg-3 p-t-20 mb-3">
                                    <div>Main Menu Icon<span class="red-text">*</span></div>
                                    <div class="col-lg-12" style="display: grid; grid-template-columns: auto auto;">
                                        <input class="form-control " type="text" id="inpMainMenuIcon" oninput="InputAdd(this)">
                                        <span data-bs-toggle="modal" data-bs-target="#mdlIcon">
                                            <i class='btn btn-outline-primary ti-android'></i>
                                        </span>
                                    </div>
                                </div> -->
                            </div>
                            <!-- <div class="col">
                                    <button type="button" class="btn btn-circle btn-primary" id="btnSaveAdd"><i class="fa fa-plus"></i> Add Main Menu</button>
                                </div> -->
                                <div class="col justify-content-start ms-1">
                                    <div id="errMegadd" style="color: red; display: none;">Please enter in English only.</div>
                                </div>
                        </div>
                        <hr>
                        <div class="table-responsive text-nowrap ">
                            <div class="card-datatable table-responsive pt-0">
                                <table class="table card-table" id="tblMainMenu">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Main Menu Name</th>
                                            <th class="text-center">Main Menu Icon</th>
                                            <th class="text-center">Order No.</th>
                                            <th class="text-center">Update Date</th>
                                            <th class="text-center">Update By</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0 text-center" id="tbody">

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-foot mt-2">
                                </div>
                        </div>
                    </div>
                </div>
                <!--/ Bordered Table -->


                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade show" id="mdlEdit" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Edit Main Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="edtMainMenu" class="form-label">Main Menu</label>
                                        <input type="text" id="edtMainMenu" class="form-control" placeholder="Enter Main Menu">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="edtMainIcon" class="form-label">Main Menu Icon</label>
                                        <input type="text" id="edtMainIcon" class="form-control" placeholder="Enter Main Menu Icon">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="edtOrderNo" class="form-label">Order No.</label>
                                        <input type="text" id="edtOrderNo" class="form-control" placeholder="Enter Order No.">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="btnSaveEdit">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section><!-- End Our Team Section -->
  </main><!-- End #main -->
</div>
