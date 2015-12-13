<!DOCTYPE html>
<html>
<head>
<title>Edit values</title>
<script type="text/javascript" src="jquery-1.11.3.min.js" ></script>
<script type="text/javascript" src="crud.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" href="edit.css">

</head>
<body>
<div class="container">
<div class="row">
<h2 class="col-md-8 col-xs-6">Skills</h2>
<form>
<input type="text" name="searchval" class="form-control col-md-3 col-xs-3" id="searchBox" placeholder="Search..." style="width:200px;margin-top:20px;">
<button id="searchButton" class="btn btn-default col-md-1 col-xs-1" type="button" style="margin-top:20px;">Search</button>
<ul class="suggestions" id="suggest"> 
</ul>
</form>
</div>
<?php
include "connection.php";
error_reporting(E_ALL | E_STRICT);
ini_set("display_errors",0);
ini_set("log_errors",1);
ini_set("error_log","logs.log");
?>
<table id="ta" class="table table-striped table-hover table-bordered">
<tr>
<td>Skill name</td>
<td>Skill value</td>
<td></td>
</tr>
<tbody>
<?php
$query="SELECT idSkills,SkillName,SkillValue FROM skills";
$upit=$db->query($query);
if($upit->rowCount()==0){
	echo "No rows to display";
	} else {
		while($row=$upit->fetch(PDO::FETCH_OBJ)){
			?>
			<tr>
			<td id="n<?php echo $row->idSkills;?>"><?php echo $row->SkillName;?></td>
			<td id="v<?php echo $row->idSkills;?>"><?php echo $row->SkillValue;?></td>
			<td><a href="#" class="edit_link" id="edit_<?php echo $row->idSkills;?>">Edit</a>|<a href="#" class="delete_link" id="delete_<?php echo $row->idSkills;?>">Delete</a></td>
			</tr>
			<?php
		}
		?>		
		<?php
	}
	?>
	<tr class="last_row"></tr>
	<tr class="new_skill_container" style="display:none">
	<td><input type="text" name="SkillName" id="SkillName"></td>
	<td><input type="text" name="SkillValue" id="SkillValue"></td>
	<td><a href="#" class="add_new" id="add_">Save</a>|<a href="#" class="cancel_add">Cancel</a></td></tr>
	<tr>
	<td colspan="3"><a href="#" class="add_skill">Add new</a></td>
	</tr>
	</tbody>
	</table>
		<?php
	?>
<h2>Dota skills</h2>
<table id="dskills" class="table table-hover table-bordered">
	<tr>
	<td>Skill name</td>
	<td>Skill value</td>
	<td></td>
	</tr>
	<tbody>
	<?php 
	$query="SELECT iddskills, dSkillName, dSkillValue FROM dskills";
	$dres=$db->query($query);
	if($dres->rowCount()==0){
		echo "No rows to display";
	} else {
		while ($row=$dres->fetch(PDO::FETCH_OBJ)){
			?>
			<tr>
			<td id="dn<?php echo $row->iddskills;?>"><?php echo $row->dSkillName;?></td>
			<td id="dv<?php echo $row->iddskills;?>"><?php echo $row->dSkillValue;?></td>
			<td><a href="#" class="edit_dskill" id="edit_d_<?php echo $row->iddskills;?>">Edit</a>|<a href="#" class="delete_dskill" id="delete_d_<?php echo $row->iddskills;?>">Delete</a></td>
			</tr>
			<?php
		}
		?>
		<?php
	}	
	$db=null;
	?>
	<tr class="dlast_row"></tr>
	<tr>
	<td colspan="3"><a href="#" class="add_d_skill">Add new</a></td>
	</tr>
	</tbody>
</table>
<div class="result-table"> 
<h2>Search results</h2>
<table class="table table-striped table-hover table-bordered">
<tr>
<td>Name</td>
<td>Value</td>
</tr>
<tr id="results-row">
</tr>
</table>
</div>
</div>
</body>
</html>