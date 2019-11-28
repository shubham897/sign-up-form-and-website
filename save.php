	<?php
			
		
			$con = mysqli_connect("localhost","root","","signup");
				
			@$name = $_POST['name'];
			@$email = $_POST['email'];
			
			@$secret = $_POST['secret'];
			@$val = $_POST['val'];
			$secret_val = $secret.$val;
			
			@$user = $_POST['user'];
			@$pass = $_POST['pass'];
			@$conf_pass = $_POST['conf_pass'];
			

			if($name==''){
				echo "<script>alert('Please insert name...');</script>";		
				exit();
			}
			if($email==''){
				echo "<script>alert('Please insert email...');</script>";		
				exit();
			}
			if($secret==''||$secret=="null"){
				echo "<script>alert('select secret option...');</script>";		
				exit();
			}
			if($val==''||$val=="null"){
				echo "<script>alert('insert secret value...');</script>";		
				exit();
			}
			if($user==''){
				echo "<script>alert('Please insert user...');</script>";		
				exit();
			}
			if($pass==''){
				echo "<script>alert('Please insert pass...');</script>";		
				exit();
			}
			if($conf_pass==''){
				echo "<script>alert('Please insert conf_pass...');</script>";		
				exit();
			}
						$select = "select *from signup where email='$email'";

						$run = mysqli_query($con,$select);

						$check = mysqli_num_rows($run);

						if($check==1){
							echo "<h3>This email address is already exist. Please try another email address!</h3>";
							exit();
						}
			
			if($pass == $conf_pass){
				
				$query = "INSERT INTO signup(name,email,secret_name,user,pass) VALUES('$name','$email','$secret_val','$user','$pass')";
				
				$run = mysqli_query($con,$query);
				
				if($run){
					echo "Hello < ".$user." > You are Register successfully.<br>Click here      <a href='index.php'> Login </a>";
				}
			}	
			else
				echo "<script>alert('Your conferm Password Does not Match. Try again...');</script>";
			

	?>