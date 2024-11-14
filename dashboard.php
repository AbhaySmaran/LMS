<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Time-Off 1.0</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="./assets/vendors/jvectormap/jquery-jvectormap.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="./assets/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="./assets/images/favicon.png" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./static/auth.js"></script>
  <script src="./static/main.js"></script>
  
</head>
<body>

<!--<script src="./assets/js/preloader.js"></script>-->
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.php -->
	<?php include 'components/sidebar.php'; ?>
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.php -->
	  <?php include 'components/header.php'; ?>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
			<div class="d-flex justify-content-between mb-4">
				<div id="1btndiv " style="width:100%">
					<div id="btndiv" class="text-right"><button class="btn btn-primary" data-toggle="modal" data-target="#applyLeaveModal">Apply leave</button></div>
				<div>
			</div>
			
			<div class="mdc-layout-grid" id = "leave-statiscic-table">
				<div class="mdc-layout-grid__inner">
					<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
						<div class="mdc-card p-0">
							<p class="card-title card-padding pb-0"><b>Statistics:-</b></p>
							<div class="table-responsive">
								<table class="table tabble-bordered" id="leave">
									
									<thead>
										<tr>
										
											<th class="text-center"><div><button class="btn btn-light cancel-button"  style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"><b>No. of Associates: </b><h2><span id="total_associates"></span></h2></button></div></th>
											<th class="text-center"><div><button class="btn btn-light cancel-button"  style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"><b>No. of Managers: </b><h2><span id="total_managers"></span></h2></button></div></th>
											<th class="text-center"><div><button class="btn btn-light cancel-button"  style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"><b>No. of Admins: </b><h2><span id="total_admins"></span></h2></button></div></th>
											<th class="text-center"><div><button class="btn btn-ligth cancel-button"  style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"><b>No. of Pending Leave to Approve: </b><h2><span id="pending_applications"></span></h2></button></div></th>
										</tr>
									</thead>
									<tbody>
										<!-- Data will be injected here by jQuery -->
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="mdc-layout-grid">
				<div class="mdc-layout-grid__inner">
					<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
						<div class="mdc-card p-0">
							<p class="card-title card-padding pb-0"><b>Leave Balance:-</b></p>
							<div class="table-responsive">
								<table class="table tabble-bordered" id="leave-table">
									
									<thead>
										<tr>
											<th class="text-left">Casual Leave</th>
											<th class="text-left">Earned Leave</th>
											<th class="text-left">Sick Leave</th>
											<th class="text-left">Paternity Leave</th>
											<th class="text-left">Materniy Leave</th>
											<th class="text-left">Loss Of Pay</th>
											<th class="text-left">Compensatory Off</th>
											<th class="text-left">Child Adoption Leave</th>
										</tr>
									</thead>
									<tbody>
										<!-- Data will be injected here by jQuery -->
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="mdc-layout-grid">
				<div class="mdc-layout-grid__inner">
					<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
						<div class="mdc-card p-0">
							<p class="card-title card-padding pb-0"><b>My Leave History:-</b></p>
							<div class="table-responsive">
								<table class="table tabble-bordered" id="applications-table">
									
									<thead>
										<tr>
											<th class="text-left">Leave type</th>
											<th class="text-left">Start date</th>
											<th class="text-left">End date</th>
											<th class="text-left">Status</th>
											<th class="text-left"></th>
										</tr>
									</thead>
									<tbody>
										<!-- Data will be injected here by jQuery -->
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			
        </main>
        <!-- partial:partials/_footer.php -->
		
        <?php include 'components/footer.php'; ?>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="applyLeaveModal" tabindex="-1" role="dialog" aria-labelledby="applyLeaveModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document" >
		<div class="modal-content">
			<div class="modal-header">
                <h5 class="modal-title" id="applyLeaveModalLabel">Leave Application</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeAddDept">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form id="leaveApplicationForm">
				<div class="modal-body">
					
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								<label for="leave_type">Leave Type:</label>
							</div>
							<div class="col-md-10">
								<select class="form-control" id="leave_types" name="leave_type" required>
									<!-- Options will be populated by AJAX from the Leave model -->
								</select>
							</div>
						</div>
					</div>
					


					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								<label for="start_date">Start Date:</label>
							</div>
							<div class="col-md-10">
								<input class="form-control" type="date" id="start_date" name="start_date" required>
							</div>
						</div>
					</div>
					

					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								<label for="end_date">End Date:</label>
							</div>
							<div class="col-md-10">
								<input class="form-control" type="date" id="end_date" name="end_date" required>
							</div>
						</div>
					</div>

					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="is_half_day" name="is_half_day">
						<label class="form-check-label" for="is_half_day">Is Half Day:</label>
					</div>
					

					<div class="form-group">
						<div id="halfDayTypeContainer" style="display: none;">
							<div class="row">
								<div class="col-md-2">
									<label for="half_day_type">Half Day Type:</label>
								</div>
								<div class="col-md-10">
									<select class="form-control" id="half_day_type" name="half_day_type">
										<option value="">Select half day type</option>
										<option value="start_day">Start day</option>
										<option value="end_day">End day</option>
										<option value="start_and_end_day">Start and end day</option>
										<option value="all_day">All day</option>
									</select>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								<label for="no_of_days">Number of Days:</label>
							</div>
							<div class="col-md-10">
								<input class="form-control" type="number" id="no_of_days" name="no_of_days" readonly>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								<label for="leave_remarks">Leave Reason:</label>
							</div>
							<div class="col-md-10"> 
								<textarea class="form-control" id="leave_remarks" name="leave_remarks" required></textarea>
							</div>
						</div>
					</div>

				</div>
                    
					
				<div class="modal-footer">
					
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="closeAddDept">Close</button>
					<button type="submit" class="btn btn-primary">Apply</button>
				</div>
				
			</form>
        </div>
    </div>
</div>



 
  <!-- plugins:js -->
  <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="./assets/vendors/chartjs/Chart.min.js"></script>
  <script src="./assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="./assets/js/material.js"></script>
  <script src="./assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  

  <script src="./assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
  
<!--<script>
    window.onload = function() {
        if (!localStorage.getItem("pageReloaded")) {
            localStorage.setItem("pageReloaded", "true");
            
            
            window.location.reload();
        }
    };
</script>-->
 <script>
	
	$(window).on('load',function(){
		//window.onload = function () {window.location.reload()}
		
		
		
		const baseUrl = localStorage.getItem('url');
		const access = localStorage.getItem('access_token');
		
		const user = localStorage.getItem('id');
		const userId = localStorage.getItem('userId');
		loadLeaves();
		loadLeaveTypes();
		loadMyApplications();
		loadStatistics();
		//loadHolidays();
		let holidays = {};
		let halfDay;
		let leaveBalance = {};
		console.log("osId",userId)
		
		function loadHolidays(){
			$.ajax({
				url: `${baseUrl}/leaves/holidays/`,
				type: 'GET',
				success: function(data){
					holidays = data;
					processHolidays();
				},
			})
		}
		loadHolidays();
		
		


		function processHolidays() {
			console.log("Processing holidays data:", holidays);
		}
		console.log(holidays)
		
		function loadStatistics(){
			$.ajax({
				url:`${baseUrl}/leaves/statistics/`,
				type: 'GET',
				headers: {
					"Authorization": `Bearer ${access}`
				},
				success: function(response){
					$('#total_associates').text(response.associates);
					$('#total_admins').text(response.admins);
					$('#total_managers').text(response.managers);
					$('#pending_applications').text(response.pending_applications);
				}
			})
		}
		
		function loadMyApplications(){
			$.ajax({
				url: `${baseUrl}/leaves/applications/`,
				type: 'GET',
				headers: {
					"Authorization": `Bearer ${access}`
				},
				success: function(data) {
					$('#applications-table tbody').empty(); // Clear existing data
					data.forEach(application => {
						// Create a table row for each application
						let row = `
							<tr>
								<td class="text-left">${application.leave_type.leave_type}</td>
								<td class="text-left">${application.start_date}</td>
								<td class="text-left">${application.end_date}</td>
								<td class="text-left">${application.status}</td>
								<td class="text-left">
									${application.status === 'Pending' 
										? `<button class="btn btn-light cancel-button"  style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-id="${application.application_id}">Cancel</button>` 
										: ''}
								</td>
							</tr>`;
						$('#applications-table tbody').append(row); // Add row to the table body
					});
				},
				error: function(error) {
					alert("Error fetching leave applications.");
				}
			});
		}
		
		function loadLeaves(){
			$.ajax({
				url: `${baseUrl}/auth/leaves/`,
				type: 'GET',
				headers: {
					"Authorization": `Bearer ${access}`
				},
				success:function(data){
					//Object.assign(leaveBalance, data)
					var tbody = '';
                    data.forEach(function(leave) {
                        tbody += `
                            <tr>
                                <td class="text-left">${leave.casual_leave}</td>
                                <td class="text-left">${leave.earned_leave}</td>
								<td class="text-left">${leave.sick_leave}</td>
								<td class="text-left">${leave.paternity_leave}</td>
								<td class="text-left">${leave.maternity_leave}</td>
								<td class="text-left">${leave.loss_of_pay}</td>
								<td class="text-left">${leave.compensatory_off}</td>
								<td class="text-left">${leave.child_adoption_leave}</td>
                                
                            </tr>
                        `;
						leaveBalance = {
							casual_leave: leave.casual_leave,
							earned_leave: leave.earned_leave,
							sick_leave: leave.sick_leave,
							paternity_leave: leave.paternity_leave,
							maternity_leave: leave.maternity_leave,
							loss_of_pay: leave.loss_of_pay,
							compensatory_off: leave.compensatory_off,
							child_adoption_leave: leave.child_adoption_leave
						};
                    });
                    $('#leave-table tbody').html(tbody);
				}
				
			})
		}
		
		function loadLeaveTypes(){
			$.ajax({
				url:`${baseUrl}/leaves/list/`,
				type: 'GET',
				success: function(data) {
					// Clear any existing options in the dropdown
					$('#leave_types').empty();

					// Populate the dropdown with options
					data.forEach(function(leave) {
						$('#leave_types').append(
							`<option value="${leave.id}">${leave.leave_type}</option>`
						);
					});
				},
				error: function(xhr, status, error) {
					console.error("Error fetching leave types:", error);
				}
			})
		}
		
		
		
		
		
		
		$('#leaveApplicationForm').submit(function(e){
			e.preventDefault();
			const formData = {
				//associate: userId,
                leave_type: $('#leave_types').val(),
                start_date: $('#start_date').val(),
                end_date: $('#end_date').val(),
                is_half_day: $('#is_half_day').is(':checked'),
                half_day_type: $('#is_half_day').is(':checked') ? $('#half_day_type').val() : null,
                no_of_days: $('#no_of_days').val(),
                leave_remarks: $('#leave_remarks').val(),
            };
			
			
			const selectedLeaveType = $('#leave_types option:selected').text().toLowerCase().replace(/ /g, '_');
			const requestedDays = parseFloat($('#no_of_days').val());
			const availableDays = parseFloat(leaveBalance[selectedLeaveType]);
			
			console.log(selectedLeaveType);
			console.log(requestedDays);
			console.log(availableDays);
			
			if (requestedDays > availableDays) {
				alert("Insufficient leave days. You have " + availableDays + " days left for this leave type.");
				return;
			}

            $.ajax({
                url: `${baseUrl}/leaves/applications/`, 
                type: 'POST',
                contentType: 'application/json',
                headers: {
                    "Authorization": `Bearer ${access}`
                },
                data: JSON.stringify(formData),
                success: function(response) {
                    alert("Leave application submitted successfully!");
					
                    $('#leaveApplicationForm')[0].reset();
					 $('#halfDayTypeContainer').hide();
                    $('#applyLeaveModal').modal('hide');
					
					const remainingDays = availableDays - requestedDays;
					//const leaveType = leaveBalance[selectedLeaveType];
					//updateLeaveBalance(selectedLeaveType, remainingDays);
					loadLeaves();
					loadMyApplications();
					loadStatistics();
					console.log("id",userId);
                },
                error: function(err) {
                    alert("Error submitting leave application.");
                }
            });
		})
		
		function updateLeaveBalance(leaveType, remainingDays) {
			const updateData = {
				id: userId,
				[leaveType]: remainingDays,
			};
			console.log('outside ajax');
			$.ajax({
				url: `${baseUrl}/leaves/leave-setup/list/`,
				type: 'PUT',
				contentType: 'application/json',
				headers: {
					"Authorization": `Bearer ${access}`
				},
				data: JSON.stringify(updateData),
				success: function(response) {
					alert(`Leave balance for ${leaveType} updated to ${remainingDays} days.`);
					loadLeaves(); // Refresh leave balances after update
					console.log("inside")
				},
				error: function(err) {
					alert("Error updating leave balance.");
				}
			});
		}
		
		$('#applications-table').on('click', '.cancel-button', function(){
			const applicationId = $(this).data('id');
			if(window.confirm("Cancel the application?")){
				$.ajax({
					url: `${baseUrl}/leaves/application/${applicationId}/`,
					type: 'PUT',
					data: {
						status: "Cancelled",
					},
					success: function(response){
						loadLeaves();
						loadMyApplications();
						loadStatistics();
						
					},
					error: function(err){
						alert(err)
					}
					
				})
			}
		});
		
		
		
		$(document).on('click', '#closeAddDept', function(){
			$('#leaveApplicationForm')[0].reset();
			$('.form-control').removeClass('is-invalid');
			$('.invalid-feedback').text('');
		})
		
			

		
		$('#is_half_day').change(function() {
			if ($(this).is(':checked')) {
				$('#halfDayTypeContainer').show();
			} else {
				$('#halfDayTypeContainer').hide();
				$('#half_day_type').val('');
			}
		});

		$('#start_date, #end_date').change(function() {
			ApplyLeaveDatesCount();
		});
		
		$('#half_day_type').change(function() {
			ApplyLeaveDatesCount();
		});
		
		
		$('#is_half_day').change(function() {
			ApplyLeaveDatesCount();
		});

		function ApplyLeaveDatesCount() {
			const leaveStartDay = $('#start_date').val();
			const leaveEndDay = $('#end_date').val();

			if (!leaveStartDay || !leaveEndDay) {
				$('#no_of_days').val(''); // Clear the field if dates are missing
				return;
			}

			const parseDate = (dateStr) => {
				const [year, month, day] = dateStr.split("-").map(Number);
				return new Date(year, month - 1, day);
			};

			const startDate = parseDate(leaveStartDay);
			const endDate = parseDate(leaveEndDay);
			const holidayDates = Object.keys(holidays).map(parseDate);

			const halfDayType = $('#half_day_type').val();

			// Define flags only if half-day type is selected
			let halfDayStart = false;
			let halfDayEnd = false;
			let halfDayAll = false;
			let halfDayStartAndEnd = false;

			if (halfDayType) {
				if (halfDayType === "start_day") {
					halfDayStart = true;
				} else if (halfDayType === "end_day") {
					halfDayEnd = true;
				} else if (halfDayType === "all_day") {
					halfDayAll = true;
				} else if (halfDayType === "start_and_end_day") {
					halfDayStartAndEnd = true;
				}
			}
			
			

			// Helper functions
			const isHoliday = (date) => holidayDates.some(holiday => holiday.getTime() === date.getTime());
			const isWeekend = (date) => date.getDay() === 0 || date.getDay() === 6;

			// Calculate total leave days
			let totalLeaveDays = 0;
			let currentDate = new Date(startDate);

			while (currentDate <= endDate) {
				if (!isHoliday(currentDate) && !isWeekend(currentDate)) {
					// Apply half-day calculations only if a half-day type is selected
					if (halfDayAll) {
						totalLeaveDays += 0.5;
					} else if (currentDate.getTime() === startDate.getTime() && halfDayStart) {
						totalLeaveDays += 0.5;
					} else if (currentDate.getTime() === endDate.getTime() && halfDayEnd) {
						totalLeaveDays += 0.5;
					} else if (currentDate.getTime() === startDate.getTime() && halfDayStartAndEnd) {
						totalLeaveDays +=0.0 ;
					} else {
						totalLeaveDays += 1;
					}
				}
				currentDate.setDate(currentDate.getDate() + 1);
			}

			$('#no_of_days').val(totalLeaveDays);
		}


		
		
		
		
	});
  </script>
</body>
</html> 