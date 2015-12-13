<html>
<head>
<title>Title of this very interesting page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery-1.11.3.min.js" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
<script src="jquery.easings.min.js"></script>
<script type="text/javascript" src="jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="jquery.fullPage.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script src="Chart.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/s/dt/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.10,af-2.1.0,b-1.1.0,b-html5-1.1.0,kt-2.1.0,r-2.0.0,sc-1.4.0,se-1.1.0/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/s/dt/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.10,af-2.1.0,b-1.1.0,b-html5-1.1.0,kt-2.1.0,r-2.0.0,sc-1.4.0,se-1.1.0/datatables.min.js"></script><script type="text/javascript" src="Chart.Radar.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#fullpage").fullpage({
		slidesNavigation:true,
		navigation:true,
		sectionSelector: '.section',
        slideSelector: '.slide',
		loopHorizontal: false,
		verticalCentered: true
	});

$("#skills").DataTable({
	autoFill:true,
	dom:'Bfrtip',
	buttons:['copy','excel','pdf'],
	colReorder: true,
	keys: true,
	select: true
	});
$("#dskills").DataTable({
	"processing":true,
	"serverSide":true,
	"ajax":"server-d-index.php"	
});
$(function(){
	$('a[rel=ssbc]').popover({
		html:true,
		trigger:'hover',
		content:function(){
			return '<img src="http://www.dotatalk.com/wp-content/uploads/2014/02/balkan-ticket.png"/>';
		}
	});
});
$(function(){
	$('a[rel=bc]').popover({
		html:true,
		trigger:'hover',
		content:function(){
			return '<img src="http://cdn.dota2.com/apps/570/icons/econ/leagues/subscriptions_balkanchallenger_large.104e77f57a7a003259dfb9d90b8c9098d714cc28.png" width="200px"/>';
		}
	});
});
$(function(){
	$('a[rel=ebl]').popover({
		html:true,
		trigger:'hover',
		content:function(){
			return '<img src="https://i.ytimg.com/vi/mWMV9sErqzQ/maxresdefault.jpg" width="200px"/>';
		}
	});
});
$(function(){
	$('a[rel=jdl]').popover({
		html:true,
		trigger:'hover',
		content:function(){
			return '<img src="http://www.dotatalk.com/wp-content/uploads/2014/01/joindota.png" width="200px"/>';
		}
	});
});
$(function(){
	$('a[rel=pecat]').popover({
		html:true,
		trigger:'hover',
		content:function(){
			return '<img src="http://riki.dotabuff.net/t/l/1JCCGR1zWOz.png" width="200px"/>';
		}
	});
});
$(function(){
	$('a[rel=4h]').popover({
		html:true,
		trigger:'hover',
		content:function(){
			return '<img src="https://yt3.ggpht.com/-t79t88BTX0o/AAAAAAAAAAI/AAAAAAAAAAA/mJuBWx4ScgQ/s900-c-k-no/photo.jpg" width="100px"/>';
		}
	});
});
$(function(){
	$('a[rel=undp]').popover({
		html:true,
		trigger:'hover',
		content:function(){
			return '<img src="https://s3.amazonaws.com/globaljobs.org/jobs/logos/000/004/826/original/undp_0.jpg?1446484217" width="200px"/>';
		}
	});
});
$(function(){
	$('a[rel=ggn]').popover({
		html:true,
		trigger:'hover',
		content:function(){
			return '<img src="https://scontent-vie1-1.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/17398_471547183004201_5462457835987494823_n.png?oh=c39d75e2617c8ffc033b33507348846c&oe=56D9D32F" width="200px"/>';
		}
	});
});

var ctx=$("#d2chart").get(0).getContext("2d");
var d2data={
	labels:["Pushing","Farming","Versatility","Supporting","Fighting"],
	datasets:[
	{
		label:"Dota Dataset",
		fillColor:"rgba(237, 141, 35,0.2)",
		strokeColor:"rgba(237, 141, 35,1)",
		pointColor:"rgba(237, 141, 35,1)",
		pointStrokeColor:"#fff",
		pointHighlightFill: "#fff",
		pointHighlightStroke: "rgba(237, 141, 35,1)",
		data:[80,90,85,50,70]
	},]
};
var myChart= new Chart(ctx).Radar(d2data,{});
});
</script>
</head>
<body>
<div id="fullpage" >
	<div class="section section1" >
		<div id="l1" class="slide slide1"  data-anchor="slide1">
			<div class="container">
				<h1>Dimitrije Jevtić</h1>
				<div align="center">
					<span class="glyphicon glyphicon-envelope"></span><span class="glyphicon-class" > e-mail: mita250193@live.com</span>
					<p><span class="glyphicon glyphicon-briefcase"></span> Currently working @ UNDP Serbia as ICT Consultant (from September 2015)</p>
				</div>
			<div align="center">
				<h3>Experiences:</h3>
				<ul style="list-style-type:none; padding:0;">
					<li><span class="glyphicon glyphicon-chevron-left"></span><span class="glyphicon-class"><a href="#" rel="ggn">ASP.NET developer @ Good Game Network</a></span><span class="glyphicon glyphicon-chevron-right"></span></li>
					<li><span class="glyphicon glyphicon-chevron-left"></span><span class="glyphicon-class"><a href="#" rel="undp">Intern @ UNDP Serbia as ICT consultant</a></span><span class="glyphicon glyphicon-chevron-right"></span></li>
				</ul>
				<h3>Education</h3>
				<ul style="list-style-type:none; padding:0;">
					<li>Gimnazija</li>
					<li>FON</li>
				</ul>
			</div>		
			<div align="center">
				<h3>Interests</h3>
				<a href="#" class="btn btn-success">MVC 5</a>
				<a href="#" class="btn btn-info">Azure</a>
				<a href="#" class="btn btn-warning">SharePoint</a>
				<a href="#" class="btn btn-danger">SignalR</a></div>
			</div>
		</div>
		<div id="r1" class="slide slide2"  data-anchor="slide2">
			<div class="container">
				<h1 class="dota">peinsensei</h1>	
				<h3>Experiences:</h3>
				<ul>
					<li>Warcraft:DotA (2009-2010)</li>
					<li>CS:S (2010-2012), Teams: Elite Gaming, Zgubidani, Weterans</li>
					<li>Battlefield 3 (2013)</li>
					<li>Dota 2 (2013-Present)</li>
				</ul>
				
				<h3>Dota 2</h3>
				<h4 style="text-align:left;">Teams</h4>
				<ul>
					<li><a href="#" rel="pecat">pecat - Gde je pecat? (2013-2014)</a></li>
					<li><a href="#" rel="4h">4H - ChetiriHead (2015) </a></li>
				</ul>
				
				<h3>Competitions:</h3>
				<ul>
					<li><a href="#" rel="ssbc">SteelSeries Balkan Cup</a></li>
					<li><a href="#" rel="bc">Balkan Challenger</a></li>
					<li><a href="#" rel="ebl">Elite Balkan League</a></li>
					<li><a href="#" rel="jdl">JoinDota Season 4, 5, 6</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="section section2" >
		<div id="l2" class="slide slide3" data-anchor="slide3">
			<div>
				<div class="container">
					<table id="skills" class="display">
						<thead>
						<tr>
							<th>no.</th>
							<th>Name</th>
							<th>Value</th>
							<th>Description</th>
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
	$query="SELECT s.idSkills,s.SkillName,s.SkillValue, v.displayValue FROM skills s JOIN itehdb.values v ON s.SkillValue=v.idValue;";
	$upit=$db->query($query);
	$index=1;
	if($upit->rowCount()==0){
		echo "No rows to display";
		} else {
			while($row=$upit->fetch(PDO::FETCH_OBJ)){
				?>
				<tr>
				<td><?php echo $index;?></td>
				<td><?php echo $row->SkillName;?></td>
				<td><?php echo $row->SkillValue;?></td>
				<td><?php echo $row->displayValue;?></td>
				</tr>
				<?php
				$index++;
			}
		}
	?>
						</tbody>			
					</table>
				</div>
			</div>
		</div>
	<div id="r2" class="slide slide4"  data-anchor="slide4">
		<div class="parent">
			<div class="d2container-l">
				<div class="container container-d2table">
					<table id="dskills" class="display">
						<thead>
						<tr>
							<th>Skill</th>
							<th>Value</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td></td>
							<td></td>
						</tr>
						</tbody>			
					</table>				
				</div>
			</div>
			<div class="d2container-r">
				<div class="d2canvas">
					<canvas id="d2chart" width="400px" height="300px" ></canvas>
					<div class="container container-bars">
						<h4>TryHarding</h4>
							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									100%
								</div>
							</div>
						<h4>Map awareness</h4>
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
								70%
							</div>
						</div>
						<h4>Compassion for enemies</h4>
						<div class="progress">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 2%;">
									0%
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="section section3" >
		<div class="container details">
			<div class="details-container">
				<address>
					<strong>Dimitrije Jevtić</strong><br>
					Belgrade<br>
					<abbr title="Mobile phone">M:</abbr>062/614-319<br>
					<a href="mailto:#">mita250193@live.com</a><br>
					Available: 10AM:20PM<br>
				</address>
			</div>
		</div>
	</div>
</div>
</body>
</html>