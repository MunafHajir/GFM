<?php
	session_start();
	if($_SESSION)
	{
		require_once('connection.php');
		$enroll_no = $_POST['enroll_no'];
		$name = $_POST['name'];
		$class_cordinator = $_POST['class_cordinator'];
		$gfm = $_POST['gfm'];
		$attend1 = $_POST['attend1'];
		$attend2 = $_POST['attend2'];
		$attend3 = $_POST['attend3'];
		$attend4 = $_POST['attend4'];
		$overall = $_POST['overall'];
		$ptt1 = $_POST['ptt1'];
		$ptt2 = $_POST['ptt2'];
		$pst = $_POST['pst'];
		$sql = "update student set attend1='$attend1',attend2='$attend2',attend3='$attend3',attend4='$attend4',ptt1='$ptt1',ptt2='$ptt2',pst='$pst' where enroll_no='$enroll_no'";
		mysqli_query($con,$sql) or die(mysqli_error($con));
		header("Location:gfm-dashboard.php");

	}
	else
	{
		header("Location:index.php");
	}

?>