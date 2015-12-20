<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery-1.11.3.min.js" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/s/dt/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.10,af-2.1.0,b-1.1.0,b-html5-1.1.0,kt-2.1.0,r-2.0.0,sc-1.4.0,se-1.1.0/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/s/dt/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.10,af-2.1.0,b-1.1.0,b-html5-1.1.0,kt-2.1.0,r-2.0.0,sc-1.4.0,se-1.1.0/datatables.min.css"/>
<link rel="stylesheet" type="text/css"  href="DataTables-1.10.10/media/css/dataTables.bootstrap.css"/>
<script type="text/javascript" src="DataTables-1.10.10/media/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="http://www.appelsiini.net/download/jquery.jeditable.mini.js"></script>
<script type="text/javascript" src="DataTables-1.10.10/extensions/editable/jquery.dataTables.editable.js"></script>
<script>
$(document).ready(function(){
var dtable=$("#dskills").dataTable().makeEditable({
	sUpdateURL:"updateAJAX.php"
});
});
</script>
</head>
<body>
<div class="container-fluid container-d2table">
<table id="dskills" class="display table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Skill</th>
			<th>Value</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$username="b3043476dc9bbc";
	$password="c70960bb";
	$database="itehDB";
	$host="eu-cdbr-azure-west-c.cloudapp.net";
	$db= new PDO('mysql:host='.$host.';dbname='.$database,$username,$password);
	$jsonbuilder=array();
	$query="SELECT iddskills,dskillName,dskillValue FROM dskills";
	$upit=$db->query($query);
	if($upit->rowCount()==0){
		echo "No rows to display";
		} else {
			while($row=$upit->fetch(PDO::FETCH_OBJ)){
				?>
				<tr id="<?php echo $row->iddskills;?>">
				<td><?php echo $row->iddskills;?></td>
				<td><?php echo $row->dskillName;?></td>
				<td><?php echo $row->dskillValue;?></td>
				</tr>
				<?php
			}
		}
		$db=null;
	?>						
						
		</tbody>			
	</table>
</div>
</body>
</html>