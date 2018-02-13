<?php
	if(isset($_POST['username']) && isset($_POST['password']))
	{
			session_start();
			require_once('connection.php');
			$username = $_POST['username'];
			$password = $_POST['password'];
			$loginrole = $_POST['loginrole'];
			$sql = "select * from student where enroll_no='$username' and password='$password'";
			$results = mysqli_query($con,$sql) or die(mysqli_error($con));
			if(mysqli_num_rows($results)>0)
			{
					$_SESSION['user'] = $username;
					header("Location:sDashboard.php");	//student dashboard
			}
			else
			{
				$sql = "select * from validation where username='$username' and password='$password' and type='$loginrole'";
				$results = mysqli_query($con,$sql) or die(mysqli_error($con));
				if(mysqli_num_rows($results)>0)
				{
					$row = mysqli_fetch_array($results);
					if(strcmp($row['type'],"cordinator") == 0)
					{
						$_SESSION['user'] = $username;
						header("Location:cord-dashboard.php");	//cordinator dashboard
					
					}
					else
					{	
						$_SESSION['user'] = $username;
						header("Location:gfm-dashboard.php");	//gfm dashboard
						
					}
				}
				else
				{
					echo "<script>alert('Invalid Username or Password');</script>";
					header("Refresh: 0; url=index.html");
				}
			}//end of student else

	}
	else
	{
		header("Location:index.php");
	}
?>