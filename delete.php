<?php
if(!isset ($_GET["id"])){
echo "No id parameter";
} else {
	$id=$_GET["id"];
	include "connection.php";
	$sql="DELETE FROM skills WHERE idSkills='".$id."'";
	if(!$res=$db->exec($sql)){
		echo "greska pri brisanju";
		die();
	} else {
		echo "GJx2";
	}
	$db=null;
}
?>
