var array = [];
function progreso() {

	var jsonData = selector.ajax({
		url : 'tblGraficosVentas',
		dataType : 'json',
	}).done(function(result) {

		result.forEach(function(item) {

			//					console.log(item);

			array.push(item.VentaActual);
			array.push(item.VentaAnterior);
			array.push(item.PptoMlocal);
			array.push(item.Cump);
			array.push(item.Crec);

			graficaDinamica(array);

		});
	});

	function graficaDinamica(array) {

		new Chart(document.getElementById("bar-chart"), {
			type : 'bar',
			data : {
				type: "column",
				indexLabel: "high",
				labels : [ "VentaActual", "VentaAnterior", "PptoMlocal"],
//					,"%Cump", "%Crec" ],
				datasets : [ {
					label : "Venta Actual",
					position: "top",
					backgroundColor : "rgb(157, 195, 230)",
					data : [array[0]]
				}, {
					label : "Venta Anterior",
					position: "top",
					backgroundColor : "rgb(255, 192, 0)",
					data : [ array[1] ]
				}, {
					label : "PptoMlocal",
					position: "top",
					backgroundColor : "rgb(237, 125, 49)",
					data : [ array[2] ]
				},
				
//				{
//					label : "%Cump",
//					backgroundColor : "rgb(237, 125, 49)",
//					data : [ array[3] ]
//				},{
//					label : "%Crec",
//					backgroundColor : "rgb(237, 125, 49)",
//					data : [ array[4] ]
//				}
				
				]
			},
			options : {
				legend : {
					display : true,
					  position: 'right',
				      labels: {
				        fontColor: "#000000",
				      },
				      scales: {
				          yAxes: [{
				        	stacked: true,
				            ticks: {
				              beginAtZero: false
				            }
				          }]
				      }
				},
				title : {
					display : true,
					text : 'Cumplimiento Presupuesto Acumulado '
				}
			}
		});


		
		new Chart(document.getElementById("bar-chart-grouped"), {
		    type: 'bar',
		    data: {
		      labels: ["", "Linea", ""],
		      datasets: [{
		          label: "Meta",
		          type: "line",
		          borderColor: "rgb(010, 010, 010)",
		          position: "top",
				  backgroundColor : "rgb(010, 010, 010)",
		          data: [730,730,730],
		          fill: false
		        }, {
		          label: "Margen",
		          type: "bar",
		          position: "top",
		          backgroundColor : "rgb(237, 125, 49)",
		          data: [0,734,0],
		        }
		      ]
		    },
		    options: {
		      title: {
		        display: true,
		        text: 'Cumplimiento Margen Contribución Acumulado '
		      },
		      legend: { display: false }
		    }
		});

	}
	;
};

/*
 * function drawLineChart() {
 *  // Add a helper to format timestamp data Date.prototype.formatMMDDYYYY =
 * function() { return (this.getMonth() + 1) + "/" + this.getDate() + "/" +
 * this.getFullYear(); }
 * 
 * var jsonData = selector.ajax({ url :
 * 'http://d.microbuilder.io:8080/test/temp', dataType : 'json',
 * }).done(function(results) {
 *  // Split timestamp and data into separate arrays var labels = [], data = [];
 * results["packets"].forEach(function(packet) { labels.push(new
 * Date(packet.timestamp).formatMMDDYYYY());
 * data.push(parseFloat(packet.payloadString)); });
 *  // Create the chart.js data structure using 'labels' and 'data' var tempData = {
 * labels : labels, datasets : [ { fillColor : "rgba(151,187,205,0.2)",
 * strokeColor : "rgba(151,187,205,1)", pointColor : "rgba(151,187,205,1)",
 * pointStrokeColor : "#fff", pointHighlightFill : "#fff", pointHighlightStroke :
 * "rgba(151,187,205,1)", data : data } ] };
 *  // Get the context of the canvas element we want to select var ctx =
 * document.getElementById("bar-chart").getContext("2d");
 *  // Instantiate a new chart var myLineChart = new Chart(ctx).Line(tempData);
 * }); };
 * 
 * drawLineChart();
 */
