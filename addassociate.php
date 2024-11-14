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
		<p><b>Add Associate</b></p>
			<div class="mdc-layout-grid">
				
				<form id = "registrationForm" enctype="multipart/form-data">
				
					<div class='row mb-3'>
					  <div class='col-md-2'><label>Email:</label></div>
					  <div class='col-md-10'>
						  <input
							type="email"
							name="email"
							class= "form-control"
							id= "useremail"
						  />
						  <div class="invalid-feedback">
							{error.email && <p>{error.email}</p>}
						  </div>
					  </div>
					</div>
					
					<div class='row mb-3'>
					  <div class='col-md-2'><label>Password:</label></div>
					  <div class='col-md-10'>
						  <input
							type="password"
							name="password"
							class= "form-control"
							id = "password"
						  />
						  <div class="invalid-feedback">
							{error.password && <p>{error.password}</p>}
						  </div>
					  </div>
					</div>
					<div class='row mb-3'> 
					  <div class='col-md-2'><label>First Name:</label></div>
					  <div class='col-md-10'>
						  <input
							type="text"
							name="first_name"
							class= "form-control"
							id = "first_name"
						  />
						  <div class="invalid-feedback">
							{error.first_name && <p>{error.first_name}</p>}
						  </div>
					  </div>
					</div>
					<div class='row mb-3'>
					  <div class='col-md-2'><label>Last Name:</label></div>
					  <div class='col-md-10'>
						  <input
							type="text"
							name="last_name"
							class= "form-control"
							id = "last_name"
						  />
					  </div>
					</div>
					
					<div class='row mb-3'>
					  <div class='col-md-2'><label>Gender:</label></div>
					  <div class='col-md-10'>
						  <select
							type="text"
							name= "gender"
							class = "form-control"
							id = "usergender"
						  >
							<option value="">Select</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						  </select>
						  <div class="invalid-feedback">
								{error.gender}
							</div>
					  </div>
					</div>
					
					
					

					<div class='row mb-3'>
					  <div class='col-md-2'><label>Phone:</label></div>
					  <div class='col-md-10'>
						  <input
							type="number"
							name= "phone"
							class= "form-control"
							id = "phone"
						  />
						  <div class="invalid-feedback">
							{error.phone && <p>{error.phone}</p>}
						  </div>
					  </div>
					</div>
					
					
				    
					<div class='row mb-3'>
					  <label class='col-md-2'>Department:</label>
					  <div class='col-md-10'>
						  <input
							type="text"
							name= "department"
							class= "form-control"
							id = "userdept"
						  />
						  
					  </div>
					</div>
					
					<div class='row mb-3'>
					  <label class='col-md-2'>Employee Title:</label>
					  <div class='col-md-10'>
						  <input
							type="text"
							name= "emp_title"
							class= "form-control"
							id = "useremp_title"
						  />
						  
					  </div>
					</div>
					<div class='row mb-3'>
					  <label class='col-md-2'>Address:</label>
					  <div class='col-md-10'>
						  <input
							type="text"
							name= "address"
							class= "form-control"
							id = "useraddress"
						  />
						  
					  </div>
					</div>
					<div class='row mb-3'>
					  <label class='col-md-2'>City:</label>
					  <div class='col-md-10'>
						  <input
							type="text"
							name= "city"
							class= "form-control"
							id = "usercity"
						  />
						  
					  </div>
					</div>
					<div class='row mb-3'>
					  <label class='col-md-2'>State:</label>
					  <div class='col-md-10'>
						  <input
							type="text"
							name= "state"
							class= "form-control"
							id = "userstate"
						  />
						  
					  </div>
					</div>
					<div class='row mb-3'>
					  <label class='col-md-2'>Country:</label>
					  <div class='col-md-10'>
						  <input
							type="text"
							name= "country"
							class= "form-control"
							id = "usercountry"
						  />
						  
					  </div>
					</div>
					<div class='row mb-3'>
						<div class='col-md-2'><label>Manager:</label></div>
						<div class='col-md-10'>
						  <label><input type="checkbox" name="manager" id="manager_yes" value="true" /> Yes</label>
						  <label><input type="checkbox" name="manager" id="manager_no" value="false" /> No</label>
						</div>
					  </div>

					  <div class='row mb-3'>
						<div class='col-md-2'><label>Admin:</label></div>
						<div class='col-md-10'>
						  <label><input type="checkbox" name="admin" id="admin_yes" value="true" /> Yes</label>
						  <label><input type="checkbox" name="admin" id="admin_no" value="false" /> No</label>
						</div>
					  </div>
					<div class="mdc-layout-grid d-flex justify-content-end">
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
				</form>
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
		document.addEventListener('DOMContentLoaded', function() {
			
 
			// jQuery event listeners for exclusive checkbox selection
			$('#manager_yes').on('change', function() {
			  if (this.checked) $('#manager_no').prop('checked', false);
			});
			$('#manager_no').on('change', function() {
			  if (this.checked) $('#manager_yes').prop('checked', false);
			});
			$('#admin_yes').on('change', function() {
			  if (this.checked) $('#admin_no').prop('checked', false);
			});
			$('#admin_no').on('change', function() {
			  if (this.checked) $('#admin_yes').prop('checked', false);
			});

					
						
			document.getElementById('registrationForm').addEventListener('submit', async function(e) {
				e.preventDefault();
				
				const baseUrl = localStorage.getItem("url");
				const form = this;
				const formData = new FormData();
				console.log("before submit",formData);
				console.log("before submit",formData);
				
				clearValidationErrors();
				
				
						
				
				
				const password = document.getElementById('password').value;
				//const email = document.getElementById('email').value;
				const first_name = document.getElementById('first_name').value;
				const last_name = document.getElementById('last_name').value;
				
				
				//const gender = document.getElementById('gender').value;
				
				const phone = document.getElementById('phone').value;
				
				//const address = document.getElementById('address').value;
				//const city = document.getElementById('city').value;
				//const state = document.getElementById('state').value;
				//const country = document.getElementById('country').value;
				const dept = document.getElementById('userdept').value;
				const emp_title = document.getElementById('useremp_title').value;

				if($('#useremail').val()) formData.append('email',$('#useremail').val());
				if($('#usergender').val()) formData.append('gender',$('#usergender').val());
				//formData.append('email', email);
				formData.append('address',$('#useraddress').val());
				formData.append('city',$('#usercity').val());
				formData.append('state',$('#userstate').val());
				formData.append('country',$('#usercountry').val());
				if (password) formData.append('password', password);
				if (first_name) formData.append('first_name', first_name);
				if (last_name) formData.append('last_name', last_name);
				
				//if (gender) formData.append('gender', gender);
				if (phone) formData.append('contact', phone);
				
				if (dept) formData.append('department', dept);
				if (emp_title) formData.append('employee_title', emp_title);
				//if (address) formData.append('address', address);
				//if (city) formData.append('city', city);
				//if (state) formData.append('state', state);
				//if (country) formData.append('country', country);
				//formData.append('manager', $('#manager_yes').is(':checked'));
				//formData.append('admin', $('#admin_yes').is(':checked'));
				
				formData.append('is_manager', $('#manager_yes').is(':checked') ? "true" : "false");
				formData.append('is_admin', $('#admin_yes').is(':checked') ? 'true' : 'false');


				
				
				console.log("after submit",formData);
				
				try {
					const response = await fetch(`${baseUrl}/api/associate/register/`, {
						method: 'POST',
						body: formData
					});

					// Check if the response is successful
					console.log("before if");
					console.log(response);
					if (response.ok) {
						const data = await response.json();
						alert("User Added Successfully");
						form.reset();  // Reset the form after successful submission
					} else {
						console.log("after if");
						const errorData = await response.json();
						displayValidationErrors(errorData);
						
						// Handle validation errors
					}
				} catch (error) {
					//console.error('Error:', error);
					console.log("error occure");
				}
			});
			
			function displayValidationErrors(errors) {
				// Clear previous errors
				clearValidationErrors();

				// Iterate over errors and display them in the form
				for (const field in errors) {
					if (errors.hasOwnProperty(field)) {
						const errorMessage = errors[field][0];

						// Find the input or select element by name
						const inputElement = document.querySelector(`[name=${field}]`);
						
						if (inputElement) {
							inputElement.classList.add('is-invalid');  // Add invalid class

							// Display error message next to the field
							const feedbackElement = inputElement.nextElementSibling;
							if (feedbackElement) {
								feedbackElement.textContent = errorMessage;  // Set error message
							}
						}
					}
				}
			}

			
			function clearValidationErrors() {
				const inputs = document.querySelectorAll('.form-control');
				inputs.forEach(input => {
					input.classList.remove('is-invalid');  // Remove invalid class
					const feedbackElement = input.nextElementSibling;
					if (feedbackElement) {
						feedbackElement.textContent = '';  // Clear error message
					}
				});
			}
		});

			

</script>
</body>
</html> 