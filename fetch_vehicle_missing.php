<?php

include('dbconnect.php'); 
$v1=$_REQUEST['f1'];

$output=array();

 
$result=mysqli_query($conn,"select * from vehicle_missing WHERE vehiclenumber='$v1'");

$cnt=0;

while($r=mysqli_fetch_array($result))
{
    $cnt=1;
    $output[]=array("vehiclenumber"=>$r["vehiclenumber"],"vehiclename"=>$r["vehiclename"],
    "complaint"=>$r["complaint"],"details"=>$r["details"],
    "stationname"=>$r["stationname"],"city"=>$r["city"],
     "address"=>$r["address"],"date_d"=>$r["date_d"]);
    
    
}

  
$flag["code"]="0";

if($cnt>0)
{
    $flag["code"]="1";
    
    print(json_encode($output));
}
else
{   
    printf(json_encode("Error"));

} 

 

?>