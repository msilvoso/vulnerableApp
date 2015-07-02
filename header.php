<html>
	<head>
		<title><?=$config['display']['title']?></title>
		<link rel="stylesheet" media="screen" href="/css/main.css" />
	</head>
	<body>
		<nav id="top-bar" class="show">
			<div class="row">
				<p class="left"><script>document.write(Date())</script></p>
				<ul class="right inline-list">
					<li><a href="#">E-Paper</a></li>
					<li><a href="#">Subscribe</a></li>
<?php
if (isset($_SESSION['login']) && !empty($_SESSION['login'])):
?>
	<li><a href="/?action=logout.php">Logout</a></li>
<?php
else:
?>
	<!--<li><a href="/?action=loginForm.php">Login</a></li>-->
<?php
endif;
?>
				</ul>
			</div>
		</nav>
		<div class="content">
			<div id="header">
				<h1 onclick="document.location='/';"><?=$config['display']['title']?></h1>
			</div>
