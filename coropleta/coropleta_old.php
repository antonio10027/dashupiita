<html>

<head>
<?php
    include("../includes/head/head_coropleta_inner.php");

?>
<style>
    .first-row {position: absolute;top: 0; left: 0; right: 0; height: 100px; background-color: lime;}
    .second-row {position: absolute; top: 100px; left: 0; right: 0; bottom: 0; background-color: red }
    .second-row iframe {display: block; width: 100%; height: 100%; border: none;}
</style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
	<script src="js/printMap.js"></script>

	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		.leaflet-container {
			height: 400px;
			width: 600px;
			max-width: 100%;
			max-height: 100%;
		}
	</style>

	<style>#map { width: 100%; height: 75%; }
.info { padding: 6px 8px; font: 14px/16px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 15px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 5px; color: #777; }
.legend { text-align: left; line-height: 18px; color: #555; } .legend i { width: 18px; height: 18px; float: left; margin-right: 8px; opacity: 0.7; }</style>
</head>
<body class="theme-blue">
<?php
     include("../includes/topbody/topbody.php");
?>
            <!-- Menu -->
<?php
     include("../includes/menu/menu_inner.php");
?>           
            <!-- #Menu -->
            <!-- Footer -->
<?php
     include("../includes/footer/footer.php");
?>             
    <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->       
    </section>

    <section class="content">

		<!-- Select -->
		<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <select name="select-location" id="select-location" class="form-control show-tick">
                                        <option value="">-- Seleccione el contaminante --</option>
                                        <option value="neumoniaGeojson2.geojson">PM10</option>	
										<option value="neumoniaGeojson.geojson">PM2.5</option>
                                    </select>
                                </div> 
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" placeholder="Seleccione Fecha Incio">
                                        </div>
                                    </div>
                                </div>  
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" placeholder="Seleccione Fecha Fin">
                                        </div>
                                    </div>
                                </div>   

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Select -->                        

		<div class="row clearfix">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="body">
						<div id='map'></div>
					</div>
				</div>
			</div>
		</div>
		</div>
	<!--  ************************************ FIN DEL MAPA Y EL SELECT  ****************************** -->
		<!-- Exportable Table -->    
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TABLA DE DATOS
                            </h2>                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>                               
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
		 <!-- #END# Exportable Table -->

	</section>     
<?php
include("../includes/js/js_coropleta_inner.php");
?> 

<script type="text/javascript">
  var canvasRenderer = L.canvas();
	var map = L.map('map').setView([19.47178618,-99.15352590], 10);

	var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	// control that shows state info on hover
	var info = L.control();

	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
		this.update();
		return this._div;
	};

	info.update = function (props) {
		this._div.innerHTML = '<h4>Nivel de contaminación</h4>' +  (props ?
			//'<b>' + props.o3_mean + '</b><br />' + props.density + ' people>' : 'Hover over a state');
			'<b>' + props.o3_mean + '</b><br />' + '' + ' puntos ' : '');
	};

	info.addTo(map);


	// get color depending on population density value
	function getColor(d) {
		return d > 38 ? '#800026' :
			d > 36  ? '#BD0026' :
			d > 34  ? '#E31A1C' :
			d > 32  ? '#FC4E2A' :
			d > 30   ? '#FD8D3C' :
			d > 28   ? '#FEB24C' :
			d > 26   ? '#FED976' : '#FFEDA0';
	}

	function style(feature) {
		return {
			weight: 2,
			opacity: 1,
			color: 'white',
			dashArray: '3',
			fillOpacity: 0.7,
			fillColor: getColor(feature.properties.o3_mean)
		};
	}

	function highlightFeature(e) {
		var layer = e.target;

	/*	layer.setStyle({
			weight: 5,
			color: '#666',
			dashArray: '',
			fillOpacity: 0.7
		});

		if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
			layer.bringToFront();
		}*/

		info.update(layer.feature.properties);
	}

	var geojson;

	function resetHighlight(e) {
		geojson.resetStyle(e.target);
		info.update();
	}

	function zoomToFeature(e) {
		map.fitBounds(e.target.getBounds());
	}

	function onEachFeature(feature, layer) {
		layer.on({
			mouseover: highlightFeature,
			//mouseout: resetHighlight,
			click: zoomToFeature
		});
	}

	/* global statesData */
	/* ORIGINAL
	geojson = L.geoJson(statesData, {
		style: style,
		onEachFeature: onEachFeature
	}).addTo(map); */

	const api = "php/contaminantes.php";

	async function fetchData(url) {
		try {
			const response = await fetch(url);
			const data = await response.json();
			return data;
		} catch (err) {
			console.error(err);
		}
	};

	fetchData(api)
		.then(data => {
			L.geoJson(data, {
				style: style,
				onEachFeature: onEachFeature
			}).addTo(map);
	});

	map.attributionControl.addAttribution('Population data &copy; <a href="http://census.gov/">US Census Bureau</a>');


	var legend = L.control({position: 'bottomright'});

	legend.onAdd = function (map) {

		var div = L.DomUtil.create('div', 'info legend');
		var grades = [0, 26, 28, 30, 32, 34, 36, 38];
		var labels = [];
		var from, to;

		for (var i = 0; i < grades.length; i++) {
			from = grades[i];
			to = grades[i + 1];

			labels.push(
				'<i style="background:' + getColor(from + 1) + '"></i> ' +
				from + (to ? '&ndash;' + to : '+'));
		}

		div.innerHTML = labels.join('<br>');
		return div;
	};

	legend.addTo(map);
		// ***********************************  PARA IMPRESIÓN DEL MAPA  ***************************

		var customActionToPrint = function (context, mode) {
        return function () {
            window.alert("We are printing the MAP. Let's do Custom print here!");
            context._printCustom(mode);
        }
    };

    L.control.browserPrint({
        printLayer: L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.{ext}', {
            attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            subdomains: 'abcd',
            minZoom: 1,
            maxZoom: 16,
            ext: 'png'
        }),
        closePopupsOnPrint: false,
        printModes: [
            L.BrowserPrint.Mode.Landscape("Tabloid",{title: "Tabloid VIEW"}),
            //new L.BrowserPrint.Mode("Alert",{title:"User specified print action",pageSize: "A6", action: customActionToPrint, invalidateBounds: false}),
            L.BrowserPrint.Mode.Landscape()
            //"Portrait",
            //L.BrowserPrint.Mode.Auto("B4",{title: "Auto"}),
            //L.BrowserPrint.Mode.Custom("B5",{title:"Select area"})
        ]
    }).addTo(map);

    L.BrowserPrint.Utils.registerLayer(L.TileLayer.WMS, 'L.TileLayer.WMS', function (layer) {
        console.info("Printing WMS layer.");
        return L.tileLayer.wms(layer._url, layer.options);
    });

// *********************************** FIN PARA IMPRESIÓN DEL MAPA  ***************************

</script>
<style>
  .grid-print-container {
    grid-template: auto 1fr auto / 1fr;
    background-color: orange;
  }

  .grid-map-print {
    grid-row: 2;
  }

  .grid-print-container > .title,
  .grid-print-container > .sub-content {
    color: white;
  }

  .title {
    grid-row: 1;
    justify-self: center;
    text-align: center;
    color: grey;
    box-sizing: border-box;
    margin-top: 0;
  }

  .sub-content {
    grid-row: 5;
    padding-left: 10px;
    text-align: center;
    color: grey;
    box-sizing: border-box;
  }
</style>
<style>
  [leaflet-browser-print-pages] {
    display: none;
  }

  .pages-print-container [leaflet-browser-print-pages] {
    display: block;
  }
</style>


<script>
	$.extend( true, $.fn.dataTable.defaults, {
    "language": {
        "decimal": ",",
        "thousands": ".",
        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoPostFix": "",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "loadingRecords": "Cargando...",
        "lengthMenu": "Mostrar _MENU_ registros",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
        "processing": "Procesando...",
        "search": "Buscar:",
        "searchPlaceholder": "Término de búsqueda",
        "zeroRecords": "No se encontraron resultados",
        "emptyTable": "Ningún dato disponible en esta tabla",
        "aria": {
            "sortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sortDescending": ": Activar para ordenar la columna de manera descendente"
        },
        //only works for built-in buttons, not for custom buttons
        "buttons": {
            "create": "Nuevo",
            "edit": "Cambiar",
            "remove": "Borrar",
            "copy": "Copiar",
            "csv": "Exportar a CSV",
            "excel": "tabla Excel",
            "pdf": "Exportar a PDF",
            "print": "Imprimir",
            "colvis": "Visibilidad columnas",
            "collection": "Colección",
            "upload": "Seleccione archivo...."
        },
        "select": {
            "rows": {
                _: '%d filas seleccionadas',
                0: 'clic fila para seleccionar',
                1: 'una fila seleccionada'
            }
        }
    }           
} );       
</script>

</body>
</html>
