<?php
if(!isset ($_GET["searched"]) || ($_GET["searched"])==""){
	echo "Nothing transfered";
}else{
	include "connection.php";
	$result=array();
	$count=0;
	$text=$_GET["searched"];
	$query="SELECT SkillName FROM skills WHERE SkillName LIKE '%".$text."%' LIMIT 0,5";
	$upit=$db->query($query);
	if($upit->rowCount()!=0){
		while($row=$upit->fetch(PDO::FETCH_OBJ)){
			$result[]=$row->SkillName;
			$count++;
		}		
	}
	if($count<5){
		$query2="SELECT dSkillName FROM dskills WHERE dSkillName LIKE '%".$text."%' LIMIT 0,".(5-$count)."";
		$upit2=$db->query($query2);
		if($upit2->rowCount()==0){
		}else{
			while($row=$upit2->fetch(PDO::FETCH_OBJ)){
				$result[]=$row->dSkillName;
				$count++;
			}
		}
	}
	if(empty($result)){
	echo "empty";}
	else{
	echo json_encode($result);
	}
	$result=null;
	$db=null;	
}
?>