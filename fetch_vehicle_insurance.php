<?php

include('dbconnect.php'); 
$v1=$_REQUEST['f1'];

$output=array();

 
$result=mysqli_query($conn,"select * from vehicle_Insurance WHERE vehiclenumber='$v1'");

$cnt=0;

while($r=mysqli_fetch_array($result))
{
    $cnt=1;
    $output[]=array("vehiclenumber"=>$r["vehiclenumber"],"vehiclename"=>$r["vehiclename"],
    "ownername"=>$r["ownername"],"vehicleamount"=>$r["vehicleamount"],
    "insuranceamount"=>$r["insuranceamount"],"expirydate"=>$r["expirydate"],
     "city"=>$r["city"],"postaladdress"=>$r["postaladdress"]);
    
    
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