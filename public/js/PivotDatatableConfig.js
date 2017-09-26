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
//selector('#output').css({ 'color': 'red', 'font-size': '150%' });

//selector('#output').css("background", "RED");     //funciona


//	selector('#output').css({
//	'color':'yellow',
//    'margin-left': '5px',
//    'margin-bottom': '-4px',
//   
//});
	
//
//	selector('.d-flex').css({
//		'color':'yellow',
//		'margin-left': '5px',
//		'margin-bottom': '-4px',
//		
//	});
	
	
	/*Primer tabla*/
	divPrincipal= selector('.d-flex').css({
		'color':'yellow',
		'margin-left': '5px',
		'margin-bottom': '-4px',
		'width': '96%',
		'maxWidth': '96%'
		
	});
	
	
	
	
	 selector('table.pvtTable').css({
			'color':'yellow',
			'margin-left': '5px',
			'margin-bottom': '-4px',
			'width': '96%',
			'maxWidth': '96%'
			
		}).DataTable({
			"responsive": true,
			"processing": true,
	        "serverSide": true,
		});
	
	console.log('Valor del atributo id = '+divPrincipal.attr('class'));
	
//	divPrincipal.css( "background-color", "red" ); // funciona

	
	selector( "div.d-flex" ).css( "border", "12px double red" );
	
	/*selector( "table, .label, .label-info { animation : none;animation-delay : 0;" +
			"animation-direction : normal; animation-duration : 0;animation-fill-mode : none;" +
			"animation-iteration-count : 1;animation-name : none;animation-play-state : running;" +
			"animation-timing-function : ease;backface-visibility : visible;background : 0;" +
			"background-attachment : scroll;background-clip : border-box;background-color : transparent;" +
			"background-image : none;background-origin : padding-box;background-position : 0 0;" +
			"background-position-x : 0;background-position-y : 0;background-repeat : repeat;" +
			"background-size : auto auto;border : 0;border-style : none;border-width : medium;" +
			"border-color : inherit;border-bottom : 0;border-bottom-color : inherit;" +
			"border-bottom-left-radius : 0;")
		  border-bottom-right-radius : 0;
		  border-bottom-style : none;
		  border-bottom-width : medium;
		  border-collapse : separate;
		  border-image : none;
		  border-left : 0;
		  border-left-color : inherit;
		  border-left-style : none;
		  border-left-width : medium;
		  border-radius : 0;
		  border-right : 0;
		  border-right-color : inherit;
		  border-right-style : none;
		  border-right-width : medium;
		  border-spacing : 0;
		  border-top : 0;
		  border-top-color : inherit;
		  border-top-left-radius : 0;
		  border-top-right-radius : 0;
		  border-top-style : none;
		  border-top-width : medium;
		  bottom : auto;
		  box-shadow : none;
		  box-sizing : content-box;
		  caption-side : top;
		  clear : none;
		  clip : auto;
		  color : inherit;
		  columns : auto;
		  column-count : auto;
		  column-fill : balance;
		  column-gap : normal;
		  column-rule : medium none currentColor;
		  column-rule-color : currentColor;
		  column-rule-style : none;
		  column-rule-width : none;
		  column-span : 1;
		  column-width : auto;
		  content : normal;
		  counter-increment : none;
		  counter-reset : none;
		  cursor : auto;
		  direction : ltr;
		  display : inline;
		  empty-cells : show;
		  float : none;
		  font : normal;
		  font-family : inherit;
		  font-size : medium;
		  font-style : normal;
		  font-variant : normal;
		  font-weight : normal;
		  height : auto;
		  hyphens : none;
		  left : auto;
		  letter-spacing : normal;
		  line-height : normal;
		  list-style : none;
		  list-style-image : none;
		  list-style-position : outside;
		  list-style-type : disc;
		  margin : 0;
		  margin-bottom : 0;
		  margin-left : 0;
		  margin-right : 0;
		  margin-top : 0;
		  max-height : none;
		  max-width : none;
		  min-height : 0;
		  min-width : 0;
		  opacity : 1;
		  orphans : 0;
		  outline : 0;
		  outline-color : invert;
		  outline-style : none;
		  outline-width : medium;
		  overflow : visible;
		  overflow-x : visible;
		  overflow-y : visible;
		  padding : 0;
		  padding-bottom : 0;
		  padding-left : 0;
		  padding-right : 0;
		  padding-top : 0;
		  page-break-after : auto;
		  page-break-before : auto;
		  page-break-inside : auto;
		  perspective : none;
		  perspective-origin : 50% 50%;
		  position : static;
		 //  May need to alter quotes for different locales (e.g fr) 
		  quotes : '\201C' '\201D' '\2018' '\2019';
		  right : auto;
		  tab-size : 8;
		  table-layout : auto;
		  text-align : inherit;
		  text-align-last : auto;
		  text-decoration : none;
		  text-decoration-color : inherit;
		  text-decoration-line : none;
		  text-decoration-style : solid;
		  text-indent : 0;
		  text-shadow : none;
		  text-transform : none;
		  top : auto;
		  transform : none;
		  transform-style : flat;
		  transition : none;
		  transition-delay : 0s;
		  transition-duration : 0s;
		  transition-property : none;
		  transition-timing-function : ease;
		  unicode-bidi : normal;
		  vertical-align : baseline;
		  visibility : visible;
		  white-space : normal;
		  widows : 0;
		  width : auto;
		  word-spacing : normal;
		  z-index : auto;
		}");*/
	
	
	console.log(selector( "div#output.d-flex > table.table" ).attr("id"));
//	selector( "div.d-flex, > table.table" ).DataTable();
	
	selector( ".pvtRendererArea"  ).css( "background-color", "red" );
	
	
//	console.log(result);
//	result.css( "background-color", "red" );
	
//	console.log('Valor de la tabla = '+tabla.attr('class'));
//	
//	tabla.css({
//		'color':'yellow',
//	});
	
	
//	var tableRows = $('table > tbody > tr');
//	var tableBodyCols = tableRows.children('td');
//
//	console.log(tableBodyCols);
//
//	var tableBodyCols2 = $('> td', tableRows);
//	console.log(tableBodyCols2);
	
//	console.log(tabla);
//	alert(tabla);

	
	
	selector('.pvtVals').click(function () {
	    var findiv = $(this).closest('th.pvtAxisLabel');
	    alert(findiv.contents()[0].nodeValue);
	});

if(selector("#output").find('#pivot').length) {
	 alert('encontro');
	} else {
	 // no table found
	
	}

//selector( "#output li:nth-child(2)" ).append( "<span> - 2nd!</span>" );
	
	selector('#output').find('.pvtTable').each(function() {
		
		console.log('entro en el each ');
		console.log(this);
		return false;
//		this.style.color = "blue";
	});
	
	selector( ".output" ).each(function() {
		selector( this )
//		this.style.color = "blue";
		  console.log('vamos a ver si se ejecuta esta miercoles  '+selector( this ));
		});
//	console.log('mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm');
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
