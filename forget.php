<html>
<head>
	<title>Signin and signup form</title>
	<script src="jquery.js"></script>
<script>

$(document).ready(function(){

	$("#secret").click(function(){
		var user_option = $("#secret").val();

		$.post("secrets.php",{option:user_option},function(data){

			$("#show").html(data);

		});

	});

});

</script>
<style>
*{
	margin:0px;
	padding:0px;
}
body{
	width:80%;
	margin:0px 10% 10% 10%;
	background:linear-gradient(#FFE4E1,#F0FFF0);
}
table{
	height:400px;
	width:500px;
	background:linear-gradient(#87CEEB,#FFF5EE);
	box-shadow:0 0 10px;
}
#in,#secret,#val{
	width:200px;
	height:30px;
	border-radius:5px;
}
#sub{
	width:200px;
	height:30px;
	border-radius:5px;
	color:white;
	background:linear-gradient(#FF00FF,#800000);
}
</style>
</head>
<body>
	<form action="forget.php" method="post">
	
		<center>	
		
			<table width="400px" height="auto">
			
				<tr>
				<td colspan="2" align="center"><b>Forget Password Form</b></td>
				</tr>
				
				<tr>
				<td align="right">Enter Name OR User Name:</td>
				<td><input type="text" name="name" placeholder="name / user name..."  id="in"></td>
				</tr>
				
				<tr>
				<td align="right">Enter e-mail</td>
				<td><input type="email" name="email" placeholder="email..."  id="in"></td>
				</tr>
				
				<tr>
				<td align="right">Select secret option:</td>
				<td><select name="secret" id="secret">
					<option value="null">----Select any One----</option>
					<option value="Place">Place</option>
					<option value="Home">Home</option>
					<option value="School">School</option>
					<option value="College">College</option>
					<option value="Friend">Friend</option>
					<option value="Movie">Movie</option>
					<option value="Nick-name">Nick Name</option>
				</select></td>
				</tr>
				
				<tr id="show">
				</tr>
 
				<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Send" id="sub"></td>
				<td><a href="index.php">Home</a></td>
				</tr>
		
			</table>
			
		</center>
			
	</form>

	<?php
	
		$con = mysqli_connect("localhost","root","","signup");
		
		if(isset($_POST['submit'])){
			

			$name = $_POST['name'];
			$email = $_POST['email'];
			$secret = $_POST['secret'];
			@$val = $_POST['option'];
			$secret_val = $secret.$val;
			
			if($name==''||$email==''||$secret=="null"||$val=''){
				echo "<script>alert('Please insert all fields. Try again...');</script>";		
				exit();
			}
			
			$que = "select *from signup where user='$name' AND name='$name'";
			
			$run = mysqli_query($con,$que);
			
				while($row = mysqli_fetch_array($run))
				{
					$f_pass = $row['pass'];
					$f_email = $row['email'];
					$f_secret = $row['secret_name'];
				}	
				
				if($email == @$f_email && $secret_val == $f_secret)
				{				
					echo "Your Password is =";
					echo $f_pass;			
				}
				else
					echo "<script>alert('Your given data are not matched!. Try again......')</script>";
		}
	?>
</body>
</html>