$(() => {

    showdropdown()
    $('#mdlAdd').on('hidden.bs.modal', function () {
        $('#errMegadd').css('display', 'none');
        $('#errAddempcode').css('display', 'none');
        $('#errAddpersonal').css('display', 'none');
        $('#inpEmpCode').val('');
        $('#inpFirstName').val('');
        $('#inpEmpPassword').val('');
        $('#inpLastName').val('');
        $('#inpEmail').val('');
        $('#selPermissionAdd').val('');
        $('#selPlantAdd').val('');
    });


    $('#mdlEdit').on('hidden.bs.modal', function () {
        $('#errMegedit').css('display', 'none');
        $('#errEditempcode').css('display', 'none');
        $('#errEditpersonal').css('display', 'none');
        $('#edtEmpPassword').val('')
    });

    // showProjectlistManage()
	//     //-------------------------- Table Account ----------------------------------
    //     function showProjectlistManage() {
    //         var apiUrl = "http://127.0.0.1/api/Manage_account/show_user"; 
    //         $.ajax({
    //             method: "GET",
    //             url: base_url("ManageAccount/callApi?url=" + apiUrl),
    //             dataType: 'json',
    //             success: function(response) {
    //                 if (response.length > 0) { 
    //                     var html = "";
    //                     for (let i = 0; i < response.length; i++) {
    //                         const data = response[i];
    //                         var btnStatus = (data.sa_status_flg == 1) ?
    //                             `<button type="button" id="flgStatus" class="btn btn-circle btn-success btnStatus" value="${data.sa_status_flg}" data-id="${data.sa_id}">Enable</button>` :
    //                             `<button type="button" id="flgStatus" class="btn btn-circle btn-warning btnStatus" value="${data.sa_status_flg}" data-id="${data.sa_id}">Disable</button>`;
        
    //                         html += `
                                // <tr>
                                //     <td><i></i> <strong>${i + 1}</strong></td>
                                //     <td>
                                //         <div class="d-flex justify-content-start align-items-center">
                                //             <div class="avatar-wrapper">
                                //                 <div class="avatar me-2">
                                //                     <img src="<?php echo base_url() ?>assets/assets/img/avatars/sek.jpg" alt="Avatar" class="rounded-circle">
                                //                 </div>
                                //             </div>
                                //             <div class="d-flex flex-column">
                                //                 <span class="emp_name text-truncate">${data.sa_firstname} ${data.sa_lastname}</span>
                                //                 <small class="emp_post text-truncate text-muted">${data.sa_emp_code}</small>
                                //             </div>
                                //         </div>
                                //     </td>
                                //     <td><i></i> <strong>Admin</strong></td>
                                //     <td><i></i>${data.sa_email}</td>
                                //     <td class="" style="">02/13/2021</td>
                                //     <td><span class="badge bg-label-success me-1">${data.sa_status_flg == 1 ? 'Enable' : 'Disable'}</span></td>
                                //     <td class="" style="">
                                //         <div class="d-inline-block">
                                //             <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                //                 <i class="bx bx-dots-vertical-rounded"></i>
                                //             </a>
                                //             <ul class="dropdown-menu dropdown-menu-end">
                                //                 <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                //                 <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                //                 <div class="dropdown-divider"></div>
                                //                 <li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a></li>
                                //             </ul>
                                //         </div>
                                //         <a href="" class="btn btn-sm btn-icon item-edit" data-bs-toggle="modal" data-bs-target="#basicModal">
                                //             <i class="bx bxs-edit"></i>
                                //         </a>
                                //     </td>
                                // </tr>`;
    //                     }
        
    //                     // Destroy existing DataTable and recreate it
    //                     $('#tblManageAccount').DataTable().clear().destroy();
    //                     $("#tbody").html(html);
        
    //                     // Initialize DataTable with scrollX
    //                     $("#tblManageAccount").DataTable({
    //                         scrollX: true,
    //                     });
    //                 }
    //             },
    //             error: function(err) {
    //                 console.log(err);
    //             },
    //         });
    //     }


    // function InputAddEmpcode(inputElement) {
	// 		var inputValue = inputElement.value;
	// 		var pattern = /^(?:[a-zA-Z0-9\s]+|)$/;
	// 		var errorMessage = document.getElementById("errAddempcode");
			
	// 		if (!pattern.test(inputValue)) {
	// 			errorMessage.style.display = "block";
	// 		} else {
	// 			errorMessage.style.display = "none";
	// 		}
	// 	}
	
	// 	function InputAddpersonal(inputElement) {
	// 		var inputValue = inputElement.value;
	// 		var pattern = /^(?:[a-zA-Z\s]+|)$/;
	// 		var errorMessage = document.getElementById("errAddpersonal");
			
	// 		if (!pattern.test(inputValue)) {
	// 			errorMessage.style.display = "block";
	// 		} else {
	// 			errorMessage.style.display = "none";
	// 		}
	// 	}
	
	// 	function InputEditpersonal(inputElement) {
	// 		var inputValue = inputElement.value;
	// 		var pattern = /^(?:[a-zA-Z\s]+|)$/;
	// 		var errorMessage = document.getElementById("errEditpersonal");
			
	// 		if (!pattern.test(inputValue)) {
	// 			errorMessage.style.display = "block";
	// 		} else {
	// 			errorMessage.style.display = "none";
	// 		}
	// 	}

		function chkAddEmpcode(text) {
			// ตรวจสอบว่า text เป็น null หรือไม่
			if (text === null) {
				return false;
			}
			// ตรวจสอบว่า text เป็นช่องว่างหรือไม่
			var trimmedText = text.trim();
			if (trimmedText === '') {
				return false;
			}
			var Pattern = /^(?:[a-zA-Z0-9\s]+|)$/;
			return Pattern.test(text);
		}

		function chkAddpersonal(text) {
			// ตรวจสอบว่า text เป็น null หรือไม่
			if (text === null) {
				return false;
			}
			// ตรวจสอบว่า text เป็นช่องว่างหรือไม่
			var trimmedText = text.trim();
			if (trimmedText === '') {
				return false;
			}
			var Pattern = /^(?:[a-zA-Z0-9\s]+|)$/;
			return Pattern.test(text);
		}

		function chkEditpersonal(text) {
			// ตรวจสอบว่า text เป็น null หรือไม่
			if (text === null) {
				return false;
			}
			// ตรวจสอบว่า text เป็นช่องว่างหรือไม่
			var trimmedText = text.trim();
			if (trimmedText === '') {
				return false;
			}
			var Pattern = /^(?:[a-zA-Z\s]+|)$/;
			return Pattern.test(text);
		}

    function showdropdown() {
        var url = API_URL + "Manage_account/show_drop_down";      
        $.ajax({
            method: "GET",
            url: base_url("ManageAccount/callApi?url=" + url),
            dataType: 'json',
            success: (response) => {
                console.log(response.permission);
                var permis = response.permission
                var plant = response.plantcode
                for (let i = 0; i < permis.length; i++) {
                    const data = permis[i];
                        $('.selPermissionAdd').append(`<option value="${data.spg_id}">${data.spg_name}</option>`)
                        $('.edtPermission').append(`<option value="${data.spg_id}">${data.spg_name}</option>`)
                }
                for (let i = 0; i < plant.length; i++) {
                    const data = plant[i];
                        $('.selPlantAdd').append(`<option value="${data.mpc_id}">${data.mpc_name}</option>`)
                        $('.edtPlantEdit').append(`<option value="${data.mpc_id}">${data.mpc_name}</option>`)
                }
            },
            error: (err) => {
                console.log(err);
            },
        });
    };

    function handleMenuItemSelection() {
        // Remove 'selected' class from all menu items
        $('.sidebar li').removeClass('active');
        
        // Add 'selected' class to the clicked menu item
        $(this).addClass('active');
    }
    
    // Add click event listener to each menu item
    $('.sidebar li').on('click', handleMenuItemSelection);
    function isValidEmail(email) {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }
    shDataTable()
    function shDataTable()  {
 
        $(document).ready(function () {
        // URL of the API
        var apiUrl = 'http://127.0.0.1/api/Manage_account/show_user';
    
        // Perform Ajax request
        $.ajax({
            url: apiUrl,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                // Get the menu container

    
                var html = "";
                // Loop through the data and append menu items
                for (var i = 0; i < data.length; i++) {
                    html += `
                        <tr>
                            <td>${i+1}</td>
                            <td>${data[i].sa_emp_code}</td>
                            <td>${data[i].spg_name}</td>
                            <td><i></i>${data[i].sa_firstname}<i></i>&nbsp;&nbsp;&nbsp;${data[i].sa_lastname}</td>
                            <td><i></i>${data[i].sa_email}</td>
                            <td><button class="btnStatus rounded-3 fw-semibold badge bg-${data[i].sa_status_flg == 1 ? 'success' : 'danger'} me-1" id="flgStatus" data-sa-id="${data[i].sa_id}" value="${data[i].sa_status_flg}">${data[i].sa_status_flg == 1 ? 'Enable' : 'Disable'}</button></td>
                            <td class="" style="">
                                <a href="" class="tblEditBtn btn btn-warning " data-bs-toggle="modal" data-bs-target="#mdlEdit" id="btnEdit" data-id="${data[i].sa_id}">
                                    <i class="bx bxs-edit"><div class="fas fa-edit"></div></i>
                                </a>
                            </td>
                        </tr>`;
                   
                }

                // let teble = new DataTable('#ex');
                // $('#ex tbody').html(html)

                // let table = new DataTable('#tblManageAccount');

                
                $('#tblManageAccount tbody').html(html)
                $('#tblManageAccount').DataTable()
	                        .promise()
	                        .done(() => {
	                            $("#tblManageAccount").DataTable({
	                                scrollX: true,
	                            });
	                        });
            },
            error: function (xhr, status, error) {
                console.error('Error:', error);
            }
        });
    
    
    });

    //-------------------------- Update flg status ----------------------------------

    $(document).on('click', '.btnStatus', function () {
        const saId = $(this).data('sa-id');
        var newStatus = $(this).closest('td').find('.btnStatus').val();

        if (newStatus == 1) {
            newStatus = 0
            
        } else if (newStatus == 0) {
            newStatus = 1
        }
        Swal.fire({
            title: 'Are you Sure',
            text: "You want to Changed Status ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, chang it!'
        }).then((result) => {
            if (result.isConfirmed) {
                var url = API_URL + "Manage_Account/upstatus";
                $.ajax({
                    url: base_url('ManageAccount/callApiUpdateStatus?url=') + url,
                    type: 'POST',
                    data: {
                        saId: saId,
                        newStatus: newStatus,
                    },
                    dataType: 'json',
                    success: function (response) {
                        if (response == true) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                html: 'Changed Status Success!',
                                timer: 1000,
                            }).then(() => {
                                shDataTable()
                                location.reload();
                            })
                        } else if (response == false) {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Warning!',
                                html: 'Change status Fail',
                                timer: 2500,
                            })
                        }


                    },
                    error: function (error) {

                    }
                });

            }
        })

    });
    }

    //-------------------------- add Account ----------------------------------

    $(document).ready(function () {
    $('#btnSaveAdd').on('click', function () {
        var arrDataAdd = [];
        var EmpCode = $('#inpEmpCode').val();
        var EmpPassword = $('#inpEmpPassword').val();
        var FirstName = $('#inpFirstName').val();
        var LastName = $('#inpLastName').val();
        var Email = $('#inpEmail').val();
        var Permission = $('#selPermissionAdd').val();
        var Plant = $('#selPlantAdd').val();

        if (EmpCode == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter employee code',
            })
        } else if (EmpPassword == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter password',
            })
        } else if (FirstName == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter FirstName',
            })
        } else if (LastName == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter LastName',
            })
        } else if (Permission == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please choose Permission',
            })
        } else if (Plant == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please choose Plant',
            })
        } else if (!chkAddEmpcode(EmpCode)) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter Employee Code as (a-z ,A-Z ,0-9) only.',
            })
        } else if (!chkAddpersonal(FirstName) || !chkAddpersonal(LastName)) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter Firstname or Lastname as (a-z ,A-Z) only.',
            })
        } else if(!isValidEmail(Email)){
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter your Email correctly.',
            })
        } else if (!isThaiLanguage(EmpCode) || !isThaiLanguage(EmpPassword) || !isThaiLanguage(Email)) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter in English only.',
            })
        } else {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to add Account",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, add account!'
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = API_URL + 'Manage_account/insert_user';
                    const formData = new FormData()
                    formData.append('EmpCode', EmpCode);
                    formData.append('EmpPassword', EmpPassword);
                    formData.append('EmpFirstName', FirstName);
                    formData.append('EmpLastName', LastName);
                    formData.append('EmpEmail', Email);
                    formData.append('EmpPermission', Permission);
                    formData.append('EmpPlantCode', Plant);
                    
                    $.ajax({
                        url: base_url('ManageAccount/callApiAddAccount'),
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: 'json',
                        success: function(res) {
                            if (res.result == 1) {

                                $('#add')[0].reset()
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success !',
                                    html: 'Add account success',
                                    timer: 2500,
                                }).then(() => {
                                    // $('#btnBack').trigger('click');
                                    $('#mdlAdd').modal('hide') //show
                                    shDataTable()
                                    
                                });
                            } else if (res.result == 9) {
                                Swal.fire({
            
                                    icon: 'warning',
                                    title: 'Ooops...',
                                    html: 'This employee code already exists.',
                                }).then(() => {
                                    location.reload();
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ooops...',
                                    html: 'A system error has occurred.',
                                });
                            }
                        }
                    });
                }
            });
        }
    });
});
    


    //-------------------------- Update Account ----------------------------------
    var data_acc
	        var accId
	    $(document).on('click', '.tblEditBtn', function() {

            
	        let id = $(this).attr('data-id');
	        accId = id
	        var url = API_URL + "Manage_account/show_show_acc";
	        $.ajax({
	            // url: base_url('ManageAccount/callApiEditAccount'),
	            url: API_URL + "Manage_account/show_show_acc",
	            type: 'POST',
	            data: {
	                id: id,
	            },
	            dataType: 'json',
	            success: (response) => {
                    data_acc = response.data
					// accId = response
	                // for (let i = 0; i < response.length; i++) {
	                //     const data = response[i];
	                    $('#edtEmpCode').val(response.data.sa_emp_code)
                        // $('#edtEmpPassword').val(response.data.sa_emp_password)
	                    $('#edtFirstName').val(response.data.sa_firstname)
	                    $('#edtLastName').val(response.data.sa_lastname)
	                    $('#edtEmail').val(response.data.sa_email)
	                    $('#edtPermission').val(response.data.spg_id)
	                    $('#edtPlantEdit').val(response.data.mpc_id)
	                // }
                    
	            }
	        });
	    })



	    //-------------------------- Save Edit ----------------------------------
	    $(document).ready(function () {
            $('#btnSaveEdit').on('click', function () {
                var arrDataAdd = [];
                var EmpCode = $('#edtEmpCode').val();
                var FirstName = $('#edtEmpPassword').val();
                var EmpPassword = ($('#edtEmpPassword').val().trim() == '') ? '' : $('#edtEmpPassword').val();
                var FirstName = $('#edtFirstName').val();
                var LastName = $('#edtLastName').val();
                var Email = $('#edtEmail').val();
                var Permission = $('#edtPermission').val();
                var Plant = $('#edtPlantEdit').val();

                
                if (
                    ( data_acc.sa_emp_password == EmpPassword || EmpPassword == '') &&
                    data_acc.sa_firstname == FirstName &&
                    data_acc.sa_lastname == LastName &&
                    data_acc.sa_email == Email &&
                    data_acc.spg_id == Permission &&
                    data_acc.mpc_id == Plant
                ) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Not changed !',
                        html: 'The information has not changed.',
                        timer: 2500,
                    }).then(() => {
                        $('#mdlEdit').modal('hide');
                        $('#btnBack').trigger('click');
                        location.reload();
                       
                    });
                
                } else if (FirstName == '') {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Please enter FirstName',
                    })
                } else if (LastName == '') {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Please enter LastName',
                    })
                } else if (Permission == '') {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Please choose Permission',
                    })
                } else if (Plant == '') {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Please choose Plant',
                    })
                } else if (!chkAddEmpcode(EmpCode)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Please enter Employee Code as (a-z ,A-Z ,0-9) only.',
                    })
                } else if (!chkAddpersonal(FirstName) || !chkAddpersonal(LastName)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Please enter Firstname or Lastname as (a-z ,A-Z) only.',
                    })
                } else if(!isValidEmail(Email)){
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Please enter your Email correctly.',
                    })
                } else if (!(isThaiLanguage(EmpPassword) || EmpPassword == '') || !isThaiLanguage(Email)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Please enter in English only.',
                    })
                } else {

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Do you want to add Account",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, add account!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            var url = API_URL + 'Manage_account/update_user';
                            const formData = new FormData()
                            formData.append('EmpCode', EmpCode);
                            formData.append('EmpPassword', EmpPassword);
                            formData.append('EmpFirstName', FirstName);
                            formData.append('EmpLastName', LastName);
                            formData.append('EmpEmail', Email);
                            formData.append('EmpPermission', Permission);
                            formData.append('EmpPlantCode', Plant);
                            
                            $.ajax({
                                url: base_url('ManageAccount/callApiUpdateAccount'),
                                type: 'POST',
                                data: formData,
                                processData: false,
                                contentType: false,
                                cache: false,
                                dataType: 'json',
                                success: function(res) {
                                    if (res.result == 1) {
        
                                        $('#add')[0].reset()
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Success !',
                                            html: 'Add account success',
                                            timer: 1000,
                                        }).then(() => {

                                            $('#mdlEdit').modal('hide') //show
                                            shDataTable()
                                            location.reload();
                                        });
                                    } else if (res.result == 9) {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Success!',
                                            html: 'The information has not changed.',
                                        }).then(() => {
                                            
                                        });
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Ooops...',
                                            html: 'A system error has occurred.',
                                        });
                                    }
                                }
                            });
                        }
                    });
                }
            });
        });
        
})