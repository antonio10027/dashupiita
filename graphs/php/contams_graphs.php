<?php
if(isset($_GET['elem'])&& isset($_GET['start']) && isset($_GET['end']) && isset($_GET['estac'])){
   $elemento = $_GET['elem'];
   $start = $_GET['start'];
   $end = $_GET['end'];
   $stac=$_GET['estac'];
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
    
    
    //$sql = " select [dbo].[geojson_coropletas](".$varRecibida.")";
    $sql = "select [dbo].[geojson_graphs](".$elemento.",".$start.", ".$end.",".$stac.")";
    
    //print_r($varRecibida);
    
    $res = sqlsrv_query($conn, $sql);
    //sqlsrv_exec($sql);
    //echo ($res);
    
    $data = ''; 
    
    while($row = sqlsrv_fetch_array($res)){
        $data = $row[0];
        
    }
    print_r ($data);
  }

?>