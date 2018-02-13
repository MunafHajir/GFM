$(document).ready(function(){
	$.ajax({
		url: "http://localhost/chartjs/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var attendance = [];
			var value = [];

			for(var i in data) {
				attendance.push("Attendance" + i);
				value.push(data[i].score);
			}

			var chartdata = {
				labels: Attendance,
				datasets : [
					{
						label: 'Attendance',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: value
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});