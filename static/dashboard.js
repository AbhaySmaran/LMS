$(document).ready(function(){
		const baseUrl = localStorage.getItem('url');
		const user = localStorage.getItem('id');
		const access = localStorage.getItem('access_token');
		const userId = localStorage.getItem('userId');
		loadLeaves();
		loadLeaveTypes();
		loadMyApplications();
		//loadHolidays();
		let holidays = {};
		let halfDay;
		let leaveBalance = {};
		
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
								<td>
									${application.status === 'Pending' 
										? `<button class="btn btn-primary cancel-button" data-id="${application.application_id}">Cancel</button>` 
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
					updateLeaveBalance(selectedLeaveType, remainingDays);
					loadLeaves();
					loadMyApplications();
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