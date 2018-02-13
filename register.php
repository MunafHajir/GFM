<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$con = mysqli_connect("localhost","root","root","GFM");
if($_POST){
$name = $_POST['name'];
$enroll = $_POST['enroll'];
$unique = $_POST['uni'];
$shift = $_POST['shift'];
$dept = $_POST['dept']; 
$cor= $_POST['cordinator'];
$gfm = $_POST['gfm'];
$password= md5($_POST['password']);
$query="insert into student(name,enroll_no,unique_id,shift,dept,class_coordinator,gfm,password) values('$name','$enroll','$unique','$shift','$dept','$cor','$gfm','$password')";
mysqli_query($con,$query);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register - GFM Framework</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">                        
                        <div class="login-form">
                            <h4>Register To Get Access</h4>
                            <form name="myForm" onsubmit="pass();" method="post" action="register.php">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input type="text" class="form-control" placeholder="Username" required pattern="[A-Za-z ]+" title="Please Enter Proper User name" name="name">
                                </div>

                                <div class="form-group">
                                    <label>Enrollment No.:</label>
                                    <input type="text" class="form-control" placeholder="Enrollment No" required pattern="[0-9]+" title="Please provide proper length" maxlength="10" minlength="10" name="enroll">
                                </div>

                                <div class="form-group">
                                    <label>Unique No.:</label>
                                    <input type="text" class="form-control" placeholder="Unique No" required pattern="[0-9]+" title="Please provide proper length" maxlength="4" minlength="2" name="uni">
                                </div>

                                <div class="form-group">
                                    <label>Shift:</label>
                                    <select id="loginrole" class="form-control" required name="shift">
                                        <option value="1st Shift">1st Shift</option>
                                        <option value="2nd Shift">2nd Shift</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Dept.:</label>
                                    <select name ="dept" id="loginrole" class="form-control" required>
                                        <option value="ME">ME</option>
                                        <option value="CE">CE</option>
                                        <option value="CO">CO</option>
                                        <option value="EX">EX</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                <label>Co-Ordinator:</label>
                                <select name="cordinator" id="loginrole" class="form-control" required> 
                                <?php
                    $sql = "select * from validation where type='coordinator'"; 
                                $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo '<option value="'.$row['username'].'">'.$row['username'].'</option>';
                                }
                                
                                ?>

                                </select>

                                <div class="form-group">
                                <label>GFM:</label>
                                <select name="gfm" id="loginrole" class="form-control" required> 
                                <?php
                    $sql = "select * from validation where type='gfm'"; 
                                $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo '<option value="'.$row['username'].'">'.$row['username'].'</option>';
                                }
                                
                                ?>

                                </select>                                  

                                <div class="form-group">
                                    <label>Password:</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>

                                <div class="form-group">
                                    <label>Confirm Password:</label>
                                    <input type="password" name="con_password" class="form-control" placeholder="Confirm Password" required>
                                </div> 
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>

                                <div class="register-link m-t-15 text-center">
                                    <p>Registered Already?<a href="index.html"> Click Here..</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
function pass() {
    var password= document.forms["myForm"].password.value.length;
    var con_password = document.forms["myForm"].con_password.value.length;
    if (password != con_password) {
        alert("Password and Confirm Password don't match");
        return window.location="register.php";
    }
    return true;
}
</script>
</body>

</html>