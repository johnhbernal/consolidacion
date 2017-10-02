var array = [];
var arrayMargen = [];
function progreso() {

	var jsonData = selector.ajax({
		url : 'tblGraficosVentas',
		dataType : 'json',
	}).done(function(result) {

		result.forEach(function(item) {

			// console.log(item);

			array.push(item.VentaAnterior);
			array.push(item.VentaActual);
			array.push(item.PptoMlocal);
			array.push(item.Cump);
			array.push(item.Crec);
			
			
			console.log(formatearNumero(item.VentaAnterior));

			graficaDinamica(array);
			// GraficaDinamicaMargen();

		});
	});

	var jsonDataMargen = selector.ajax({
		url : 'tblGraficosMargen',
		dataType : 'json',
	}).done(function(resultMargen) {

		resultMargen.forEach(function(itemMargen) {

			arrayMargen.push(itemMargen.Margen);
			arrayMargen.push(itemMargen.Meta);

			GraficaDinamicaMargen(arrayMargen);

		});
	});
	
//	var chartData = {
//		    labels: ["January", "February", "March", "April", "May", "June"],
//		    datasets: [
//		        {
//		            fillColor: "#79D1CF",
//		            strokeColor: "#79D1CF",
//		            data: [60, 80, 81, 56, 55, 40]
//		        }
//		    ]
//		};
//	
//	new Chart(document.getElementById("bar-chart"), {
//		type : 'bar',
//	    showTooltips: false,
//	    onAnimationComplete: function () {
//
//	        var ctx = this.chart.ctx;
//	        ctx.font = this.scale.font;
//	        ctx.fillStyle = this.scale.textColor
//	        ctx.textAlign = "center";
//	        ctx.textBaseline = "bottom";
//
//	        this.datasets.forEach(function (dataset) {
//	            dataset.bars.forEach(function (bar) {
//	                ctx.fillText(data[0], bar.x, bar.y - 5);
//	            });
//	        })
//	    }
//	});

	function graficaDinamica(array) {

		new Chart(document.getElementById("bar-chart"), {
			type : 'bar',
//			_______________
//			_______________
			data : {
				position : "top",
				 type : "column",
				 indexLabel : "high",
				datasets : [ {
					label : "Venta Anterior",
					backgroundColor : "rgb(157, 195, 230)",
					data : [ array[0] ]
				}, {
					label : "Venta Actual",
					backgroundColor : "rgb(255, 192, 0)",
					data : [ array[1] ]
				}, {
					label : "PptoMlocal",
					backgroundColor : "rgb(237, 125, 49)",
					data : [ array[2] ]
				},

				{
					type : 'line',
					label : "%Cump",
//					indexLabel : "high",
					backgroundColor : "rgba(255, 255, 255, 0.8)", 					
					data : [ 
							
				          array[3],
				           
							
						],
				}, {
					type : 'line',
//					indexLabel : "high",
//					display: false,
					label : "%Crec",
					backgroundColor : "rgba(255, 255, 255, 0.8)",
					data : [ 
						array[4]  
						
						
						]
				}

				]
			},
			options : {
				legend : {
					display : false,
					position : 'top',
					labels : {
						fontColor : "#000000",
					},
					scales : {
						yAxes : [ {
							stacked : true,
							ticks : {
								beginAtZero : false
							}
						} ]
					}
				},
				title : {
					display : true,
					text : 'Cumplimiento Presupuesto Acumulado '
				}
			}
		});

	};
/*
 * Funcion utilizada para mostrar el margen de ganancia
 */
	function GraficaDinamicaMargen(arrayMargen) {
		new Chart(document.getElementById("bar-chart-grouped"), {
			type : 'bar',
			data : {
				labels : [ "", "Linea", "" ],
				datasets : [ {
					label : "Meta",
					type : "line",
					borderColor : "rgb(010, 010, 010)",
					position : "top",
					 tooltips: {
						   mode: 'label'
						 } ,  
					backgroundColor : "rgb(010, 010, 010)",
					data : [ arrayMargen[1], arrayMargen[1], arrayMargen[1] ],
					fill : false
				}, {
					label : "Margen",
					type : "bar",
					position : "top",  
					backgroundColor : "rgb(237, 125, 49)",
					data : [ 0, arrayMargen[0], 0 ],
				} ]
			},
			options : {
				title : {
					display : true,
					text : 'Cumplimiento Margen Contribución Acumulado '
				},
				legend : {
					display : false
				}
			}
		});
	}
};

function formatearNumero(nStr) {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? ',' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return x1 + x2;
}
