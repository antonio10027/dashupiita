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
                                <div class="col-sm-3">
                                    <select name="selectContam" id="selectContam" class="form-control show-tick">
                                        <option value="">-- Seleccione el contaminante --</option>										
                                        <option value="co">CO</option>
                                        <option value="no">NO</option>
                                        <option value="no2">NO2</option>
                                        <option value="nox">NOX</option>
                                        <option value="o3">O3</option>
                                        <option value="pm10">PM10</option>
                                        <option value="pm25">PM25</option>
                                        <option value="pmco">PMCO</option>
                                        <option value="so2">SO2</option>
                                    </select>
                                </div> 
                                
                             <!--   <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">                                            
                                            <input type="text" id="startDate" class="datepicker form-control" placeholder="Seleccione Fecha Incio">
                                        </div>
                                    </div>
                                </div>  
                                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="endDate" class="datepicker form-control" placeholder="Seleccione Fecha Fin">
                                        </div>
                                    </div>
                                </div>  -->
                                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <button id="submit">Enviar</button>
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
                            DESCRIPCIÓN
                            </h2> 
                            <p>
                                <br>
                                <br>
                                En esta sección se muestran los mapas de coropletas generados a partir de las concentraciones 
                                medias de los distintos contaminantes sensadas por las estaciones meteorológicas 
                                ubicadas en la Ciudad de México. Este valor medio corresponde al periodo del 2005 al 2021.                               
                                <br>
                                <br>
                                Los polígonos generados en el mapa muestran el área de influencia de cada estación meteorológica
                                utilizando el algoritmo para la generación de polígonos de Thiessen. 
                                <br>
                                <br>
                                Al pasar el cursor por cada uno de los polígonos se muestra en la parte superior derecha el nivel
                                de concentración leído por la estación meteorológica. El icono de la impresora en el mapa proc_terminate
                                la impresión de éste.
                                <br>
                                <br>
                                En la tabla inferior aparecen las mediciones de cada estación para el elemento seleccionado.
                                Se permite la exportación de la tabla en formato CSV.
                            </p>                                                     
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped table-hover dataTable">
                                <thead>
                                    <tr>
                                        <th>Cve Estación</th>
                                        <th>Nombre Estación</th>
                                        <th>Contaminante</th>
                                        <th>Valor</th>                                        
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Cve Estación</th>
                                        <th>Contaminante</th>
                                        <th>Valor</th> 
                                    </tr>
                                    <button onclick="json2csv()">Descargar CSV</button>
                                </tfoot>
                                   
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
var date;
var map;
var api;
var asyncData;
$('#submit').on('click', function(){
   
  dateStart = new Date($('#startDate').val());
  var dayStart = dateStart.getDate();
  var monthStart = dateStart.getMonth() + 1;
  var yearStart = dateStart.getFullYear();

  dateEnd = new Date($('#endDate').val());
  var dayEnd = dateEnd.getDate();
  var monthEnd = dateEnd.getMonth() + 1;
  var yearEnd = dateEnd.getFullYear();

  //alert([day, month, year].join('/'));

  console.log("date ", yearEnd);


    var selectedContam = document.getElementById('selectContam');
    const elemento = selectedContam.options[selectedContam.selectedIndex].value;
    const elementoMayusc = selectedContam.options[selectedContam.selectedIndex].text;
    console.log("selectedElement: "+elemento);

    getdata(elemento,elementoMayusc);

});// fin del submit

//*********************************  GET DATA  ************************************* */
function getdata(elemento,elementoMayusc){
    const getPeople = async () => {
    
        const data = await fetch("php/contams_tabla.php?var="+"'"+elemento+"'",{
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',                                  
        }
    });
    
    const jsondata = await data.json();
    console.log("jsondata: "+jsondata.data);
    asyncData=jsondata;
    
    var elementoMayus = elementoMayusc;

    initializeMap(elemento,elementoMayusc);
    initializeTable(elemento);
                    
    return jsondata;
    }; // del getPeople

    getPeople();
}



// ***********************************  FIN GET DATA ******************************

    function initializeMap(elemento, elementoMayusc){
    var canvasRenderer = L.canvas();
    if (map != undefined) { // para quitar la capa anterior cada que se seleccione desde el select
        map.off();
       map= map.remove();
    } // del if map != undefined
        map = L.map('map').setView([19.47178618,-99.15352590], 10);
        

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
       
                //console.log('elemento in update:'+information );
                this._div.innerHTML = '<h4>Nivel de contaminación</h4>' +  (props ?
                //'<b>' + props.o3_mean + '</b><br />' + props.density + ' people>' : 'Hover over a state');
                '<b>' + props.valor+ '</b><br />' + '' + ' puntos de ' +elementoMayusc : '');              
            
        };
    
        info.addTo(map);


        

        function style(feature) {
            var fillColor;
           
            return {
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.45,
                fillColor: getColor(elemento,feature.properties.valor)
            };
        }

        /*function changeLayerStyle(propertyNo) {
        selectedPropertyNo = propertyNo;
        vectorLayer.setStyle(style);
        }*/

        // get color depending on population density value
        function getColor(e,d) {
            switch(e){
            // console.log('d'+d);
                case 'so2':
                return d > 25 ? '#800026' :
                d > 22  ? '#BD0026' :
                d > 18  ? '#E31A1C' :
                d > 14  ? '#FC4E2A' :
                d > 10   ? '#FD8D3C' :
                d > 6   ? '#FEB24C' :
                d > 2   ? '#FED976' : '#FFEDA0';
                break;

                case'pmco':
                return d > 33 ? '#800026' :
                d > 27  ? '#BD0026' :
                d > 24  ? '#E31A1C' :
                d > 21  ? '#FC4E2A' :
                d > 18   ? '#FD8D3C' :
                d > 15  ? '#FEB24C' :
                d > 12   ? '#FED976' : '#FFEDA0';
                break;

                case'pm10':
                return d > 89 ? '#800026' :
                d > 74  ? '#BD0026' :
                d > 65  ? '#E31A1C' :
                d > 56  ? '#FC4E2A' :
                d > 47   ? '#FD8D3C' :
                d > 38   ? '#FEB24C' :
                d > 29   ? '#FED976' : '#FFEDA0';
                break;

                case'pm25':
                return d > 27 ? '#800026' :
                d > 26  ? '#BD0026' :
                d > 24  ? '#E31A1C' :
                d > 22  ? '#FC4E2A' :
                d > 20   ? '#FD8D3C' :
                d > 18   ? '#FEB24C' :
                d > 16   ? '#FED976' : '#FFEDA0';
                break;

                case'o3':
                return d > 42 ? '#800026' :
                d > 41  ? '#BD0026' :
                d > 38  ? '#E31A1C' :
                d > 35  ? '#FC4E2A' :
                d > 32   ? '#FD8D3C' :
                d > 29   ? '#FEB24C' :
                d > 26   ? '#FED976' : '#FFEDA0';
                break;

                case'nox':
                return d > 92 ? '#800026' :
                d > 74  ? '#BD0026' :
                d > 64  ? '#E31A1C' :
                d > 54  ? '#FC4E2A' :
                d > 44   ? '#FD8D3C' :
                d > 34   ? '#FEB24C' :
                d > 24   ? '#FED976' : '#FFEDA0';
                break;

                case'no2':
                return d > 39 ? '#800026' :
                d > 34  ? '#BD0026' :
                d > 29  ? '#E31A1C' :
                d > 24  ? '#FC4E2A' :
                d > 19   ? '#FD8D3C' :
                d > 14   ? '#FEB24C' :
                d > 9   ? '#FED976' : '#FFEDA0';
                break;

                case'no':
                return d > 51 ? '#800026' :
                d > 41  ? '#BD0026' :
                d > 34  ? '#E31A1C' :
                d > 27  ? '#FC4E2A' :
                d > 20   ? '#FD8D3C' :
                d > 13   ? '#FEB24C' :
                d > 6  ? '#FED976' : '#FFEDA0';
                break;

                case'co':
                return d > 3.2 ? '#800026' :
                d > 2.7  ? '#BD0026' :
                d > 2.2 ? '#E31A1C' :
                d > 1.7  ? '#FC4E2A' :
                d > 1.2   ? '#FD8D3C' :
                d > 0.74   ? '#FEB24C' :
                d > 0.25  ? '#FED976' : '#FFEDA0';
                break;
            }

        }

        /*function style(feature) {
            return {
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7,
                fillColor: getColor(feature.properties.o3_mean)
            };
        }*/

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

        api = "php/contaminantes.php?var="+"'"+elemento+"'";
        console.log('api: '+api);

        async function fetchData(url) {
            try {
                //const response = await fetch(url,{method: 'GET'});
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

        console.log("elemnto fuera legend: "+ elemento);
        var legend = L.control({position: 'bottomright'});

        legend.onAdd = function (map) {
        
            var grades;
            var div = L.DomUtil.create('div', 'info legend');
            if(elemento=='co'){
                grades = [0,0.25, 0.74, 1.23,1.72, 2.22,2.71,3.7];        
            }          
            if(elemento=='no'){
                grades = [0, 6, 13, 20, 27,34, 41, 51];
            }           
            if(elemento=='no2'){
                grades = [0, 9, 14, 19, 24, 29, 34, 39];
            }
            if(elemento=='nox'){
                grades = [0, 24, 34, 44, 54, 64, 74, 92];
            }
            if(elemento=='o3'){
                grades = [0, 26, 29, 32, 35, 38, 41, 42];
            }
            if(elemento=='pm10'){
                grades = [0, 29, 38, 47, 56, 65, 74, 89];        
            }
            if(elemento=='pm25'){
                grades = [0, 16, 18, 20, 22, 24, 26, 27];        
            }
            if(elemento=='pmco'){
                grades = [0, 12, 15, 18, 21, 24, 27, 33];        
            }
            if(elemento=='so2'){
                grades = [0, 2, 6, 10, 14, 18, 22, 25];
            }
            
            
            var labels = [];
            var from, to;

            for (var i = 0; i < grades.length; i++) {
                from = grades[i];
                to = grades[i + 1];

                labels.push(
                    '<i style="background:' + getColor(elemento,from + 1) + '"></i> ' +
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
        printLayer: L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            subdomains: 'abcd',
            minZoom: 1,
            maxZoom: 16,
            ext: 'png'
        }),
        closePopupsOnPrint: false,
        printModes: [
            //L.BrowserPrint.Mode.Landscape("Tabloid",{title: "Tabloide"}),
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




    }//del initialize map
// ***************************************   PARA LA TABLA  **********************
function initializeTable(elemento){
    $('#example').DataTable({
        ajax: "php/contams_tabla.php?var="+"'"+elemento+"'",
        dataType: 'json',
        dataSrc:"",
        columns: [
            { data: 'clave_estac' },
            { data: 'nombre_estac' },
            { data: 'elemento' },
            { data: 'valor' },
            
        ],        
    "bDestroy": true
    })
}//del initialize table


    

function json2csv(){
    var data= asyncData;
    const items = data.data;
    console.log("items: "+items);
    //const items = json3.items
    const replacer = (key, value) => value === null ? '' : value // specify how you want to handle null values here
    const header = Object.keys(items[0])
    const csv = [
    header.join(','), // header row first
    ...items.map(row => header.map(fieldName => JSON.stringify(row[fieldName], replacer)).join(','))
    ].join('\r\n')

    console.log("csv: "+csv);

    //Download the file as CSV
    var downloadLink = document.createElement("a");
    var blob = new Blob(["\ufeff", csv]);
    var url = URL.createObjectURL(blob);
    downloadLink.href = url;
    downloadLink.download = "coropletas.csv";  //Name the file here
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);
}

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



<script type="text/javascript">
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
});          
</script>

<script type="text/javascript" src="../js/printfilter.js"></script>

</body>
</html>
