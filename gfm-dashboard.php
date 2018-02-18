<?php
    session_start();
    if(!$_SESSION)
    {
        header("Location:index.php");
    }
    require_once('connection.php');
    $gfm = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>

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
                    <div class="logo"><a href="#"><!-- <img src="assets/images/logo.png" alt="" /> --><span>WELCOME</span></a></div>
                    <ul>
                        <li class="label">Main</li>
                        <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard</a>


                        </li>
                        <li><a href="index.html"><i class="ti-close"></i>LOGOUT</a></li>    

                        
                </div>

                
            </div>
            
        </div>

        <!-- /# sidebar -->


        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
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
              
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Student Details </h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Name</th>
                                                    <th>Enrollment No</th>
                                                    <th>Attendance 1</th>
                                                    <th>Attendance 2</th>
                                                    <th>Attendance 3</th>
                                                    <th>Attendance 4</th>
                                                    <th>PTT 1</th>
                                                    <th>PTT 2</th>
                                                    <th>PST</th>
                                                    <th>MSBTE RESULT</th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                        $sql = "select * from student where gfm='$gfm'";
                                                        $results = mysqli_query($con,$sql) or die(mysqli_error($con));
                                                        while($row = mysqli_fetch_array($results))
                                                        {
                                                            echo '<tr>
                                                            <td><a href = "profile.php?enroll_no='.$row['enroll_no'].'">'.$row['name'].'</a></td>
                                                            <td>'.$row['enroll_no'].'</td>
                                                            <td>'.$row['attend1'].'</td>
                                                            <td>'.$row['attend2'].'</td>
                                                            <td>'.$row['attend3'].'</td>
                                                            <td>'.$row['attend4'].'</td>
                                                            <td>'.$row['ptt1'].'</td>
                                                            <td>'.$row['ptt2'].'</td>
                                                            <td>'.$row['pst'].'</td>
                                                            <td>'.$row['m_result'].'</td>
                                                        </tr>';
                                                        }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © GFM
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>






    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->
    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->





</body>

</html>