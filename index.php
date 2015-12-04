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
});</script>
</head>
<body>
<div id="fullpage" >
<div class="section section1" >
	<div id="l1" class="slide slide1"  data-anchor="slide1"> <div class="container"><h1>Dimitrije Jevtić</h1><p>e-mail: mita250193@live.com</p><h2>Experiences:</h2><h3></h3></div></div>
	<div id="r1" class="slide slide2"  data-anchor="slide2"> <div class="container"><h1 class="dota">peinsensei</h1><h2>Experiences:</h2></div></div>
</div>
<div class="section section2" >
	<div id="l2" class="slide slide3"  data-anchor="slide3"> <div class="container"><h2>Skills</h2></div></div>
	<div id="r2" class="slide slide4"  data-anchor="slide4"> <div class="container"><h2>Skills</h2></div></div>
	</div>
<div class="section section3" >Sec3</div>
</div>
</body>
</html>