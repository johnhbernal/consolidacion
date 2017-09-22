function consolidacion() {

	selector(function() {
		var derivers = selector.pivotUtilities.derivers;

		var renderers = selector.extend(selector.pivotUtilities.renderers,
				selector.pivotUtilities.c3_renderers,
				selector.pivotUtilities.d3_renderers,
				selector.pivotUtilities.export_renderers);

		selector.getJSON("tblConsolidacion"

		, function(mps) {
			selector("#output").pivotUI(mps, {
				renderers : renderers,
				// derivedAttributes: {
				// "Age Bin": derivers.bin("Age", 10),
				// "Gender Imbalance": function(mp) {
				// return mp["Gender"] == "Male" ? 1 : -1;
				// }
				// },
				// cols: ["CodSAP"], rows: ["Nombre"],
				cols : [],
				rows : [ "Linea" ],
				rendererName : "Table Barchart"
			});
		});

		// /**
		// * funcion utilizada para consultar los datos de la
		// * consolidadcion a SQLServer
		// *
		// * @returns
		// */

		// function showConsolidacion() {
		//
		// // alert('prueba consolidacion ');
		// // return false;
		//
		// selector.ajax({
		// "processing" : true,
		// "serverSide" : true,
		// type : 'get',
		// url : './tblConsolidacion',
		// success : function(response) {
		//
		// // document.open();
		// // document.write(response);
		// // document.close();
		//
		// },
		// error : function(response) {
		// // alert('error mostrado al recibir en el ajax '+
		// // response);
		// // showAlert(JSON.stringify(response));
		// console.log(response);
		// // table.ajax.reload();
		// },
		//
		// });
		// }

		// selector(function() {
		// showConsolidacion();
		// });
		

	});
	
//	selector('#output').find('.pvtTable').style.color = "blue";
//console.log(selector('#output').find('table').find('.pvtTable'));
//selector('#output').css({ 'color': 'red', 'font-size': '150%' }); // funciona todo el texto dentro del div
selector('#output tr').css({ 'color': 'red', 'font-size': '150%' });

//selector('#output').css("background", "yellow");     //funciona

if(selector("#output child").find('#pivot').length) {
	 alert('encontro');
	} else {
	 // no table found
	
	}

//selector( "#output li:nth-child(2)" ).append( "<span> - 2nd!</span>" );
	
	selector('#output').find('.pvtTable').each(function() {
		
		console.log('entro en el each ');
		console.log(this);
		return false;
		this.style.color = "blue";
	});
	
//	selector( ".output" ).style.color = "blue";
	selector( ".output" ).each(function() {
		selector( this )
//		this.style.color = "blue";
		  console.log('vamos a ver si se ejecuta esta miercoles  '+selector( this ));
		});
	console.log('mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm');
//	var tables = selector('.pvtTable').DataTable();
	
//	var tablePivot = selector('.pvtTable').DataTable({
//		
//		
//        "responsive": true,
//        "responsive": true,
//		"processing": true,
//        "serverSide": true,
//        "pagingType": "full_numbers",
//});
};
