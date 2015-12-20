<?php
include "connection.php";
if(!isset ($_GET['action'])){
	echo "err1";
} else{ 
if(($_GET['action'])=="delete"){
	if (isset($_REQUEST['id'])){
	$sql = "DELETE FROM dskills WHERE iddskills=".$_REQUEST['id'];
	if(!$res=$db->exec($sql)){
		echo "err2";
		die();
	} else {
		echo "ok";
	}

	}
}
if(($_GET['action'])=="insert"){
	if(!isset ($_GET["skillName"]) || !isset ($_GET["skillValue"])){
	echo "No values transfered";
	} else {
	$dsn=$_GET["skillName"];
	$dsv=$_GET["skillValue"];	
	$query="INSERT INTO dskills (dSkillName,dSkillValue) VALUES ('".$dsn."','".$dsv."')";
	if(!$res=$db->exec($query)){
		echo "greska pri ubacivanju";
		die();
	} else {
		echo "Success";
	}
		$db=null;
	}
}
}
?>
