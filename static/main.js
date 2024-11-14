		(function() {
            const token = localStorage.getItem('access_token');
            
            if (!token) {
                // Redirect to login before loading the content
                alert('Access denied. Please log in.');
                window.location.href = 'index.php';
				//window.location.href = 'index.html';
            }
        })();
		window.onload = function() {
            
			
			document.getElementById('logout').addEventListener('click', handleLogout);
        };
		
		
		async function handleLogout(){
			localStorage.clear();
			
			window.location.href = 'index.php';
			//window.location.href = 'index.html';
			
		}