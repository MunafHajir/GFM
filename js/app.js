$(document).ready(function(){
	$.ajax({
		url: "http://localhost/GFM/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var attendance = [];
			var value = [];
			for (var i in data){
				attendance.push("Attendance1");
				attendance.push("Attendance2");
				attendance.push("Attendance3");
				attendance.push("Attendance4");
				value.push(data[i].attend1);
				value.push(data[i].attend2);
				value.push(data[i].attend3);
				value.push(data[i].attend4);
				console.log(value);

			}

			var chartdata = {
				labels: attendance,
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

			var barGraph = new Chart(ctx,{
				type: 'bar',
				data: chartdata


			});
		},


		error: function(data) {
			console.log(data);
		},

		options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: false
                }
            }]
        }
    }
	});
});

