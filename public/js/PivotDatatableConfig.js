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
};
