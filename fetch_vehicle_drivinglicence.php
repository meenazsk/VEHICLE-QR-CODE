<?php

include('dbconnect.php'); 
$v1=$_REQUEST['f1'];

$output=array();

 
$result=mysqli_query($conn,"select * from driving_licence WHERE vehiclenumber='$v1'");

$cnt=0;

while($r=mysqli_fetch_array($result))
{
    $cnt=1;
    $output[]=array("vehiclenumber"=>$r["vehiclenumber"],"vehiclename"=>$r["vehiclename"],
    "vehicletype"=>$r["vehicletype"],"username"=>$r["username"],"usermno"=>$r["usermno"],"city"=>$r["city"],
     "address"=>$r["address"],"dob"=>$r["dob"],"licenceno"=>$r["licenceno"],"age"=>$r["age"],
     "issueddate"=>$r["issueddate"],"expireddate"=>$r["expireddate"]);
    
    
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