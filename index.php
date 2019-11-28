<?php
session_start();
?>
<html>
<head>
	<title>Signin and signup form</title>
	
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
	margin-top: 70px;
	height:500px;
	width:400px;
	background:linear-gradient(#87CEEB,#FFF5EE);
	box-shadow:0 0 10px;
}
#in{
	width:200px;
	height:30px;
	border-radius:5px;
}
#sub{
	width:200px;
	height:30px;
	border-radius:5px;
	background:linear-gradient(#7CFC00,#90EE90);
}
</style>
</head>
<body>
	<form action="index.php" method="post">
		<center>	
		
			<table width="400px" height="auto" id="table">
			
				<tr>
				<td colspan="2" align="center"><b>SIGN_IN FORM</b></td>
				</tr>
				
				<tr>
				<td align="right">Enter User Name:</td>
				<td><input type="text" name="user" placeholder="user name..." id="in"></td>
				</tr>
				
				<tr>
				<td align="right">Enter Password:</td>
				<td><input type="password" name="pass" placeholder="password..." id="in"></td>
				</tr>
 
				<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Login"  id="sub"></td>
				</tr>
				
				<tr>
				<td align="right"><a href="forget.php">Forget Password!</a></td>
				<td align="center">Click here for <a href="signup.php">SignUp</a></td>
				</tr>
							
			</table>
			
		</center>
		
			<center style="color:red;font-size:20;"><?php echo @$_GET['error']; ?></center>
			<center style="color:red;font-size:20;"><?php echo @$_GET['logout']; ?></center>
			
	</form>
	<?php
		
		$con = mysqli_connect("localhost","root","","signup");
		
		
		@$user = $_SESSION['admin'] = $_POST['user'];
		@$pass = $_POST['pass'];
		
		if(isset($_POST['submit'])){
			if($user==''||$pass==''){
				echo "<script>alert('Please insert all fields. Try again...');</script>";		
				exit();
			}
			
			$que = "select *from signup where user='$user' AND pass='$pass' ";
			
			$run = mysqli_query($con,$que);

			if(mysqli_num_rows($run)>0)
			{					
				echo "<script>window.open('welcome.php?logged=Logged in successfully...!','_self')</script>";
			}
			else
				echo "<script>alert('Password or User Name is incorrect!!')</script>";
		}
	?>
</body>
</html>
