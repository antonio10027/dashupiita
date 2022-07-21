<?php
if(isset($_GET['var'])){
    $varRecibida = $_GET['var'];
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
    
    
    $sql = " select [dbo].[geojson_coropletas_table](".$varRecibida.")";
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