<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
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
  
  <script src="./static/main.js"></script>
  <script src="./static/auth.js"></script>
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
          <div class="mdc-layout-grid">
				<div class="mdc-layout-grid__inner">
				  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
					<div class="mdc-card p-0">
					  <p class="card-title card-padding pb-0"><b>Associate Information </b></p>
					  <div class="table-responsive">
						<table id="data-table" class="table">
							<thead class = "thead">
								<tr>
									<th class='text-left'>Associate Id</th>
										<th class="text-left">Name</th>
										<th class="text-left">Email</th>
										<th class="text-left">Actions</th>
									</tr>
							</thead>
							<tbody>
									
							</tbody>
						</table>
						
						
						<!--<button class="btn btn-primary" id="load-more">Load Data</button>-->
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
  
					<div class="modal fade" id="viewUserModal" tabindex="-1" role="dialog" aria-labelledby="viewUserModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document" id="stuEditModal">
						<div class="modal-content">
						  <div class="modal-header">
							<p class="modal-title" id="viewUserModalLabel"><b>Associate Information</b></p>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body" >
							<!-- Display User Details -->
							<div class='row'>
										<table class="table table-striped">
											<thead>
												<tr>
													<th class="text-left">Associate Id</th>
													<th class="text-left">Name</th>
													<th class="text-left">Email</th>
													
													
												</tr>
											</thead>
											<tbody>
												<td id="userAssociateId" class="text-left"></td>
												<td id="userName" class="text-left"></td>
												<td id="userEmail" class="text-left"></td>
										
												
												
											</tbody>
											<thead>
												<tr>
													<th class="text-left">Title</th>
													<th class="text-left">Department</th>
													
													<th class="text-left">Company</th>
													
													
												</tr>
											</thead>
											<tbody>
												<td id="userTitle" class="text-left"></td>
												<td id="userDepartment" class="text-left"></td>
												<td id="userCompany" class="text-left"></td>
												
											</tbody>
											
											<thead>
												<tr>
													<th class="text-left">City</th>
													<th class="text-left">State</th>
													
													<th class="text-left">Country</th>
													
													
												</tr>
											</thead>
											<tbody>
												<td id="userCity" class="text-left"></td>
												<td id="userState" class="text-left"></td>
												<td id="userCountry" class="text-left"></td>
												
											</tbody>
											
											<thead>
												<tr>
													<th class="text-left">Admin Name</th>
													<th class="text-left">Admin Id</th>
													
													<th class="text-left">Gender</th>
													
													
												</tr>
											</thead>
											<tbody>
												<td id="userAdminName" class="text-left"></td>
												<td id="userAdminId" class="text-left"></td>
												<td id="userGender" class="text-left"></td>
												
											</tbody>
											
											
										</table>
								
							
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						  </div>
						</div>
					  </div>
					</div>
					</div>
					
					
					
					
					<div class="modal fade" id="viewUserApplications" tabindex="-1" role="dialog" aria-labelledby="viewUserApplicationsModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document" id="stuEditModal">
						<div class="modal-content">
						  <div class="modal-header">
							<p class="modal-title" id="viewUserApplicationsModalLabel"><b>Associate Leave Applications</b></p>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body" >
							<!-- Display User Details -->
							<div class="table-responsive">
								<table id="applications-table" class="table">
									<thead class = "thead">
										<tr>
											<th class='text-left'>Leave Type</th>
												<th class="text-left">Start Date</th>
												<th class="text-left">End Date</th>
												<th class="text-left">No. Of Days</th>
												<th class="text-left">Status</th>
											</tr>
									</thead>
									<tbody>
											
									</tbody>
								</table>
								
								
								<!--<button class="btn btn-primary" id="load-more">Load Data</button>-->
							  </div>
								
							
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						  </div>
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
  
  <script>
  $(document).ready(function() {
		console.log('Document is ready.');

		const baseUrl = localStorage.getItem("url");
		const access = localStorage.getItem("access_token");
		const user = localStorage.getItem("id");
		const limit = 10;  // Number of items per page
		let allUsers = []; 
		let filteredUsers = [];
		let currentPage = 1; // Track the current page
		let applications = {};
		let pendingApplications = {};
		loadAssociates();
		
		loadPendingApplications();
		
		function loadAssociates(){
			$.ajax({
				url: `${baseUrl}/api/manager/associates/`,
				type: 'GET',
				headers: {
					"Authorization" : `Bearer ${access}`
				},
				success: function(data) {
					console.log('Data received from API:', data);
					allUsers = data; 
					filteredUsers = allUsers ;
					displayTableData();					
					//setupPagination(); // Call pagination after fetching data
					compareApplications()
				},
				error: function(err) {
					console.log('Error fetching data:', err);
				}
			});
		}
	


		function loadPendingApplications(){
			$.ajax({
				url: `${baseUrl}/leaves/pending/applications/`,
				type: 'GET',
				headers: {
					"Authorization" : `Bearer ${access}`
				},
				success: function(data){
					console.log("Pending Applications",data);
					pendingApplications = data;
					Object.assign(pendingApplications,data);
					compareApplications()
				},
				error: function(err){
					console.log("Error");
				}
			});
		}
		
		//let applystatus ={};
		
		function compareApplications() {
			
			if (allUsers.length === 0 || Object.keys(pendingApplications).length === 0) {
				return;
			}
			
			console.log(allUsers, pendingApplications)
			
			const users = allUsers.reduce((acc, user) => {
			  acc[user.id] = user.associate_id;
			  return acc;
			}, {});
			
			console.log(users);
			console.log(pendingApplications);

			const applystatus = {};
					
			
			for (const user in users){
				applystatus[user] = pendingApplications[user] ===  "Pending" ? "yes" : "No";
			}

			
			applications = applystatus ;
			console.log("Leave Status:", applystatus);
			console.log("application Status:", applications);
			//Object.assign(applications, applystatus);
			//alert(JSON.stringify(applystatus));
			
			displayTableData();
		}
		
		
		



		//console.log("Pending Applications",pendingApplications);
		// Function to display the table data
		/*function displayTableData() {
			let start = (currentPage - 1) * limit;
			let end = start + limit;
			let paginatedData = filteredUsers.slice(start, end);
			
			loadApplications();

			const tableBody = $('#data-table tbody');
			tableBody.empty(); // Clear the table before adding new data

			paginatedData.forEach(item => {
				tableBody.append(`
					<tr id="row-${item.id}">
						<td class="text-left">${item.associate_id}</td>
						<td class="text-left">${item.first_name} ${item.last_name</td>
						<td class="text-left">${item.email}</td>
						<td class="text-center">
							<button class='btn btn-light btn-view-user' data-id="${item.id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#viewUserModal">
								<i class="fa-solid fa-eye"></i> View
							</button>
							
						
						</td>
					</tr>
				`);
			});
		}*/
		
		

		// Function to display the table data
		function displayTableData() {
			let start = (currentPage - 1) * limit;
			let end = start + limit;
			let paginatedData = filteredUsers.slice(start, end);
			
			const tableBody = $('#data-table tbody');
			tableBody.empty(); // Clear the table before adding new data
			
			console.log("a",applications);
			
			

			paginatedData.forEach(item => {
				
				const showLeaveApprove = (id) => {
					return applications[id] === "yes" ? 
						`<button class='btn btn-light btn-view-applications' data-id="${id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#viewUserApplications">
							<i class="fa-solid fa-list"></i> Leave Approve
						</button>` 
						: "";
				};
				
				tableBody.append(`
					<tr id="row-${item.id}">
						<td class="text-left">${item.associate_id}</td>
						<td class="text-left">${item.first_name} ${item.last_name}</td>
						<td class="text-left">${item.email}</td>
						<td class="text-left">
							<button class='btn btn-light btn-view-user' data-id="${item.id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#viewUserModal">
								<i class="fa-solid fa-eye"></i> View
							</button>
							
							
							<!--<button class='btn btn-light btn-view-applications' data-id="${item.id}" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" data-toggle="modal" data-target="#viewUserApplications">
								<i class="fa-solid fa-list"></i> Leave Approve
							</button>-->
							 
							 ${showLeaveApprove(item.id)}
							 
							 
									
							
						</td>
					</tr>
				`);
			});
		}
		console.log(allUsers);
		
		$('#data-table').on('click', '.btn-view-user', function() {
			const userId = $(this).data('id');  // This fetches the correct user ID
			$.ajax({
				url: `${baseUrl}/api/associate/${userId}/`,  // Use the endpoint for the specific user
				type: 'GET',
				success: function(user) {
					
					//let full_name = user.first_name, user.last_name;
					let last_name;
					if(user.user_profile.last_name != null){
						last_name = `${user.user_profile.last_name}`;
					} else{
						last_name = "";
					}
					const full_name = `${user.user_profile.first_name} ${last_name}`
					
					
					$('#userAssociateId').text(user.user_profile.associate_id);
					$('#userName').text(full_name);
					$('#userEmail').text(user.user_profile.email);
					
					$('#userTitle').text(user.user_profile.employee_title);
					$('#userDepartment').text(user.user_profile.department);
					$('#userCompany').text(user.user_profile.company);
					
					$('#userCity').text(user.user_profile.city);
					$('#userState').text(user.user_profile.state);
					$('#userCountry').text(user.user_profile.country);
					
					$('#userGender').text(user.user_profile.gender);
					$('#userAdminName').text(`${user.workflow_configuration.admin.first_name} ${user.workflow_configuration.admin.last_name}`);
					$('#userAdminId').text(user.workflow_configuration.admin.associate_id);
					
					$('#viewUserModal').modal('show');  // Show the modal after fetching data
				},
				error: function(err) {
					console.error('Error fetching user details:', err);  // Log error if fetching fails
				}
			});
		});
		
		
		
		$('#data-table').on('click', '.btn-view-applications', function() {
			const userId = $(this).data('id');  // This fetches the correct user ID
			$.ajax({
				url: `${baseUrl}/leaves/applications/${userId}/`,  // Use the endpoint for the specific user
				type: 'GET',
				success: function(data) {
					var rows = '';
					data.forEach(function(application) {
                        rows += `
                            <tr>
                                <td class="text-left">${application.leave_type.leave_type}</td>
                                <td class="text-left">${application.start_date}</td>
								<td class="text-left">${application.end_date}</td>
								<td class="text-left">${application.no_of_days}</td>
								<td class="text-left">
									
										${application.status === "Pending" ? 
										`<button class="btn btn-primary approve" data-id="${application.application_id}">Approve</button>
										<button class="btn btn-primary reject" data-id="${application.application_id}">Reject</button>`
										:
										application.status}
									
								</td>
								
                                
                            </tr>
                        `;
					});
					$('#applications-table tbody').html(rows);
				},
				error: function(err) {
					console.error('Error fetching user details:', err);  // Log error if fetching fails
				}
			});
		});
		
		
		$('#viewUserApplications ').on('click', '.approve', function() {
			const applicationId = $(this).data('id'); 
			$.ajax({
				url: `${baseUrl}/leaves/application/${applicationId}/`,
				type: 'PUT',
				data: {
					status: "Approved",
					leave_approve_date: new Date().toISOString().split('T')[0],
					approved_by: user
				},
				success: function(response){
					alert("Leave Aprroved")
					$('#viewUserApplications').modal('hide');
					loadPendingApplications();
					displayTableData();
				},
				error: function(err){
					alert(err)
				}
				
			})
		});
		
		$('#viewUserApplications ').on('click', '.reject', function() {
			const applicationId = $(this).data('id'); 
			$.ajax({
				url: `${baseUrl}/leaves/application/${applicationId}/`,
				type: 'PUT',
				data: {
					status: "Rejected",
				},
				success: function(response){
					alert("Leave Rejected")
					$('#viewUserApplications').modal('hide');
					loadPendingApplications();
					displayTableData();
					
				},
				error: function(err){
					alert(err)
				}
				
			})
		});
		
		
  });
  </script>
</body>
</html> 
