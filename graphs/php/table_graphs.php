<?php
/*if(isset($_GET['elem'])&& isset($_GET['start']) && isset($_GET['end']) && isset($_GET['estac'])){
   $elemento = $_GET['elem'];
   $start = $_GET['start'];
   $end = $_GET['end'];
   $stac=$_GET['estac'];*/
    //print_r($varRecibida);
    
    $serverName = "D4G79RJ3";
    $connectionOptions = [
      "Database"=>"contaminantes2",
      "Uid"=>"contams",
      "PWD"=>"contams"
    ]; 
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if($conn == false)
      die(print_r(sqlsrv_errors(),true));
    else  //echo "Connection Successful";
    $inicio='2007-01-31';
    $fin = '2019-12-31';
    $idParam = 'o3';
    $idStation='ACO';
    /*$sql="SELECT date, nombre_estacion ,id_parameter ,value 
    FROM view_avg_stations_WithAllData_Per_Month_2005_2021
    where date BETWEEN '".$inicio."' AND '".$fin."' and id_parameter= '".$idParam."' and id_station = '".$idStation."' and estatus='ACTIVA'
    group by date, nombre_estacion, id_parameter, value
    ORDER BY date asc";*/

    $sql="SELECT date, nombre_estacion ,id_parameter ,value 
    FROM view_avg_stations_WithAllData_Per_Month_2005_2021
    where date BETWEEN '2005-12-31' AND '2019-01-31' and id_parameter= 'o3' and id_station = 'ACO' and estatus='ACTIVA'
    group by date, nombre_estacion, id_parameter, value
    ORDER BY date asc";
 
 // $sql = "select [dbo].[geojson_graphs](".$elemento.",".$start.", ".$end.",".$stac.")";
        
    $res = sqlsrv_query($conn, $sql);
    // CREAR CSV VCÍO  EN EL SERVIDOR
    $csvFile = "export.csv";
    $handle = fopen($csvFile,"w");
    if($handle === false){
      exit("Error al crear el archivo");
    }

  

       
    $data = ''; 
    
   while($row = sqlsrv_fetch_array($res)){
       fputcsv($handle, [$row["date"]->format('Y-m-d'),$row["nombre_estacion"],$row["id_parameter"],$row["value"]]);
    }
    fclose($handle);
 // }

?>