<?php
if(!isset ($_GET["skillName"]) || !isset ($_GET["skillValue"])){
	echo "nothing is set on view";
} else {
	$SkillName=$_GET["skillName"];
	$SkillValue=$_GET["skillValue"];
	include "connection.php";
	$sql="INSERT INTO skills (SkillName, SkillValue) VALUES ('".$SkillName."','".$SkillValue."')";
	if(!$res=$db->exec($sql)){
		echo "greska pri ubacivanju";
		die();
	} else {		
		echo "Success";
	}
	$db=null;
}

?>