<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery-1.11.3.min.js" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

<div  class="container" style="padding-top:20px;">
      <form action="loginvalidate.php" method="POST" class="form-signin" style="max-width: 300px;padding: 15px;margin: 0 auto;background-color:#C7C7C7;">
        <h2 class="form-signin-heading" style="margin-bottom: 10px;">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="username" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" type="email">
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" id="inputPassword" class="form-control" placeholder="Password" required="" type="password">
        <button name="log-in" class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top:15px;">Sign in</button>
      </form>
	  <div id="loginInfo" class="container bg-danger" style="max-width: 300px;padding: 15px;margin: 0 auto;display:<?php if(isset ($_GET["error"])){
		  if($_GET["error"]==1){
			  echo "";
		  } else {
			  echo "none";
		  }
	  } else {
		  echo "none";
	  }
	  
	  ?>;">Invalid login attempt!
	  </div>
    </div>
</body>
</html>