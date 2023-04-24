<?php 

	include("connection.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
    	$email = $_POST['email'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$query = "insert into users (email,user_name,password) values ('$email','$user_name','$password')";

			mysqli_query($conn, $query);

			header("Location: Login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

      font-family: FontAwesome, "Roboto", sans-serif;
      outline: 0;
      background: #f2f2f2;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
      border-radius:15px;
	}

	#button{

  font-size: 14px;
  font-weight: bold;
  background: #032037;
  width: 100%;
  border: 0;
  border-radius:30px;
  margin: 0px 0px 8px;
  padding: 15px;
  color: #FFFFFF;
	}

  #button:hover,button:focus {
  background: #454085;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  transform: translateY(-4px);
}
#button:active {
  transform: translateY(2px);
  box-shadow: 0 2.5px 5px rgba(0, 0, 0, 0.2);
}
	#box{
  position: relative;
  z-index: 1;
  background: #8ec7eb;
  max-width: 360px;
  margin: 90px auto 90px;
  padding: 45px;
  text-align: center;
  border-radius: 15px;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  
	}
body {
  background: -webkit-linear-gradient(right, #9ca5e1, #e096e0);
}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 30px;margin: 10px;color: Black;">SIGNUP</div>
			<input id="text"type="email" name="email" placeholder="enter email"><br><br>
			<input id="text" type="text" name="user_name" placeholder="enter username"><br><br>
			<input id="text" type="password" name="password" placeholder="enter password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>
