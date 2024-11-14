$(document).ready(function() {
      // Handle form submission
      $("#loginForm").on("submit", function(e) {
        e.preventDefault(); // Prevent default form submission
		
		const baseUrl = "http://localhost:8000"
		localStorage.setItem("url", baseUrl)

        // Get input values
        const email = $("#email").val();
        const password = $("#password").val();
		
		const formData = new FormData();
		
		if(email) formData.append("email", email);
		if(password) formData.append("password", password);
		
        // jQuery AJAX POST request
        $.ajax({
		  url: `${baseUrl}/auth/login/`, // API login URL
          type: "POST",
         /* contentType: "application/json",
          data: JSON.stringify({
            email: email,
            password: password
          }),*/
		  data: formData,
		  processData: false,
		  contentType: false,
          success: function(response) {
            // Handle successful login
            //alert(response.message); // Display success message
            localStorage.setItem("access_token", response.tokens.access);
            localStorage.setItem("refresh_token", response.tokens.refresh);
            
			$.ajax({
				url: `${baseUrl}/auth/profile/`,
				type: 'GET',
				headers: {
					'Authorization': `Bearer ${response.tokens.access}` // Include the token
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
					
					
					
				},
				error: function() {
					alert('Failed to load user data');
				}
			});
			
			
			window.location.replace("dashboard.php");
				
				
				

		  
          },
		  error: function(err){
			  $('.form-control').removeClass('is-invalid');
			  $('.invalid-feedback').text('');
			  
			  errors = err.responseJSON;
			  console.log(errors);
			  if(errors.email){
				  $('#email').addClass('is-invalid');
				  $('#emailError').text(errors.email);
				  console.log("e",errors.email[0])
				  alert(errors.email[0])
			  }else if(errors.password){
				  $('password').addClass('is-invalid');
				  $('#passwordError').text(errors.passsword[0]);
				  console.log("p",errors.password)
			  }else if(errors.errors.error){
				  alert(errors.errors.error[0]);
			  }
			  
		  }
        });
      });
    });
	
	