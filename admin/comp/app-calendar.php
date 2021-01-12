<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='comp/CCalendar/fullcalendar.min.css' rel='stylesheet' />
<link href='comp/CCalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='comp/CCalendar/lib/moment.min.js'></script>
<script src='comp/CCalendar/lib/jquery.min.js'></script>
<script src='comp/CCalendar/fullcalendar.min.js'></script>

<script>

$(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true,
        events: "all_events.php",
        displayEventTime: false,
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            var title = prompt('Event Detail:');

            if (title) {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                $.ajax({
                    url: 'add_event.php',
                    data: 'title=' + title + '&start=' + start + '&end=' + end,
                    type: "POST",
                });
                calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                true
                        );
            }
            calendar.fullCalendar('unselect');
        },
        
        editable: true,
        eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: 'update_event.php',
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                        type: "POST",
                    });
                },
        eventClick: function (event) {
            var confimit = confirm("Do you really want to delete?");
            if (confimit) {
                
                $.ajax({
                    type: "POST",
                    url: "delete_event.php",
                    data: "&id=" + event.id,
                });
            }
        }

    });
});

function displayMessage(message) {
        $(".response").html("<div align='center' style='padding:20px;font-size:18px;color:#3539EA' class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 2000);
}
</script>

<style>

  body {
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body>
  
  <div class="response"></div>
  <div id='calendar'></div>

</body>
</html>
