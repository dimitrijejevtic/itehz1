<?php
if(!isset ($_GET["action"])){
	echo "No action selected";	
	} else {
		$action=$_GET["action"];
		switch($action){
			case "add": adddSkill();
			break;
			case "delete":deleteSkill();
			break;
			 case "update": updatedskill();
			 break;
		}
	}

function adddSkill(){
	if(!isset ($_GET["dskillname"]) || !isset ($_GET["dskillvalue"])){
	echo "No values transfered";
	} else {
		include "connection.php";
	$dsn=$_GET["dskillname"];
	$dsv=$_GET["dskillvalue"];	
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
function deleteSkill(){
	if(!isset ($_GET["id"])){
		echo "no id is transfered or set";
	} else {
		include "connection.php";
		$index=$_GET["id"];
		$query="DELETE FROM dskills WHERE iddskills='".$index."'";
		if(!$res=$db->query($query)){
			echo "greska pri brisanju";
			die();
		}
		else {
			echo "Deleted";
		}
$db=null;		
	}
}
function updatedskill(){
	if(!isset ($_GET["dskillname"])||!isset ($_GET["dskillvalue"])||!isset($_GET["id"])){
		echo "No values transfered";
	} else {
		include "connection.php";
		$dsn=$_GET["dskillname"];
		$dsv=$_GET["dskillvalue"];
		$id=$_GET["id"];
		$query="UPDATE dskills SET dSkillName='".$dsn."', dSkillValue='".$dsv."' WHERE iddskills='".$id."'";
		if(!$res=$db->query($query)){
			echo "greska pri update-u";
			die();
		} else {
			echo "Updated";
		}
		$db=null;
	}
}
?>