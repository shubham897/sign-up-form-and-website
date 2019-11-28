<?php
session_start();

if(!$_SESSION['admin']){
	header('location:index.php?error=You are not an Administrator..! Try again....');
}
?>
<center><b><font color='blue' size='4'>WELCOME: </b><font color='red' size='4'><?php echo $_SESSION['admin']; ?></center>
<a href='logout.php'>Logout</a>

<fieldset></fieldset><fieldset></fieldset><fieldset></fieldset><fieldset></fieldset><fieldset></fieldset><fieldset></fieldset>
