<?php
include "connection.php";
switch ($_REQUEST ['columnId']){
	case 1:
		$sql = "UPDATE dskills SET dSkillName='".$_REQUEST['value']."' WHERE iddskills='".$_REQUEST['id']."'";
	break;
	case 2:
		$sql = "UPDATE dskills SET dSkillValue='".$_REQUEST['value']."' WHERE iddskills='".$_REQUEST['id']."'";
	break;
}
if(!$res=$db->query($sql)){
			echo "err";
			
		} else {
			echo $_REQUEST['value'];
			die();
		}
		$db=null;

?>