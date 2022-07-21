<html>

<head>
<?php
    include("../includes/head/head_inner.php");

?>
<style>
    .first-row {position: absolute;top: 0; left: 0; right: 0; height: 100px; background-color: lime;}
    .second-row {position: absolute; top: 100px; left: 0; right: 0; bottom: 0; background-color: red }
    .second-row iframe {display: block; width: 100%; height: 100%; border: none;}
</style>
  <title>A Leaflet map!</title>
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"
   integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ=="
   crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"
   integrity="sha512-A7vV8IFfih/D732iSSKi20u/ooOfj/AGehOKq0f4vLT1Zr2Y+RX7C+w8A1gaSasGtRUZpF/NZgzSAu4/Gc41Lg=="
   crossorigin=""></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="leaflet.heat.js"></script>
  <script src="js/leaflet.easyPrint.js"></script>
  <script src="../includes/js/spinner.js" charset="utf-8"></script>
  <script src="../includes/js/spinner_leaflet.js" charset="utf-8"></script>
  <style>
    #map{  
      height: 90vh;
      width: 100%; 
    }
  </style>
</head>
<body class="theme-blue">
<?php
     include("../includes/topbody/topbody_inner.php");
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
                                        <option value="">-- Seleccione la enfermedad --</option>
                                        <option value="neumoniaGeojson.geojson">Neumonía</option>	
										<option value="cancer_cdmx_4326.geojson">Cáncer</option>
                                        <option value="Diabetes_2015_2020_cdmx_4326.geojson">Diabetes</option>
                                    </select>
                                </div> 
                                
                           <!--     <div class="col-sm-4">
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
                                </div>   -->

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
                                En esta sección se muestran los mapas de calor generados a partir de la concentración
                                de defunciones goerreferenciadas de acuerdo a la residencia de cada uno de los pacientes.
                                Toda la información fue anonimizada ya que sólo se utilizó la información de la dirección de residencia.
                                <br>
                                <br>
                                Debido a que son miles de registros que se consultan a la base de datos, el tiempo estimado de 
                                espera para la visualización en el mapa es de aproximadamente, 12 segundos para Neumonía, 5 segundos 
                                para Cáncer, 20 segundos para Diabetes.
                                <br>
                                <br>
                                El total de defunciones corresponde al periodo de 2015 a 2020.
                                <br>
                                <br>
                                El ícono de la impresora en el mapa permite que éste pueda ser impreso si así
                                se requiere.
                            </p>                          
                        </div>
                        <!-- Tabla -->
                                         <!-- Tabla -->
                                         <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="body table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Descripción</th>
                                                                <th>Archivo</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Defunciones por Neumonía</td>
                                                                <td><a target="blank" href="../cartografia/defunciones/neumonia_defunciones.zip" ><img src="../images/ico_shp.png"></a></td>
                                                               
                                                            </tr>
                                                            
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Defunciones por Cáncer</td>
                                                                <td><a target="blank" href="" ><img src="../images/ico_shp.png"></a></td>
                                                               
                                                            </tr>      
                                                            <tr>
                                                                <th scope="row">4</th>
                                                                <td>Defunciones por Diabetes</td>
                                                                <td><a target="blank" href="../cartografia/coropletas/coropleta_estacs_contams.zip" ><img src="../images/ico_shp.png"></a></td>
                                                               
                                                            </tr>                                                         
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                 
                                    <!-- #END# Tabla -->
</section>     
<?php
include("../includes/js/js_heatmap_inner.php");
?> 


  <script>
 
 var map;
 document.getElementById('select-location').addEventListener('change',function(e){
    //let coords = e.target.value.split(",");
    //map.flyTo(coords,13);
 if(map != undefined){ // para quitar la capa anterior cada que se selecione una nueva.
        map.off();
        map = map.remove();
      }
    map = L.map('map', {
    fullscreenControl: {
        pseudoFullscreen: false
    }
  }).setView([19.454642913513275, -99.14258099676015], 13);

  L.easyPrint({
	title: 'Mi botón para imprimir',
	position: 'topleft'
	//elementsToHide: 'p, h2, .leaflet-control-zoom' 
}).addTo(map);
  // load a tile layer
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    {
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
      maxZoom: 17,
      minZoom: 9
    }).addTo(map);   
    
  map.setZoom(12);


 
   

    var layer = e.target.value;
    console.log("layer: "+layer);
  
    map.spin(true);
    $.getJSON(layer,function(data){
      map.spin(false);
      var locations = data.features.map(function(rat) {
        // the heatmap plugin wants an array of each location
        var location = rat.geometry.coordinates.reverse();
        //var mean = rat.properties.std;
        //console.log(mean);
        location.push(0.2);
        return location; // e.g. [50.5, 30.5, 0.2], // lat, lng, intensity
      });
    
      var heatCancer = L.heatLayer(locations, { radius: 35,minOpacity: 0.01} );
      var heatDiabetes = L.heatLayer(locations, { radius: 35,minOpacity: 0.01} );
      var heatNeumonia = L.heatLayer(locations, { radius: 35 , minOpacity: 0.01});
      /*if(layer = "neumoniaGeojson.geojson"){
        if(map.hasLayer(heatDiabetes)){
          map.removeLayer(heatDiabetes);
        }
        map.addLayer(heatNeumonia); 
      }else if(layer = "cancer_cdmx_4326.geojson") {
        if(map.hasLayer(heatNeumonia)){
          map.removeLayer(heatNeumonia);
        }*/
        map.addLayer(heatCancer); 
     //}
      
    }); //del getJson    
      
  }); // del onChange del select

  </script>   
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