<?php

			session_start();
            require_once('connection.php');
            $name =$_SESSION['user']; 
            $sql = "select * from student where enroll_no='$name'";
            $results = mysqli_query($con,$sql) or die(mysqli_error($con));
            $row = mysqli_fetch_array($results);
            // echo "<pre>";
            // var_dump($row);
            // echo "</pre>";
            
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student</title>

    <style type="text/css">
        #chart-container {
            width: 640px;
            /* height: auto; */
            float: left;

        }
        .container{
        	background: rgba(19,35,47,0.9);
        	padding: 40px;
        	max-width: 600px;
        	margin: 40px auto;
            border-spacing: 15px;
            padding-left: 20px;
            box-sizing: border-box;
            width: 100%;
            text-align: justify-all;
        	border: 1px solid red;

        }
    </style>

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
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>WELCOME</span></a></div>
                    <ul>
                        <li class="label">Main</li>
                        <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard</a>
                            <!-- <ul>
                                <li><a href="index.html">Dashboard 1</a></li>
                                <li><a href="index1.html">Dashboard 2</a></li>
                                
                                
                                
                            </ul> -->
                        </li>

                        <li><a href="index.html"><i class="ti-close"></i> Logout</a></li>

                        
                </div>
            </div>
        </div>
        <!-- /# sidebar -->


        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>





  <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome</span><?php echo $name;?> </h1>
                                <div class="container">
   
                                     <label for="Student Name"><b>Student Name::</b></label>
                                     <br>
                                         <input type="text" placeholder="" name="uname" required="" readonly="" value="<?php echo $row['name'];?>">
                                         <br>
                                         <br>
                                    <!-- <label for="Rollno"><b>Roll no::</b></label></tr>
                                    <br>
                                    	 <input type="text" placeholder="" name="uroll" required="" readonly="">
                                         <br>
                                         <br> -->
                                
                                    <label for="Enrollment"><b>Enrollment no::</b></label>
                                    <br>
                                    	 <input type="text" placeholder="" name="uenroll" required="" readonly="" value="<?php echo $row['enroll_no'];?>">
                                    	 <br>
                                         <br>
                                    <label for="Department"><b>Department::</b></label>
                                    <br>
                                    	<input type="text" placeholder="" name="udepartment" required="" readonly="" value="<?php echo $row['dept'];?>">
                                    	<br>
                                        <br>
                                    <label for="Course"><b>Course::</b></label>
                                    <br>
                                        <input type="text" placeholder="" name="ucourse" required="" readonly="" value="<?php echo $row['dept'];?>">
                                        <br>
                                        <br>
                                    <label for="Residential"><b>Residential Address::</b></label>
                                    <br>
                                           	<textarea type="text" placeholder="" rows="4" cols="50" readonly=""></textarea>
                                            <br>
                                           	<br>
                                    <label for="Contact"><b>Contact::</b></label>
                                    <br>
                                        <input type="text" placeholder="" name="ucontact" required="" readonly="">
                                        <br>
                                        <br>
                                    <label for="Email-ID"><b>Email-ID::</b></label>
                                    <br>
                                        <input type="text" placeholder="" name="uemail" required="" readonly="">
                                        <br>
                                        <br>
                                    
                            </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id = "chart-container">
                        <canvas id = "mycanvas">


                        </canvas>

                    </div>
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Login</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                            <br>
                                    <div class="container">
                                        <br>
                                     <label for="PTT1"><b>PTT1 marks::</b></label>
                                     <label for="ami"><b>AMI::</b></label>
                                     <br>
                                         <input type="text" placeholder="" name="uami" required="" readonly="">
                                         <br>
                                        
                                    <label for="ste"><b>STE::</b></label></tr>
                                    <br>
                                         <input type="text" placeholder="" name="uste" required="" readonly="">
                                         <br>
                                         
                                
                                    <label for="ajp"><b>AJP::</b></label>
                                    <br>
                                         <input type="text" placeholder="" name="uajp" required="" readonly="">
                                         <br>
                                         
                                    <label for="man"><b>MAN::</b></label>
                                    <br>
                                        <input type="text" placeholder="" name="uman" required="" readonly="">
                                        <br>

                                        
                                    <label for="percentage"><b>PERCENTAGE::</b></label>
                                    <br>
                                        <input type="text" placeholder="" name="upercent" required="" readonly="">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                     <label for="PTT2"><b>PTT2 marks::</b></label>
                                     <br>
                                     <label for="ami2"><b>AMI::</b></label>
                                     <br>
                                         <input type="text" placeholder="" name="uami2" required="" readonly="">
                                         <br>
                                        
                                    <label for="ste2"><b>STE::</b></label></tr>
                                    <br>
                                         <input type="text" placeholder="" name="uste2" required="" readonly="">
                                         <br>
                                         
                                
                                    <label for="ajp2"><b>AJP::</b></label>
                                    <br>
                                         <input type="text" placeholder="" name="uajp2" required="" readonly="">
                                         <br>
                                         
                                    <label for="man2"><b>MAN::</b></label>
                                    <br>
                                        <input type="text" placeholder="" name="uman2" required="" readonly="">
                                        <br>

                                        
                                    <label for="percentage2"><b>PERCENTAGE::</b></label>
                                    <br>
                                        <input type="text" placeholder="" name="upercent2" required="" readonly="">
                                        <br>
                                   
                                    
                            </div>
                            
                            
                    </div> 
                     <div class="container">
                                     <label for="Gfm"><b>GFM MEETING::</b></label>
                                     <br>
                                     <label for="Dateofmeeting"><b>Date of Meeting::</b></label>
                                     <br>
                                         <input type="text" placeholder="" name="udate" required="" readonly="">
                                         <br>
                                         <br>
                                         <label for="agenda"><b>Agenda::</b></label>
                                     <br>
                                         <input type="text" placeholder="" name="uagenda" required="" readonly="">
                                         <br>
                                         <br>
                                         <label for="Minutes"><b>Minutes of Meeting::</b></label>
                                     <br>
                                         <input type="text" placeholder="" name="uminutes" required="" readonly="">
                                         <br>
                                         <br>
                                    
                              
                                    
                            </div>

                    
                        </div>

                        
                    
                </div>
               
                
            </div>
        </div>
    </div> 







    
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>

    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->
<!--     <script src="assets/js/scripts.js"></script> -->
    <!-- scripit init-->
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
     <!--  Chart js -->
    <!--  Chart js -->

    <!-- <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
     <script src="assets/js/lib/chart-js/chartjs-init.js"></script>  -->
    <!-- // Chart js -->
    <!-- // Chart js -->
   
</body>

</html>