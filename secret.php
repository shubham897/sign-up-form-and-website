
<?php
	$pass = @$_POST['password'];
	$len1 = strlen($pass);
	if($len1>8){
		echo "<progress value='".$len1."'max='10'  style='width:145px;height:15px;color:green;'></progress>Strong.";
	}
	else if($len1>=6 && $len1<=8){
		echo "<progress value='".$len1."'max='10'  style='width:145px;height:15px;color:yellow;'></progress>Normal!";
	}
	else if($len1>0 && $len1<6){
		echo "<progress value='".$len1."'max='10' style='width:145px;height:15px;color:red;'></progress>weak!";
	}
	else 
		echo "";				
?>

