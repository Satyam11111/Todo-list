<?php
include('connection.php');

if (!isset($_SESSION['USER_ID'])) {
	header("location:login.php");
	die();
}
 ?>

<?php 

$user = $_SESSION['USER_NAME'];
$query = mysqli_query($conn,"select * from users where email = '$user'");
$row =mysqli_fetch_array($query);
$id = $row['id'];

/*echo "$id";*/

 if (isset($_REQUEST['submit'])) 
 {
 	 $targettime = $_REQUEST['targettime'];
 	 $task = $_REQUEST['task'];
     $date = $_REQUEST['date'];
     mysqli_query($conn,"insert into todo(targettime,task,date,user_id)values('$targettime','$task','$date','$id')");
 }




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>TODO LIST</title>


<!-- Linking Fonts Here -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Abel&family=Alegreya+SC:ital,wght@0,400;0,500;0,700;0,800;0,900;1,400;1,500;1,700;1,800;1,900&family=Bree+Serif&family=Crimson+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>

<!-- Header Starts Here -->
     <header>

          <div id="navContent">

               <h2>TODO LIST</h2>
               
               <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="todo.php">Tasks</a></li>
               <Li><a href="logout.php">Logout</a></li>

               </ul>

          </div>
     </header>
     
     <div class="container">

            <div class="col-md-12" id="div1">
            <h4>Welcome <?php echo $_SESSION['USER'] ?></h4>

                <div class="panel panel-default">
                    <div class="panel-heading">Enter Task Details:</div>
                        <form action="#" method="REQUEST">
                                <table>
                                    <tr><td>Enter Target Time: </td><td><input type="text" id="targettime" name="targettime"></td></tr>
                                    <tr><td>Enter Task: </td><td><input type="text" id="task" name="task"></td></tr>
                                    <tr><td>Enter Date: </td><td><input type="date"  name="date"></td></tr>
                               </table>
                               <input type="submit" name="submit" value="Submit">
                        </form>
                    </div>    
                </div>
                <div>
                    <p><span id="datetime"></span></p>
                    <script >
                    var dt = new Date();
                    document.getElementById("datetime").innerHTML = dt.toLocaleString();
                    </script>
                </div>
            </div>  
        </div>

</body>


</head>
</html>
