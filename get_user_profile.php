<?php

include('dbconnect.php'); 
$v1=$_REQUEST['f1'];

$output=array();

 
$result=mysqli_query($conn,"select * from TABLE_signup WHERE mobileno='$v1'");

$cnt=0;

while($r=mysqli_fetch_array($result))
{
    $cnt=1;
    $output[]=array("name"=>$r["name"],"email"=>$r["email"],"mobileno"=>$r["mobileno"],"city"=>$r["city"],"postaladdress"=>$r["postaladdress"],"password"=>$r["password"]);
    
    
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