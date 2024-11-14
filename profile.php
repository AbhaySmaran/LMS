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
  <link rel="stylesheet" href="./assets/css/demo/profile.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="./assets/images/favicon.png" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="./static/main.js"></script>
  <script src="./static/auth.js"></script>
</head>
<body>
<script></script>
  <div class="body-wrapper">
    
	<?php include 'components/sidebar.php'; ?>
   
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.php -->
	  <?php include 'components/header.php'; ?>
      
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
			<!--<div class="profile-edit">
				<div class="dp-container">
					<img src="./assets/images/faces/face1.jpg" alt="Profile" class="profile-dp" id="profile-dp">
					<button class="change-dp-btn" id="change-dp-btn">Change DP</button>
				</div>

				<div class="password-change">
					<h2>Change Password</h2>
					<input type="password" id="new-password" placeholder="New Password">
					<button class="save-password-btn" id="save-password-btn">Save Password</button>
				</div>

				<div class="edit-details">
					<h2>Change Details</h2>
					<button id="edit-details-btn">Edit Details</button>
				</div>
			</div>

		
			<div class="modal" id="edit-details-modal">
				<div class="modal-content">
					<h2>Edit Details</h2>
					<input type="text" id="name" placeholder="Name">
					<input type="email" id="email" placeholder="Email">
					<input type="text" id="phone" placeholder="Phone">
					<button id="save-details-btn">Save</button>
					<button id="cancel-btn">Cancel</button>
				</div>
			</div> 
			
			<!--<div class="profile-edit">
				<div class="dp-container">
					<img src="path/to/image.jpg" alt="Profile Picture" class="profile-dp">
					<button class="change-dp-btn">Change DP</button>
				</div>-->

				<!--<div class="password-change">
					<h3>Change Password</h3>
					<input type="password" class="password-input" placeholder="New Password">
					<button class="save-password-btn">Save Password</button>
				</div>

				<div class="edit-details">
					<h3>Edit Details</h3>
					<button id="save-details-btn">Save Details</button>
				</di
			</div>-->

			<div class="row">
				<!--<div class="col-md-3">
					<img src="" alt="Profile Picture" class="user-dp" id="userDp">
					<br/>
					<button class="btn btn-primary mt-3 btn-edit-user"  data-toggle="modal" data-target="#editUserModal">Edit Profile</button>
					<br />
					<button class="btn btn-primary mt-2 btn-change-password" data-toggle="modal" data-target="#userPasswordModal">Chnage Password</button>
					
				</div>-->
				<div class="col-md-9">
					<p><strong>Name:</strong> <span id="userName"></span></p>
					<p><strong>Associate Id:</strong> <span id="associateId"></span></p>
					<p><strong>Gender:</strong> <span id="userGender"></span></p>
					<p><b>Department:</b> <span id="department"></span></p>
					
					<p><b>Email:</b> <span id="userEmail"></span></p>
					
					<p><b>Conatact No:</b> <span id="userContact"></span></p>
					<p><b>Manager Id:</b> <span id="managerId"></span></p>
					<p><b>Manager Name:</b> <span id="managerName"></span></p>
					<p><b>Admin Id:</b> <span id="adminId"></span></p>
					<p><b>Admin Name:</b> <span id="adminName"></span></p>
				</div>

			</div>
			



          
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
  <!-- End plugin js for this page-->
  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <!-- inject:js -->
  <script src="./assets/js/material.js"></script>
  <script src="./assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="./assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
<script>
	$(document).ready(function(){
		const baseUrl = localStorage.getItem('url');
		const access_token = localStorage.getItem('access_token')
		getUser();
		
		function getUser(){
			$.ajax({
				url: `${baseUrl}/auth/profile/`,
				type: 'GET',
				headers: {
					"Authorization" : `Bearer ${access_token}`
				},
				success: function(user){
					//console.log(data)
					
					let imageUrl;
					if(user.dp_image != null) {
						imageUrl = `${baseUrl}${user.dp_image}`;
					} else {
						imageUrl = "./assets/images/default/default1.jpg";
					}
					//let full_name = user.first_name, user.last_name;
					
					let lastName;
					if(user.user_profile.last_name == null){
						lastName = "";
					}else{
						lastName = `${user.user_profile.last_name}`;
					}
					const full_name = `${user.user_profile.first_name} ${lastName}`;
					
					
					
					$('#userGender').text(user.user_profile.gender);
					$('#userName').text(full_name);
					$('#associateId').text(user.user_profile.associate_id);
					$('#userEmail').text(user.user_profile.email);
					$('#department').text(user.user_profile.department);
					$('#userContact').text(user.user_profile.contact);
					$('#managerId').text(user.workflow_configuration.home_manager.associate_id);
					$('#managerName').text(user.workflow_configuration.home_manager.first_name);
					$('#adminId').text(user.workflow_configuration.admin.associate_id);
					$('#adminName').text(user.workflow_configuration.home_manager.first_name);
				},
				error: function(err){
					console.log(err)
				}
			});
		}
		
		
	})
</script>
</script>
</body>
</html> 