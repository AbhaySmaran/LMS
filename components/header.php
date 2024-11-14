<header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
            <!--<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">
              <i class="material-icons mdc-text-field__icon">search</i>
              <input class="mdc-text-field__input" id="text-field-hero-input">
              <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                  <label for="text-field-hero-input" class="mdc-floating-label">Search..</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
              </div>
            </div>-->
          </div>
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="figure">
                    <img src="" alt="user" id="user-dp">
                  </span>
                  <span id="user-name"></span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-account-edit-outline text-primary"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center" data-toggle="modal" data-target="#viewProfileModal">
                      <h6 class="item-subject font-weight-normal" id="profile">Profile</h6>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-settings-outline text-primary"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal" id='logout'>Logout</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            
            
          </div>
        </div>
		
		<div class="modal fade" id="viewProfileModal" tabindex="-1" role="dialog" aria-labelledby="viewProfileModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document" id="stuEditModal">
						<div class="modal-content">
						  <div class="modal-header">
							<p class="modal-title" id="viewProfileModalLabel"><b>Profile</b></p>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body" >
							
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
												<td id="associateId" class="text-left"></td>
												<td id="name" class="text-left"></td>
												<td id="email" class="text-left"></td>
										
												
												
											</tbody>
											
											
											<thead>
												<tr>
													<th class="text-left">Title</th>
													<th class="text-left">Department</th>
													
													<th class="text-left">Company</th>
													
													
												</tr>
											</thead>
											<tbody>
												<td id="title" class="text-left"></td>
												<td id="department" class="text-left"></td>
												<td id="company" class="text-left"></td>
												
											</tbody>
											
											<thead>
												<tr>
													<th class="text-left">Contact No</th>
													<th class="text-left">Manager's Name</th>
													<th class="text-left">Manager's Id</th>
													
												</tr>
											</thead>
											<tbody>
												<td id="contact" class="text-left"></td>
												<td id="managerName" class="text-left"></td>
												<td id="managerId" class="text-left"></td>
												
												
											</tbody>
											
											<thead>
												<tr>
													<th class="text-left">Admin's Name</th>
													<th class="text-left">Admin's Id</th>
													
													<th class="text-left">Gender</th>
													
													
												</tr>
											</thead>
											<tbody>
												<td id="adminName" class="text-left"></td>
												<td id="adminId" class="text-left"></td>
												<td id="gender" class="text-left"></td>
												
											</tbody>
											
											<thead>
												<tr>
													<th class="text-left">City</th>
													<th class="text-left">State</th>
													
													<th class="text-left">Country</th>
													
													
												</tr>
											</thead>
											<tbody>
												<td id="city" class="text-left"></td>
												<td id="state" class="text-left"></td>
												<td id="country" class="text-left"></td>
												
											</tbody>
										</table>
								
							
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						  </div>
						</div>
					  </div>
					</div>
					
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
					
					
					
					$('#gender').text(user.user_profile.gender);
					$('#name').text(full_name);
					$('#associateId').text(user.user_profile.associate_id);
					$('#email').text(user.user_profile.email);
					$('#department').text(user.user_profile.department);
					$('#contact').text(user.user_profile.contact);
					$('#managerId').text(user.workflow_configuration.home_manager.associate_id);
					$('#managerName').text(`${user.workflow_configuration.home_manager.first_name} ${user.workflow_configuration.home_manager.last_name}`);
					$('#adminId').text(user.workflow_configuration.admin.associate_id);
					$('#adminName').text(`${user.workflow_configuration.admin.first_name} ${user.workflow_configuration.admin.last_name}`);
					$('#city').text(user.user_profile.city);
					$('#state').text(user.user_profile.state);
					$('#country').text(user.user_profile.country);
					$('#company').text(user.user_profile.company);
					$('#title').text(user.user_profile.employee_title);
					$('#department').text(user.user_profile.department)
					
				},
				error: function(err){
					console.log(err)
				}
			});
		}
		
		
	})
</script>
		
		
      </header>
	  
	  
	  
	  <!--
			<div class="modal fade" id="viewProfileModal" tabindex="-1" role="dialog" aria-labelledby="viewProfileModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document" id="stuEditModal">
						<div class="modal-content">
						  <div class="modal-header">
							<p class="modal-title" id="viewProfileModalLabel"><b>Associate Information</b></p>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body" >
							
							<div class='row'>
										<table class="table table-striped">
											<thead>
												<tr>
													<th class="text-left">Associate Id</th>
													<th class="text-left">Name</th>
													<th class="text-left">Emal</th>
													
													
												</tr>
											</thead>
											<tbody>
												<td id="associateId" class="text-left"></td>
												<td id="name" class="text-left"></td>
												<td id="email" class="text-left"></td>
										
												
												
											</tbody>
											<thead>
												<tr>
													<th class="text-left">Title</th>
													<th class="text-left">Department</th>
													
													<th class="text-left">Company</th>
													
													
												</tr>
											</thead>
											<tbody>
												<td id="title" class="text-left"></td>
												<td id="department" class="text-left"></td>
												<td id="company" class="text-left"></td>
												
											</tbody>
											<thead>
												<tr>
													<th class="text-left">City</th>
													<th class="text-left">State</th>
													
													<th class="text-left">Country</th>
													
													
												</tr>
											</thead>
											<tbody>
												<td id="city" class="text-left"></td>
												<td id="state" class="text-left"></td>
												<td id="country" class="text-left"></td>
												
											</tbody>
										</table>
								
							
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						  </div>
						</div>
					  </div>
					</div>
					
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
					$('#name').text(full_name);
					$('#associateId').text(user.user_profile.associate_id);
					$('#email').text(user.user_profile.email);
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