<?php 
 include('connection.php');

 $msg="";

if (isset($_POST['submit'])) {
 /* echo "<pre>";
  print_r($_POST);*/
  
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $sql = mysqli_query($conn,"select * from users where email='$email' && password='$password'");
  $num=mysqli_num_rows($sql);
  if ($num>0) {
    /*echo "login";*/
    $row=mysqli_fetch_assoc($sql);
    $_SESSION['USER_ID']=$row['id'];
    $_SESSION['USER']=$row['user_name'];
    $_SESSION['USER_NAME']=$row['email'];
    header("location:index.php");
  }
  else{
    $msg="Please Enter Valid Details !";
  }
  


}





?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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

#box input {
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
  color: #032037;
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
  max-width: 360px;
  background: #8ec7eb;
  margin: 100px auto 125px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  border-radius:15px;
}

body {
  background: -webkit-linear-gradient(100deg, #a756e9, #61bdd9);
}

	</style>

	<div id="box">
		
		<form method="post" action="">
			<div style="font-size: 30px;margin: 10px;color: Black;">LOGIN</div>

			<input id="email" type="email" name="email" placeholder="enter email"><br><br>
			<input id="password" type="password" name="password" placeholder="enter password"><br><br>

			<input id="button" name="submit" type="submit" value="Login"><p class="message"> </p><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>
                 