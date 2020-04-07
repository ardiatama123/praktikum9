<?php
include 'koneksi.inc.php';
?>
<!DOCTYPE html>

<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="main">
		<div class="menu-tengah">
		<div class="container">
			 	<h1>FORM LOGIN</h1>
				  <form action="cetak.php" method="POST">
				  <div class="row">
				    <div class="textbox">
				     <label for="nama1">Username</label>	
				    <input type="text"  name="username" placeholder="username..">
				    </div>
				  </div>
				  <div class="row">
				    <div class="textbox">
				    <label for="password">Password</label>	
				    <input type="password"  name="password" placeholder="Password..">
				    </div>
				  </div>
				  <br>
				  <div class="row">
				    <input type="submit" value="Submit">
				    <input type="reset" value="Reset">
				  </div>
				  </form>
				</div>
				</div>

		<div class="clear"></div>			
	</div> 
</body>
</html>
