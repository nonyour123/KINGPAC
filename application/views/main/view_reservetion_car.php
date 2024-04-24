<main id="main">

   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('{base_url}design/assets/img/2020-07-28.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>RESERVETION</h2>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>RESERVETION A CAR</span>
          <h2>RESERVETION A CAR</h2>

        </div>

		<div class="container-fluid">
		<!-- Content wrapper -->
		<div class="content-wrapper">
			<!-- Content -->
			<div class="container-xxl flex-grow-1 container-p-y">
				<!-- Bordered Table -->

				<div class="">
					<div class="">
						<div class="d-flex justify-content-end mt-2 pr-2">
							<button type="button" class="" style="background-color: orange; color: white; padding: 8px 20px; border: none; border-radius: 10px; cursor: pointer;" id="callmodelAdd" data-bs-toggle="modal" data-bs-target="#mdlAdd"><i class="fa fa-plus"></i>เพิ่มการจองรถ</button>
						</div>
						<hr>
						<div class="table-responsive text-nowrap">
							<!-- Removed scrollBody -->
							<div class="card-datatable table-responsive pt-0">
								<table class="table card-table" id="tblManageCar">
									<thead>
										<tr>
											<th class="text-center">ลำดับ</th>
											<th class="text-center">ชื่อผู้จอง</th>
											<th class="text-center">แผนก</th>
											<th class="text-center">สถานที่รับ</th>
											<th class="text-center">สถานที่ส่ง</th>
											<th class="text-center">วันที่ขอใช้</th>
											<th class="text-center">สถานะ</th>
											<th class="text-center">แก้ไข</th>
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
			</div>
		</div>

		<!--/ Bordered Table -->

		<!-- Button trigger modal -->

		<!-- Modal Add-->
		<div class="modal fade show" id="mdlAdd" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel1">ขอจองรถ</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form action="" id="add" autocomplete="off">
							<div class="row g-2">
								<div class="col mb-0">
									<label class="form-label">Costcenter</label><span class="red-text">*</span>
									<select id="selPlantAdd" class="selPlantAdd select2 form-select" data-allow-clear="true">
										<option value="">Choose Plant</option>
									</select>
								</div>
								<div class="col mb-0">
									<label class="form-label">วันที่ขอใช้</label><span class="red-text">*</span>
									<input type="date" id="inpEmpPassword" class="form-control" placeholder="Password">
								</div>
							</div>
							<div class="row g-2"> 
								<div class="col mb-0">
									<label class="form-label">ชื่อจริง</label><span class="red-text">*</span>
									<input type="text" id="inpFirstName" class="form-control" placeholder="ชื่อจริง" oninput="InputAddpersonal(this)">
								</div>
								<div class="col mb-0">
									<label class="form-label">นามสกุล</label><span class="red-text">*</span>
									<input type="text" id="inpLastName" class="form-control" placeholder="นามสกุล" oninput="InputAddpersonal(this)">
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">ตำแหน่ง</label><span class="red-text">*</span>
									<select id="selPlantAdd" class="selPlantAdd select2 form-select" data-allow-clear="true">
										<option value="">เลือกตำแหน่ง</option>
									</select>
								</div>
							</div>
							<div class="row g-2"> 
								<div class="col mb-0">
									<label class="form-label">สถานที่รับ</label><span class="red-text">*</span>
									<input type="text" id="inpFirstName" class="form-control" placeholder="สถานที่รับ" oninput="InputAddpersonal(this)">
								</div>
							</div>
							<div class="row g-2"> 
								<div class="col mb-0">
									<label class="form-label">ชื่อผู้รับ</label><span class="red-text">*</span>
									<input type="text" id="inpFirstName" class="form-control" placeholder="ชื่อผู้รับ" oninput="InputAddpersonal(this)">
								</div>
								<div class="col mb-0">
									<label class="form-label">เวลารับ</label><span class="red-text">*</span>
									<input type="time" id="thaiTime" class="form-control" placeholder="" >
								</div>
							</div>
							<div class="row g-2"> 
								<div class="col mb-0">
									<label class="form-label">สถานที่ส่ง</label><span class="red-text">*</span>
									<input type="text" id="inpLastName" class="form-control" placeholder="สถานที่ส่ง" oninput="InputAddpersonal(this)">
								</div>
							</div>
							<div class="row g-2"> 
								<div class="col mb-0">
									<label class="form-label">ชื่อผู่ส่ง</label><span class="red-text">*</span>
									<input type="text" id="inpFirstName" class="form-control" placeholder="ชื่อผู่ส่ง" oninput="InputAddpersonal(this)">
								</div>
								<div class="col mb-0">
									<label class="form-label">เวลาส่ง</label><span class="red-text">*</span>
									<input type="time" id="thaiTime" class="form-control" placeholder="" >
								</div>
							</div>

							<div class="row g-2"> 
								<div class="col mb-0">
									<label class="form-label">เบอร์โทร</label><span class="red-text">*</span>
									<input type="tel" id="" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="เบอร์โทร">
								</div>
							</div>

							<div class="row g-2"> 
								<div class="col mb-0">
									<label class="form-label">แนบเอกสาร</label><span class="red-text">*</span>
									<input type="file" id="" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="เบอร์โทร">
								</div>
							</div>
							<div class="row g-2"> 
								<div class="col mb-0">
									<label class="form-label">หมายเหตุ</label><span class="red-text">*</span>
									<textarea class="form-control" id="message-text"></textarea>
								</div>
							</div>

						</form>
					</div>
					<div class="modal-footer">
						<div class="container col justify-content-start">
							<div id="errMegadd" style="display: none; color: red; ">Please enter in English only.</div>
							<div id="errAddempcode" style="display: none; color: red; ">Please enter Employee Code as (a-z ,A-Z ,0-9) only.</div>
							<div id="errAddpersonal" style="display: none; color: red; ">Please enter Firstname or Lastname as (a-z ,A-Z) only.</div>
						</div>
						<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal" id="btnBack">Back</button>
						<button type="button" class="btn btn-primary" id="btnSaveAdd">Save</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal Add-->



		<!-- Modal Edit-->
		<div class="modal fade show" id="mdlEdit" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel1">Edit Account</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row g-2">
							<div class="col mb-0">
								<label class="form-label">Employee Code</label>
								<input type="text" id="edtEmpCode" class="form-control" placeholder="Emp Code" oninput="InputAddEmpcode(this)" readonly>
							</div>
							<div class="col mb-0">
								<label class="form-label">Employee Password</label>
								<input type="password" id="edtEmpPassword" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="row g-2">
							<div class="col mb-0">
								<label class="form-label">First name</label>
								<input type="text" id="edtFirstName" class="form-control" placeholder="FirstName" oninput="InputAddpersonal(this)">
							</div>
							<div class="col mb-0">
								<label class="form-label">Last name</label>
								<input type="text" id="edtLastName" class="form-control" placeholder="LastName" oninput="InputAddpersonal(this)">
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Email</label>
								<input type="email" id="edtEmail" class="form-control" placeholder="xxxx@xxx.xx" oninput="InputAdd(this)">
							</div>
						</div>

						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Permission group</label>
								<select id="edtPermission" class="edtPermission select2 form-select" data-allow-clear="true">
									<option value="">Choose Permission Group</option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Plant</label>
								<select id="edtPlantEdit" class="edtPlantEdit select2 form-select" data-allow-clear="true">
									<option value="">Choose Plant</option>
								</select>
							</div>
						</div>

					</div>
					<div class="modal-footer">
						<div class="container col justify-content-start">
							<div id="errMegadd" style="display: none; color: red; ">Please enter in English only.</div>
							<div id="errAddempcode" style="display: none; color: red; ">Please enter Employee Code as (a-z ,A-Z ,0-9) only.</div>
							<div id="errAddpersonal" style="display: none; color: red; ">Please enter Firstname or Lastname as (a-z ,A-Z) only.</div>
						</div>
						<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal" id="btnBack">Back</button>
						<button type="button" class="btn btn-primary" id="btnSaveEdit">Save</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Edit Modal -->
	</div>
    </section><!-- End Our Team Section -->
  </main><!-- End #main -->
</div>

<script>
        // ฟังก์ชันสำหรับแสดงเวลาในโซนเวลาของประเทศไทย
        function displayThaiTime() {
            const thaiTimeInput = document.getElementById("thaiTime");
            const currentUTC = new Date();
            
            // ปรับเวลาในโซนเวลาของประเทศไทย (+7 ชั่วโมง)
            const thaiTime = new Date(currentUTC.getTime() + 7 * 60 * 60 * 1000);
            
            // แสดงเวลาในรูปแบบ HH:mm (24 ชั่วโมง)
            const thaiTimeString = thaiTime.toISOString().slice(11, 16);
            
            // กำหนดค่าเวลาใน input
            thaiTimeInput.value = thaiTimeString;
        }

        // เรียกใช้ฟังก์ชันเมื่อโหลดหน้าเว็บ
        displayThaiTime();
</script>
