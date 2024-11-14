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
					  <p class="card-title card-padding pb-0"><b>Associate Leaves Setup </b></p>
					  <div class="table-responsive">
						<table id="data-table" class="table table-bordered">
							<thead class = "thead">
								<tr>
									<th class='text-left' style="white-space: nowrap;">Id</th>
									<th class='text-left' style="white-space: nowrap;">Associate Id</th>
									<th class='text-left' style="white-space: nowrap;">Associate Name</th>
									<th class="text-left" style="white-space: nowrap;">Leave year</th>
									<th class="text-left" style="white-space: nowrap;">Leave year start</th>
									<th class="text-left" style="white-space: nowrap;">leave year end</th>
									<th class="text-left" style="white-space: nowrap;">Casual leave</th>
									<th class="text-left" style="white-space: nowrap;">CL carry</th>
									<th class="text-left" style="white-space: nowrap;">Earned leave</th>
									<th class="text-left" style="white-space: nowrap;">EL carry</th>
									<th class="text-left" style="white-space: nowrap;">Sick leave</th>
									<th class="text-left" style="white-space: nowrap;">SL carry</th>
									<th class="text-left" style="white-space: nowrap;">Paternity leave</th>
									<th class="text-left" style="white-space: nowrap;">PL carry</th>
									<th class="text-left" style="white-space: nowrap;">Maternity leave</th>
									<th class="text-left" style="white-space: nowrap;">ML carry</th>
									<th class="text-left" style="white-space: nowrap;">Loss of pay</th>
									<th class="text-left" style="white-space: nowrap;">LOP carry</th>
									<th class="text-left" style="white-space: nowrap;">Compensatory off</th>
									<th class="text-left" style="white-space: nowrap;">CO carry</th>
									<th class="text-left" style="white-space: nowrap;">Child adoption leave</th>
									<th class="text-left" style="white-space: nowrap;">CAL carry</th>
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
			
			<div class="text-right">
				<button class="btn btn-primary" id= "modify-data">Modify</button>
				<button type="submit" class="btn btn-primary">Submit</button>
			<div>
        </main>
        <!-- partial:partials/_footer.php -->
		<?php include 'components/footer.php'; ?>
        
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
  
 <!-- <script>
	 $(document).ready(function() {
		console.log('Document is ready.');

		const baseUrl = localStorage.getItem("url");
		const access = localStorage.getItem("access_token");
		const limit = 10;  // Number of items per page
		const user = localStorage.getItem('id');
		let allUsers = []; 
		let filteredUsers = [];
		let currentPage = 1; // Track the current page
		
		loadAssociates();
		
		function loadAssociates(){
			$.ajax({
				url: `${baseUrl}/api/associate/list/`,
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
				},
				error: function(err) {
					console.log('Error fetching data:', err);
				}
			});
		}

		// Function to display the table data
		function displayTableData() {
			let start = (currentPage - 1) * limit;
			let end = start + limit;
			let paginatedData = filteredUsers.slice(start, end);

			const tableBody = $('#data-table tbody');
			tableBody.empty(); // Clear the table before adding new data

			paginatedData.forEach(item => {
				tableBody.append(`
					<tr id="row-${item.id}" data-associate-pk="${item.id}">
						<td class="text-left">${item.id}</td>
						<td class="text-left">${item.associate_id}</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				`);
			});
		}
		
		$('#modify-data').on('click', function() {
			$('#data-table tbody tr').each(function() {
				// Iterate over each cell in the row except for the first two cells (Id and Associate Id)
				$(this).children('td').each(function(index) {
					if (index > 1) { // Skip Id and Associate Id columns
						const currentText = $(this).text();
						$(this).html(`<input type="text" value="${currentText}" class="form-control editable-field" />`);
						if (index == 3 || index == 4){
							$(this).html(`<input type="date" value="${currentText}" class="form-control editable-field" />`);
						}
					}
				});
			});
		});
		
		
		$('button[type="submit"]').on('click', function() {
			const updatedData = [];

			// Loop through each row to gather modified data
			$('#data-table tbody tr').each(function() {
				const rowId = $(this).attr('id').split('-')[1];
				const associateId = $(this).find('td').eq(1).text(); // Assuming second column is Associate Id
				const associatePk = $(this).data('associate-pk');
				
				// Gather updated values for each editable field in the row
				const rowUpdates = {
					id: rowId,
					associate_id: associatePk,
					leave_year: $(this).find('td').eq(2).find('input').val(),
					leave_year_start: $(this).find('td').eq(3).find('input').val(),
					leave_year_end: $(this).find('td').eq(4).find('input').val(),
					casual_leave: $(this).find('td').eq(5).find('input').val(),
					cl_carry: $(this).find('td').eq(6).find('input').val(),
					earned_leave: $(this).find('td').eq(7).find('input').val(),
					el_carry: $(this).find('td').eq(8).find('input').val(),
					sick_leave: $(this).find('td').eq(9).find('input').val(),
					sl_carry: $(this).find('td').eq(10).find('input').val(),
					paternity_leave: $(this).find('td').eq(11).find('input').val(),
					pl_carry: $(this).find('td').eq(12).find('input').val(),
					maternity_leave: $(this).find('td').eq(13).find('input').val(),
					ml_carry: $(this).find('td').eq(14).find('input').val(),
					loss_of_pay: $(this).find('td').eq(15).find('input').val(),
					lop_carry: $(this).find('td').eq(16).find('input').val(),
					compensatory_off: $(this).find('td').eq(17).find('input').val(),
					co_carry: $(this).find('td').eq(18).find('input').val(),
					child_adoption_leave: $(this).find('td').eq(19).find('input').val(),
					cal_carry: $(this).find('td').eq(20).find('input').val(),
					updated_by:user,
				};

				updatedData.push(rowUpdates);
			});

			// Send updated data to server
			$.ajax({
				url: `${baseUrl}/leaves/leave-setup/update/`, // Adjust this endpoint for updating Leave Setup data
				type: 'POST',
				headers: {
					"Authorization" : `Bearer ${access}`,
					"Content-Type": "application/json"
				},
				data: JSON.stringify(updatedData),
				success: function(response) {
					alert('Data updated successfully!');
					loadData(); // Reload data to reflect changes
				},
				error: function(err) {
					console.log('Error updating data:', err);
					alert('Error updating data');
				}
			});
		});
		
		
	 });
		
  </script>-->
  
  
  <script>
 $(document).ready(function() {
	console.log('Document is ready.');

	const baseUrl = localStorage.getItem("url");
	const access = localStorage.getItem("access_token");
	const limit = 10;  // Number of items per page
	const user = localStorage.getItem('id');
	let associates = []; 
	let leaveSetups = [];
	let combinedData = [];
	let currentPage = 1;
	let leaveCounts={};
	let cl;
	let clData = {};
	let casualLeaves, sickLeaves, earnedLeaves, paternityLeaves, maternityLeaves, lossOfPay, compensatoryOff, childAdoptionLeave;

	loadData();
	loadLeaveCounts();

	function loadData() {
		// Load Associates and LeaveSetups data concurrently
		$.when(loadAssociates(), loadLeaveSetups(),loadLeaveCounts()).done(function() {
			mergeData();
			displayTableData();
		});
	}

	/*function populateData(data){
		console.log("working",data)
		leaveCounts = data['CL'];
		
	}*/
	
	function loadLeaveCounts(){
		return $.ajax({
			url: `${baseUrl}/leaves/data/`,
			type: 'GET',
			headers: {
				"Authorization": `Bearer ${access}`
			},
			success: function(data) {
				console.log("data",data);
				console.log("cl",data['CL']);
				//leaveCounts = data;
				//populateData(data);
				Object.assign(leaveCounts,data);
				
				casualLeaves = data['CL'];
				sickLeaves = data['SL'];
				earnedLeaves = data['EL'];
				paternityLeaves = data['PL'];
				maternityLeaves = data['ML'];
				lossOfPay = data['LOP'];
				compensatoryOff = data['CO'];
				childAdoptionLeave = data['CAL'];
			
				/*cl=data['CL'];
				
				console.log("cl type",typeof(cl));
				if ( typeof data['CL'] === 'number') {
					console.log("string");
				}else{
					console.log("not string");
				}
				console.log(typeof(data));
				
				
				console.log('Leave Counts:', leaveCounts);*/
			},
			error: function(err) {
				console.log('Error loading leave counts:', err);
			}
			
		})
	}
	
	//console.log("cl data",clData);
	
	console.log("leave Counts of CL",leaveCounts);
	//console.log("leave Counts of CL",leaveCounts['CL']);
	console.log(typeof(leaveCounts));
	
	let casual_leaves = leaveCounts['CL'];
	let sick_leaves = leaveCounts['SL'];
	let earned_leaves = leaveCounts['EL'];
	
	

	console.log("el",earned_leaves);

	function loadAssociates() {
		return $.ajax({
			url: `${baseUrl}/api/associate/list/`,
			type: 'GET',
			headers: {
				"Authorization": `Bearer ${access}`
			},
			success: function(data) {
				associates = data;
				console.log('Associates loaded:', associates);
			},
			error: function(err) {
				console.log('Error loading associates:', err);
			}
		});
	}

	function loadLeaveSetups() {
		return $.ajax({
			url: `${baseUrl}/leaves/leave-setup/list/`,
			type: 'GET',
			headers: {
				"Authorization": `Bearer ${access}`
			},
			success: function(data) {
				leaveSetups = data;
				console.log('Leave setups loaded:', leaveSetups);
			},
			error: function(err) {
				console.log('Error loading leave setups:', err);
			}
		});
	}


	// Merge data based on associate_id
	function mergeData() {
		combinedData = associates.map(associate => {
			let leaveSetup = leaveSetups.find(l => l.associate_id === associate.id) || {};
			return {
				id: associate.id,
				employee_id: associate.associate_id,
				associate_name: `${associate.first_name} ${associate.last_name}`,
				
				...leaveSetup // Spreads leaveSetup properties, if any, into the result object
			};
		});
	}
	
	console.log(combinedData);

	// Display combined data in the table
	function displayTableData() {
		let start = (currentPage - 1) * limit;
		let end = start + limit;
		let paginatedData = combinedData;

		const tableBody = $('#data-table tbody');
		tableBody.empty();
		
		function formatBoolean(value) {
			return value ? 'Yes' : 'No';
		}

		paginatedData.forEach(item => {
			tableBody.append(`
				<tr id="row-${item.id}" data-associate-pk="${item.id}">
					<td class="text-left">${item.id}</td>
					<td class="text-left">${item.employee_id}</td>
					<td class="text-left">${item.associate_name}</td>
					<td>${item.leave_year || ''}</td>
					<td>${item.leave_year_start || ''}</td>
					<td>${item.leave_year_end || ''}</td>
					<td>${item.casual_leave || casualLeaves}</td>
					<td>${formatBoolean(item.cl_carry)}</td>
					<td>${item.earned_leave || earnedLeaves}</td>
					<td>${formatBoolean(item.el_carry)}</td>
					<td>${item.sick_leave || sickLeaves}</td>
					<td>${formatBoolean(item.sl_carry)}</td>
					<td>${item.paternity_leave || paternityLeaves}</td>
					<td>${formatBoolean(item.pl_carry)}</td>
					<td>${item.maternity_leave || maternityLeaves}</td>
					<td>${formatBoolean(item.ml_carry)}</td>
					<td>${item.loss_of_pay || lossOfPay}</td>
					<td>${formatBoolean(item.lop_carry)}</td>
					<td>${item.compansatory_off || compensatoryOff}</td>
					<td>${formatBoolean(item.co_carry)}</td>
					<td>${item.child_adoption_leave || childAdoptionLeave}</td>
					<td>${formatBoolean(item.cal_carry)}</td>
				</tr>
			`);
		});
	}

	// Modify data on button click
	$('#modify-data').on('click', function() {
		$('#data-table tbody tr').each(function() {
			$(this).children('td').each(function(index) {
				if (index > 2) {
					const currentText = $(this).text();
					$(this).html(`<input type="${index === 4 || index === 5 ? 'date' : 'text'}" value="${currentText}" class="form-control editable-field" />`);
				}
			});
		});
	});

	// Submit updated data
	$('button[type="submit"]').on('click', function() {
		const updatedData = [];

		$('#data-table tbody tr').each(function() {
			const rowId = $(this).attr('id').split('-')[1];
			const associatePk = $(this).data('associate-pk');
			
			const rowUpdates = {
				id: rowId,
				associate_id: associatePk,
				leave_year: $(this).find('td').eq(3).find('input').val(),
				leave_year_start: $(this).find('td').eq(4).find('input').val(),
				leave_year_end: $(this).find('td').eq(5).find('input').val(),
				casual_leave: $(this).find('td').eq(6).find('input').val(),
				cl_carry: $(this).find('td').eq(7).find('input').val(),
				earned_leave: $(this).find('td').eq(8).find('input').val(),
				el_carry: $(this).find('td').eq(9).find('input').val(),
				sick_leave: $(this).find('td').eq(10).find('input').val(),
				sl_carry: $(this).find('td').eq(11).find('input').val(),
				paternity_leave: $(this).find('td').eq(12).find('input').val(),
				pl_carry: $(this).find('td').eq(13).find('input').val(),
				maternity_leave: $(this).find('td').eq(14).find('input').val(),
				ml_carry: $(this).find('td').eq(15).find('input').val(),
				loss_of_pay: $(this).find('td').eq(16).find('input').val(),
				lop_carry: $(this).find('td').eq(17).find('input').val(),
				compensatory_off: $(this).find('td').eq(18).find('input').val(),
				co_carry: $(this).find('td').eq(19).find('input').val(),
				child_adoption_leave: $(this).find('td').eq(20).find('input').val(),
				cal_carry: $(this).find('td').eq(21).find('input').val(),
				updated_by:user,
			};

			updatedData.push(rowUpdates);
		});
		
		if(window.confirm("Update leaves setup")){
			$.ajax({
				url: `${baseUrl}/leaves/leave-setup/update/`,
				type: 'POST',
				headers: {
					"Authorization": `Bearer ${access}`,
					"Content-Type": "application/json"
				},
				data: JSON.stringify(updatedData),
				success: function(response) {
					alert('Data updated successfully!');
					loadData();
				},
				error: function(err) {
					console.log('Error updating data:', err);
					alert('Error updating data');
				}
			});
		};
		
		
		
	});
});

  
  </script>
</body>
</html> 