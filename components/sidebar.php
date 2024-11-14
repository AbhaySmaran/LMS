	<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
		  <div class="text-center">
			<a href="#" class="brand-logo">
			  <!--<img src="./assets/images/default/FORANTS-2.png" alt="logo">-->
			  <h1 style="color: white;">Time-Off 1.0</h1>
			</a>
		  </div>
      </div>
	  <!--<div class="mdc-drawer__content">
	  <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
			<div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#">
				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Profile
              </a>
            </div>
		  </nav>
	  </div>
	  </div>-->
      <div class="mdc-drawer__content">
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="dashboard.php">
				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Dashboard
              </a>
            </div>
			
			<div class="mdc-list-item mdc-drawer-item" id="managerMenu" style="display: none;">
			  <a class="mdc-drawer-link" href="#" data-toggle="expansionPanel" data-target="manager-sub-menu">
				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">group</i>
				Home Manager
				<i class="mdc-drawer-arrow material-icons">chevron_right</i>
			  </a>
			  
			   <div class="mdc-expansion-panel" id="manager-sub-menu">
				<nav class="mdc-list mdc-drawer-submenu">
			
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="manager-associates.php">
					  Associates
					</a>
				  </div>
				  
				</nav>
			  </div>
			</div>
			
			<div class="mdc-list-item mdc-drawer-item" id="adminMenu" style="display: none;">
			  <a class="mdc-drawer-link" href="#" data-toggle="expansionPanel" data-target="admin-sub-menu">
				<i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">person</i>
				Administration
				<i class="mdc-drawer-arrow material-icons">chevron_right</i>
			  </a>
			  
			  <div class="mdc-expansion-panel" id="admin-sub-menu">
				<nav class="mdc-list mdc-drawer-submenu">
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="leaves-master.php">
					  Leave Master
					</a>
				  </div>
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="leaves-setup.php">
					  Leave Setup
					</a>
				  </div>
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="admin-associates.php">
					  Leave Approve
					</a>
				  </div>
				  <div class="mdc-list-item mdc-drawer-item">
					<a class="mdc-drawer-link" href="addassociate.php">
					  Add Associate
					</a>
				  </div>
				  
				</nav>
			  </div>
			</div>
			
          </nav>
		  
		  
		  
        </div>
		
		
        
      </div>
    </aside>