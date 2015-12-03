<?php 
if(!isset ($_GET["skillName"]) || !isset ($_GET["skillValue"]) || !isset ($_GET["index"])){
	echo "nothing is sent from view";
} else {
	$SN=$_GET["skillName"];
	$SV=$_GET["skillValue"];
	$index=$_GET["index"];
	include "connection.php";
	$sql="UPDATE skills SET SkillName='".$SN."', SkillValue='".$SV."' WHERE idSkills='".$index."'";
	if(!$res=$db->exec($sql)){
		echo "Error pri update";
		die();
	} else {
		echo "Updated";
	}
	$db=null;
}

?>