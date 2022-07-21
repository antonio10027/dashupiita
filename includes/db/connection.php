<?php

    
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
    

?>