<?php
if(!isset ($_GET["text"])){
	echo "nothing transfered";
} else {
	include "connection.php";
	require "resultSet.php";
	$text=$_GET["text"];
	$array=array();
	$query="SELECT SkillName, SkillValue FROM skills WHERE SkillName LIKE '%".$text."%'";
	$upit=$db->query($query);
	
	if($upit->rowCount()!=0){
		while($row=$upit->fetch(PDO::FETCH_OBJ)){
			$res=new ResultSet($row->SkillName,$row->SkillValue);
			$array[]=$res;
		}
	}
	$query2="SELECT dSkillName, dSkillValue FROM dskills WHERE dSkillName LIKE '%".$text."%'";
	$upit2=$db->query($query2);
	if($upit2->rowCount()!=0){
		while($row2=$upit2->fetch(PDO::FETCH_OBJ)){
			$res=new ResultSet($row2->dSkillName,$row2->dSkillValue);
			$array[]=$res;
		}
	}
	echo json_encode($array);
	$array=null;
	$db=null;
}
?>