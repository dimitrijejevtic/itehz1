<?php
if(isset ($_POST["log-in"])){	
	include "connection.php";
	$name=$_POST["username"];
	$password=md5($_POST["password"]);
	$query="SELECT * FROM users WHERE username='".$name."' AND passhash='".$password."'";
	$upit=$db->query($query);
	if($upit->rowCount()==0){
		$query="INSERT INTO users (username, passhash) VALUES ('".$name."','".$password."')";
		if(!$res=$db->exec($query)){
			echo "Registered";
			header("location:http://localhost/itehZad1/edit.php?login=confirmed");
		} else {
			 echo "sql Error";
			header("location:http://localhost/itehZad1/login.php?error=1");
		}
	} else {
		header("location:http://localhost/itehZad1/edit.php?login=confirmed");	
		$db=null;		
		die();
	}
}
?>