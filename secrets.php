<?php
	if(!@$_POST['option']=="")
	{						
		echo "<td align='right'>Enetr ". $_POST['option']." Name:</td>
			<td><input type='text'id='val' name='option'placeholder='".$_POST['option']." name..'></td>";
	}
?>