<?php
	if(isset($_POST['username']) && isset($_POST['password']))
	{
			require_once('connection.php');
			$username = $_POST['username'];
			$password = $_POST['password'];
			$loginrole = $_POST['loginrole'];
			$sql = "select * from student where enroll_no='$username' and password='$password'";
			$results = mysqli_query($con,$sql) or die(mysqli_error($con));
			if(mysqli_num_rows($results)>0)
			{
					header("Location:sDashboard.php");	//student dashboard
					$_SESSION['user'] = $username;
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
						header("Location:cDashboard.php");	//cordinator dashboard
						$_SESSION['user'] = $username;
					}
					else
					{	
						header("Location:gDashboard.php");	//gfm dashboard
						$_SESSION['user'] = $username;
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