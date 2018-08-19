<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Pashutlehaskir.com</title>
	<link rel="shortcut icon" href="" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
	<link rel="stylesheet" href="../css/jquery-ui.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.min.css">

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.min.js"></script>




	<script>
		$(document).ready(function() {

			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				defaultDate: '2014-06-12',
				defaultView: 'month',
				editable: true,
				events: [
					{
						title: 'All Day Event',
						start: '2014-06-01'
					},
					{
						title: 'Long Event',
						start: '2014-06-07',
						end: '2014-06-10'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: '2014-06-09T16:00:00'
					},
					{
						id: 999,
						title: 'Repeating Event11',
						start: '2014-06-16T16:00:00',
                        end: '2014-06-16T16:00:00',
                        description: '2014-06-16T16:00:00'
					},
					{
						title: 'Meeting',
						start: '2014-06-12T10:30:00',
						end: '2014-06-12T12:30:00'
					},
					{
						title: 'Lunch',
						start: '2014-06-12T12:00:00'
					},
					{
						title: 'Birthday Party',
						start: '2014-06-13T07:00:00'
					},
					{
						title: 'Click for Google',
						url: 'http://google.com/',
						start: '2014-06-28'
					}
				]
			});

		});
	</script>
<!--	<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.min.js"></script>-->


<!--	//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.print.css-->
</head>


<body  class="guest" >

<div style="border:solid 2px red;">
	<div id='calendar'></div>
</div>


</body>
</html>