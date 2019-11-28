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
<script>

$(document).ready(function(){

	$("#conf_pass_val").click(function(){
		var pass_pro = $("#pass_val").val();

		$.post("secret.php",{password:pass_pro},function(data){

			$("#progress").html(data);

		});

	});

});

</script>
<script>
$(document).ready(function(){

	$("#save").click(function(){
	var name_value = $("#name_val").val();
	var email_value = $("#email_val").val();
	var secret_value = $("#secret").val();
	var val_value = $("#val").val();
	var user_value = $("#user_val").val();
	var pass_value = $("#pass_val").val();
	var conf_pass_value = $("#conf_pass_val").val();

		$.post("save.php",{name:name_value,email:email_value,secret:secret_value,val:val_value,user:user_value,pass:pass_value,conf_pass:conf_pass_value},function(data){

			$("#result").html(data);

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
	height:600px;
	width:600px;
	background:linear-gradient(#AFEEEE,#FFA500);
	box-shadow:0 0 10px;
}
#name_val,#email_val,#secret,#val,#user_val,#pass_val,#conf_pass_val{
	width:200px;
	height:30px;
	border-radius:5px;
}
#sub,#save{
	width:150px;
	height:30px;
	border-radius:5px;
	color:white;
	background:linear-gradient(#FF4500,#000080);
}
</style>
</head>
<body>
		<center>
			<table width="400px" height="auto">
			
				<tr>
				<td colspan="2" align="center"><b>SIGN_UP FORM</b></td>
				</tr>
				
				<tr>
				<td align="right">Enter Name:</td>
				<td><input type="text" name="name" id="name_val" placeholder="name..."></td>
				</tr>
				
				<tr>
				<td align="right">Enter E-mail:</td>
				<td><input type="email" name="email" id="email_val" placeholder="email..."></td>
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
				<td align="right">User Name:</td>
				<td><input type="text" name="user" id="user_val" placeholder="user name..." ></td>
				</tr>
				
				<tr>
				<td align="right">Password:</td>
				<td><input type="password" name="pass" id="pass_val" placeholder="password..."></td>
				</tr>
				
				<tr>
				<td></td>
				<td id="progress"></td>
				</tr>
				
				<tr>
				<td align="right">Confirm Password:</td>
				<td><input type="password" name="conf_pass" id="conf_pass_val" placeholder="confirm password..."></td>
				</tr>
				
				<tr>
				<td align="center"><a href="signup.php"><input type="reset"  value="Refresh" id="sub"></a></td>
				<td align="center"><input type="submit" name="submit" value="Create" id="save"></td>
				</tr>
				<tr>
					<td><a href="index.php">Home</a></td>
					<td><div id="result" style="text-align:center;color:red;"></div></td>
				</tr>
							
			</table>
			 
		
		</center>

</body>
</html>
