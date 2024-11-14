<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holiday Calendar</title>

    <!-- Include Bootstrap CSS and FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css" rel="stylesheet">
</head>
<body>

<!-- Button to Open Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#calendarModal">
  Open Calendar Modal
</button>

<!-- Modal -->
<div class="modal fade" id="calendarModal" tabindex="-1" role="dialog" aria-labelledby="calendarModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="calendarModalLabel">Holiday Calendar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="calendar"></div> <!-- FullCalendar will render here -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Include jQuery, Bootstrap JS, FullCalendar JS, and other necessary libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>

<script>
  $(document).ready(function() {
    // Fetch holidays from the DRF backend
	baseUrl = localStorage.getItem('url')
    $.ajax({
      url: `${baseUrl}/leaves/holidays/`,  // DRF endpoint to fetch holidays
      method: 'GET',
      success: function(data) {
        // Parse holiday data
        const holidays = data.map(holiday => {
          return {
            title: holiday.holiday_name,
            start: holiday.date, // Assuming date is in 'YYYY-MM-DD' format
            allDay: true,
            color: 'red'  // Optional: style for holiday dates
          };
        });

        // Initialize FullCalendar
        $('#calendar').fullCalendar({
          events: holidays,  // Use the holiday data
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          eventClick: function(info) {
            alert('Holiday: ' + info.event.title); // Show holiday info when clicked
          }
        });
      },
      error: function() {
        alert('Failed to load holidays');
      }
    });
  });
</script>

</body>
</html>
