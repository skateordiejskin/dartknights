<?php
	session_start();
	require('../app/class/login.class.php');
	
	$login=new Login();
	
	$loginInfo=$login->login($_POST['email'], $_POST['password']);
	
	$_SESSION['loginID']=$loginInfo['loginID'];
	?>
	<meta http-equiv='refresh' content='0; url=http://dartknight.tk' />
		
		