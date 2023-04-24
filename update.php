<!DOCTYPE html>
<?php include 'connection.php';
$var_value = $_GET['varname']; 
echo($var_value);

// if(isset($_REQUEST['send'])){
// $task = htmlspecialchars($_REQUEST['task']);
// $targettime = htmlspecialchars($_REQUEST['targettime']);
// $date = htmlspecialchars($_REQUEST['date']);
// echo($targettime);
// echo($task);
// echo($date);
// $sql ="update `todo` set task='$task', targettime='$targettime', date='$date'  where id ='$var_value'";
// $sql = "UPDATE todo SET task='$task', targettime='$targettime', date='$date'  where id ='$var_value'";
// $sql = "insert into todo(targettime,task,date,user_id)values('$targettime','$task','$date')";
// $conn->query($sql);
// echo "<script>console.log('Update Succesfully')</script>";
// header('location: todo.php');
// }

if (isset($_POST['submit'])) 
 {
	echo("zzz");
 	 $targettime = $_POST['targettime'];
 	 $task = $_POST['task'];
     $date = $_POST['date'];
     
	 $sql="UPDATE todo SET task='$task', targettime='$targettime', date='$date' WHERE id = '$var_value'";
	 $result=mysqli_query($conn,$sql);
	 if($result){
		echo "updated";
		header('location: todo.php');
	 }
	 else{
		die(mysqli_error($conn));
	 }
 }


?>

<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<title>TODO App</title>
	</head>
	<body>
		<div class="container">
			<center><h1>Update Todo list</h1></center>
			
		    	<div class="row" style="margin-top: 70px;">
			    	<div class="col-md-10 col-md-offset-1" >
				    	<table class="table">
				
					     	<hr><br>
								<form method="POST" >
									<div class="form-group">
										<label>Task Name</label>
										<table>
                                    <tr><td>Enter Target Time: </td><td><input type="text" id="targettime" name="targettime"></td></tr>
                                    <tr><td>Enter Task: </td><td><input type="text" id="task" name="task"></td></tr>
                                    <tr><td>Enter Date: </td><td><input type="date"  name="date"></td></tr>
                               </table> <button type="submit" class="btn btn-primary" name="submit">Submit</button>
							</form>
				    	</div>
			 	  </div>
			 </div>
		 </body>
	</html>