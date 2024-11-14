$(document).ready(function(){
	
		
		const baseUrl = localStorage.getItem("url");
		const access = localStorage.getItem("access_token");
	
		

		$.ajax({
			url: `${baseUrl}/auth/profile/`,
			type: 'GET',
			headers: {
				'Authorization': `Bearer ${access}` // Include the token
			},
			success: function(response) {
				console.log('User profile fetched:', response); // Debug log for profile data
				let imageUrl;
				if(response.dp_image != null) {
					imageUrl = `${baseUrl}${response.dp_image}`;
				} else {
					imageUrl = "./assets/images/default/default1.jpg";
				}
				$('#user-dp').attr('src', imageUrl);
				$('#user-name').text(response.user_profile.display_name);
				localStorage.setItem("user",response.user_profile.first_name);
				localStorage.setItem("id",response.user_profile.associate_id);
				localStorage.setItem("userId",response.user_profile.id);
				
				if(response.user_profile.is_manager){
					$('#managerMenu').show();
				};
				
				if (response.user_profile.is_admin && response.user_profile.is_manager){
					$('#managerMenu').show();
					$('#adminMenu').show();
				};
			},
			error: function() {
				alert('Failed to load user data');
			}
		});
		
		
		/*if (admin === "true" || manager === "true") {
			
			$('#associateListMenu').show();
		  }*/
		  
	});
	