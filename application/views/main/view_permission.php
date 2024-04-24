<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('{base_url}design/assets/img/2020-07-28.jpg');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>PERMISSION</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>MANAGE PERMISSION</span>
                <h2>MANAGE PERMISSION</h2>

            </div>
            <div class="">
                <div class="card-body">
                    <!-- start page container -->
                    <div class="row py-2">
                        <div class="col-1 text-nowrap ">
                            PERMISSION GROUP
                        </div>
                        <div class="col ms-5">
                            <select class="form-control selGroup" id="selGroup">
                                <option value="">Choose Permission Group</option>
                            </select>
                        </div>
                        <div class="col">
                            <button type="button" class="" style="background-color: orange; color: white; padding: 8px 20px; border: none; border-radius: 10px; cursor: pointer;" id="btnSerchMain">Search</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="" style="display: none;" id="content">
                <div class="col-sm-12 mt-3">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row py-2 mt-2">
                                    <span class="fs-5 fw-bold mb-4">REGISTER PERMISSION</span>
                                    <div class="col-md-5 col-sm-10 col-5 ">
                                        <div class="row ">
                                            <span>Sub Menu<span class="red-text">*</span></span>
                                            <div class="col-lg">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                    <select class="form-control" id="selMenuGroupName">
                                                        <option value="">Choose main menu</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-2 col-5">
                                        <div class="row ">
                                            <span>Sub Menu controller<span class="red-text">*</span></span>
                                            <div class="col-lg">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                    <select class="form-control" id="selSubMenuName">
                                                        <option value="">Choose main menu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md col-sm-2 col-2 p-t-20 mb-5">
                                                <button type="button" class="" style="background-color: orange; color: white; padding: 8px 20px; border: none; border-radius: 10px; cursor: pointer;" id="btnSaveAddPer">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-12 col-sm-12 justify-content-start">
                                        <div id="errMegadd" style="color: red; display: none;">Please enter in English only.</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive text-nowrap">
                                            <div class="card-datatable table-responsive pt-0">
                                                <table class="table card-table" id="tblPermis">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">No.</th>
                                                            <th class="text-center">Main Menu</th>
                                                            <th class="text-center">Sub Menu</th>
                                                            <th class="text-center">Update Date</th>
                                                            <th class="text-center">Update By</th>
                                                            <th class="text-center">Stasus</th>
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
                                                <h5 class="modal-title" id="staticBackdropEdit">Edit Menu </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="edtSubMenu" class="form-label">Main Menu</label>
                                                        <input type="text" id="edtSubMenu" class="form-control" placeholder="Enter Main Menu">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="edtController" class="form-label">Main Menu Icon</label>
                                                        <input type="text" id="edtController" class="form-control" placeholder="Enter Main Menu Icon">
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
            </div>
        </div>
        </div>
    </section><!-- End Our Team Section -->
</main><!-- End #main -->
</div>