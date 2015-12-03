<!DOCTYPE html>
<html>
<head>
<title>Edit values</title>
<script type="text/javascript" src="jquery-1.11.3.min.js" ></script>
<script type="text/javascript" src="deleteR.js"></script>
<script type="text/javascript" src="saveedit.js"></script>
<script type="text/javascript" src="addSkill.js"></script>
<script type="text/javascript" src="crud.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h2>Skills</h2>
<?php
include "connection.php";
include "models.php";
?>
<table id="ta">
<tr>
<td>Skill name</td>
<td>Skill value</td>
<td></td>
</tr>
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
	</table>
		<?php
	?>
<h2>Dota skills</h2>
<table id="dskills">
	<tr>
	<td>Skill name</td>
	<td>Skill value</td>
	<td></td>
	</tr>
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
</table>
</body>
</html>