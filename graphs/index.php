<html>

<head>
<?php
     include("../includes/head/head_graphs_inner.php");
     //include("../includes/db/connection.php");

?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js">
	</script>


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

                                <div class="col-sm-3">
                                <select name="selectEstac" id="selectEstac" class="form-control show-tick">
                                        <option value="">-- Seleccione la estación --</option>										
                                        <option value="ACO">Acolman</option>
                                        <option value="AJM">Ajusco Medio</option>
                                        <option value="AJU">Ajusco</option>
                                        <option value="ARA">Aragón</option>
                                        <option value="ATI">Atizapan</option>
                                        <option value="AZC">Azcapotzalco</option>
                                        <option value="BJU">Benito Juárez</option>
                                        <option value="CAM">Camarones</option>
                                        <option value="CCA">Centro de Ciencias de la Atmósfera</option>
                                        <option value="CES">Cerro de la Estrella</option>
                                        <option value="CHO">Chalco</option>                                        
                                        <option value="COY">Coyoacan</option> 
                                        <option value="CUA">Cuajimalpa</option> 
                                        <option value="CUT">Cuautitlán</option> 
                                        <option value="FAC">FES Acatlán</option> 
                                        <option value="FAR">FES Aragón</option> 
                                        <option value="GAM">Gustavo A. Madero</option> 
                                        <option value="HGM">Hospitla General de México</option>
                                        <option value="IMP">Inst. Mex. del Petroleo</option>                                         
                                        <option value="INN">Investigaciones Nucleares</option> 
                                        <option value="IZT">Iztacalco</option> 
                                        <option value="LAG">Lagunilla</option>                                        
                                        <option value="LPR">La Presa</option> 
                                        <option value="LVI">La Villa</option> 
                                        <option value="LLA">Los Laureles</option> 
                                        <option value="MER">Merced</option> 
                                        <option value="MIN">Metro Insurgentes</option>
                                        <option value="MGH">Miguel Hidalgo</option> 
                                        <option value="MPA">Milpa Alta</option>
                                        <option value="MON">Montecillo</option>
                                        <option value="NEZ">Nezahualcóyotl</option>
                                        <option value="PED">Pedregal</option>
                                        <option value="PER">La Perla</option>
                                        <option value="PLA">Plateros</option>
                                        <option value="SAG">San Agustín</option>
                                        <option value="SJA">San Juan de Aragón</option>
                                        <option value="SFE">Santa Fé</option>
                                        <option value="SUR">Santa Úrsula</option>
                                        <option value="SAC">Santiago Acahualtepec</option> 
                                        <option value="TAC">Tacuba</option>
                                        <option value="TAH">Tláhuac</option>
                                        <option value="TLa">Tlalnepantla</option>
                                        <option value="TAX">Taxqueña</option>
                                        <option value="TLI">Tultitlán</option>
                                        <option value="UIZ">UAM Iztapalapa</option>
                                        <option value="UAX">UAM Xochimilco</option>
                                        <option value="VAL">Vallejo</option>
                                        <option value="VIF">Villa de las Flores</option>                                        
                                        <option value="XAL">Xalostoc</option>
                                        


                                       
                                    </select>
                                </div>  
                                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <!--<input type="text" id="startDate" class="datepicker form-control" placeholder="Seleccione Fecha Incio">-->
                                            <input type="text" name= "startDate" id="startDate" class="datepicker form-control" placeholder="Seleccione Fecha Incio">
                                        </div>
                                    </div>
                                </div>  
                                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="endDate" class="datepicker form-control" placeholder="Seleccione Fecha Fin">
                                        </div>
                                    </div>
                                </div>  
                                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <button id="submit">Consultar</button>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Select -->                                   
		</div>
	    <!--  ************************************ FIN DEL EL SELECT  ****************************** -->

        <div class="row clearfix">
                <!-- Line Chart -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>SERIE DE TIEMPO</h2>                            
                        </div>
                        <div class="body">
                            <!--<canvas id="line_chart" height="150"></canvas>-->
                            <canvas id="chart_elem" height="150"></canvas>
                            <p><a id="btnDownload" download="graf.png" href="">Descargar</a></p>
                        </div>
                    </div>
                </div>               
            </div>
            </div>
        </div>
        <form name="form" action="" method="get">
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
                                En esta sección se muestran las gráficas generadas a partir de las concentraciones 
                                medias de los distintos contaminantes sensadas por las estaciones meteorológicas 
                                ubicadas en la Ciudad de México. Este valor medio corresponde al periodo del 2005 al 2021.                               
                                <br>
                                <br>
                                Se pueden elegir el contaminante y la estación meteorológica de interés, así como el periodo de tiempo que se desee consultar.
                                <br>
                                <br>
                                En la tabla inferior aparecen las mediciones de cada estación para el elemento seleccionado correspondientes
                                al rango de fechas elegido así como la estación meteorológica de interés.
                                Se permite la exportación de la tabla en formato CSV.
                                <br>
                                <br>
                                Se permite que la gráfica generada pueda ser guardada como imagen.
                            </p>                      
                        </div>                        
                        <div class="body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped table-hover dataTable">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>                                        
                                        <th>Nombre Estación</th>
                                        <th>Contaminante</th>
                                        <th>Medición</th>                                        
                                    </tr>
                                </thead>                               
                                <tfoot>
                                    <tr>
                                        <th>Fecha</th>                                        
                                        <th>Nombre Estación</th>
                                        <th>Contaminante</th>
                                        <th>Medición</th> 
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
   

		  <!--#END# Exportable Table -->
 </form>



 
    </section>

   
 
  
<?php
include("../includes/js/js_graphs_inner.php");
?> 
<script>


</script>

<script>

var asyncData;
$('#submit').on('click', function(){

  dateStart = new Date($('#startDate').val());
  var dayStart = dateStart.getDate();
  var monthStart = dateStart.getMonth() + 1;
  var yearStart = dateStart.getFullYear();
  var fechaInicio=yearStart+'-'+monthStart+'-'+dayStart;
  console.log("fechaInicio: "+fechaInicio);

  dateEnd = new Date($('#endDate').val());
  var dayEnd = dateEnd.getDate();
  var monthEnd = dateEnd.getMonth() + 1;
  var yearEnd = dateEnd.getFullYear();
  var fechaFin=yearEnd+'-'+monthEnd+'-'+dayEnd;
  console.log("fechaFin: "+fechaFin);  

  var selectedContam = document.getElementById('selectContam');
  var elemento = selectedContam.options[selectedContam.selectedIndex].value;
  var elementoMayusc = selectedContam.options[selectedContam.selectedIndex].text;
  console.log("Contam: "+elemento);
  var selectedEstc= document.getElementById('selectEstac');
  var estacion = selectedEstc.options[selectedEstc.selectedIndex].value;
  var estacMayusc = selectedEstc.options[selectedEstc.selectedIndex].text;
  console.log("Estación: "+estacion);
  
  var table = $('#example').DataTable() ;
  if(table){
    table.destroy();
  }
  getdata(elemento,fechaInicio,fechaFin,estacion,elementoMayusc,estacMayusc);

  
         
}); //del onclick
function getdata(elemento,fechaInicio,fechaFin,estacion,elementoMayusc,estacMayusc){
    const getPeople = async () => {
    //const data = await fetch("php/contams_graphs.php?elem='o3'&start='2013-01-31'&end='2019-01-31'&estac='ACO'", {
        const data = await fetch("php/contams_graphs.php?elem='"+elemento+"'&start='"+fechaInicio+"'&end='"+fechaFin+"'&estac='"+estacion+"'",{
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',                                  
        }
    });
    
    const jsondata = await data.json();
    console.log(jsondata);
    asyncData=jsondata.stats;
    
    var elementoMayus = elementoMayusc;
    var estacMayus = estacMayusc;
    initialiseChart(elementoMayus, estacMayus);
    initialiseTable();
                    
    return jsondata;
    }; // del getPeople

    getPeople();
}

    function initialiseChart(elementoMayus,estacMayus){
    var data= asyncData;
    var length = data.length;
    console.log("data in charts: "+ data.length);
    var labels = [];
    var values = [];
    for (i = 0; i < data.length; i++) {
        labels.push(data[i].date);
        values.push(data[i].media);
    }
    console.log("labels: "+ labels[0]);
    let fill = false;
//let color = Chart.helpers.color;
new Chart(document.getElementById("chart_elem"), {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'Nivel de '+elementoMayus+' Estación '+estacMayus,
            //label: 'Nivel de '+'O3'+' Estación ACO',
            pointRadius: 0,
            tension: 0,
            backgroundColor: 'green',
            borderColor: 'blue',
            fill: fill,
            data: values
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
                    max: Math.max(...values)+1
            
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Puntos'
                }

            }],
            xAxes: [{ }]
        },
        tooltips: {
            callbacks: {
                label: function(value, index) {
                    return index.datasets[value.datasetIndex].label + ": " + value.yLabel;
                },
            }
        }
    }//Del Options
});//del chart

}// del initialize chart

function initialiseTable(){
    var table = $("#example").DataTable({
        data: asyncData,
        columns: [
        {
            data: "date",
        },

        {
                data: "id_station",
            },
            {
                data: "id_parameter"
            },
            {
                data: "media"
            }
        ]
        //"bDestroy": true
});
console.log("data: "+table);
}

function json2csv(){
    var data= asyncData;
    const items = data;
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
    downloadLink.download = "DataDump.csv";  //Name the file here
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);
}
        



</script>
<script>//********************* DESCARGAR LAS GRÁFICAS  ************************* */
  function downloadImage(){
    myChart.options.title.text = 'New Chart Title';
    myChart.update({
      duration: 0
   });
   var link = document.createElement('a');
   link.href = myChart.toBase64Image();
   link.download = 'myImage.png';
   link.click();
   myChart.options.title.text = 'Chart Title';
   myChart.update({
      duration: 0
   });
  }
  
</script>
<script>
  document.getElementById("btnDownload").addEventListener('click', function(){  
  var base64_url = document.getElementById("chart_elem").toDataURL("image/png");    
  this.href = base64_url;
});
</script>
<script>
    function print_filter(filter) {
    var f=eval(filter);
    if (typeof(f.length) != "undefined") {}else{}
    if (typeof(f.top) != "undefined") {f=f.top(Infinity);}else{}
    if (typeof(f.dimension) != "undefined") {f=f.dimension(function(d) { return "";}).top(Infinity);}else{}
    console.log(filter+"("+f.length+") = "+JSON.stringify(f).replace("[","[\n\t").replace(/}\,/g,"},\n\t").replace("]","\n]"));
}
</script>

</body>
</html>
