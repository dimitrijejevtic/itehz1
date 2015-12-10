<?php

$table="dskills";
$primaryKey="iddskills";

$columns=array(
	array('db'=>'dSkillName','dt'=>0),
	array('db'=>'dSkillValue','dt'=>1));
	
$username="b3043476dc9bbc";
$password="c70960bb";
$database="itehDB";
$host="eu-cdbr-azure-west-c.cloudapp.net";
$sql_details=array('user' =>$username, 'pass'=>$password,'db'=>$database,'host'=>$host);
require("DataTables-1.10.10/examples/server_side/scripts/ssp.class.php");

echo json_encode(SSP::simple($_GET,$sql_details,$table,$primaryKey,$columns));

?>