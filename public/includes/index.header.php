<?php 
	session_start();
	$loginID=$_SESSION['loginID'];
 	 	require('file_path.php'); 
 	//include(DIR_CLASS . 'stats.class.php');
 	?>
 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Dart Tracker</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- CSS -->
		<link href="<?php echo URL; ?>/public/css/bootstrap.css" rel="stylesheet" />
		<link href="<?php echo URL; ?>/public/css/application.css" rel="stylesheet" />
		<link href="<?php echo URL; ?>/public/css/bootstrap-responsive.css" rel="stylesheet" />
		
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="<?php echo URL; ?>/public/js/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>
		<!--[if lt IE 8]>
		<p>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
		<![endif]-->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="<?php echo URL; ?>">Dart Tracker</a>
					<br />
								<div class="nav-collapse collapse">
						<?php if($loginID==NULL){
							?>
								<ul class='nav'>
								<form action='/login/' method='post'>
								<li><input type='text' name='email' id='email' placeholder='Email' /></li>
								<li><input type='password' id='password' name='password' placeholder='Password' /></li>
								<li><input type='submit' value='Log In' /></li>
								</form>
								<?php
								}
							elseif($loginID!=NULL){
							?>
							<ul class="nav">
								<li><a href="/games/?gameID=1">Singles 501</a></li>
								<li><a href="/games/?gameID=2">Singles Cricket</a></li>
								<li><a href="/games/?gameID=3">Doubles Cricket</a></li>
								<li><a href="/games/?gameID=4">Doubles 501</a></li>
								<?php } ?>
							</ul>
											</div>				</div>
			</div>
		</div>
		
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span3">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="nav-header">Stats</li>
							<li><a href="/allStars/">All Star Points</a></li>
							<li><a href="/team/">Team Stats</a></li>
							<li><a href="/player/">Player Stats</a></li>
						</ul>
					</div>
				</div>
				<div class="span9">
