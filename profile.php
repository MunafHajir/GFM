<?php
  session_start();
  if($_SESSION)
  {
    require_once('connection.php');
    $enroll_no = $_GET['enroll_no'];
    $sql = "select * from student where enroll_no='$enroll_no'";
    $results = mysqli_query($con,$sql) or die(mysqli_error($con));
    $row = mysqli_fetch_array($results);
    
  }
  else
  {
    header("Location:index.php");
  }

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Profile</title>

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
          <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Welcome</span></a></div>
          <ul>
            <li class="label">Main</li>
            <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard </a>
              <ul>
              
                
                
              </ul>
            </li>

            
            <li><a><i class="ti-close"></i> Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /# sidebar -->


   

    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
              <div class="page-header">
                <div class="page-title">
                  <h1>Hello, <span>Welcome <?= $row['name'] ?></span></h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">App-Profile</li>
                  </ol>
                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="user-profile">
                      <div class="row">
                        <div class="col-lg-4">
                         
                        <div class="col-lg-12">
                          <form action="updateStudentProcess.php" method="post">
                          <div class="user-profile-name"><?php echo $row['name'];?></div>
                          <input type="hidden" name="name" value="<?php echo $row['name'];?>">
                          <!-- <div class="user-Location"><i class="ti-menu"></i>Enrollment Number</div> -->
                          <div class="user-job-title"><?php echo $row['enroll_no'];?></div>                 
                          <input type="hidden" name="enroll_no" value="<?php echo $row['enroll_no'];?>">
                          <div class="custom-tab user-profile-tab">
                            <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab"></a></li>
                            </ul>
                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="1">
                                <div class="contact-information">
                                  <h4>Class Coordinator: <span><?php echo $row['class_coordinator'];?></span></h4>
                 <input type="hidden" name="class_coordinator" value="<?php echo $row['class_coordinator'];?>">
                                  <h4>GFM: <span><?php echo $row['gfm'];?></span></h4>
                 <input type="hidden" name="gfm" value="<?php echo $row['gfm'];?>">

                                  <div class="phone-content">
                                    <span class="contact-title">Student Details::</span>
                                    <br>
                                    <br>
                                  </div>
                                   <span class="contact-title">Attendance::</span>
                                  <div class="address-content">
                                    <span class="contact-title">january</span>
                                    <input type="text" name="attend1" value="<?php echo $row['attend1'];?>">
                                  </div>
                                  <div class="address-content">
                                    <span class="contact-title">february:</span>
                                    <input type="text" name="attend2" value="<?php echo $row['attend2'];?>">
                                  </div>
                                  <div class="address-content">
                                    <span class="contact-title">march:</span>
                                    <input type="text" name="attend3" value="<?php echo $row['attend3'];?>">
                                  </div>
                                  <div class="address-content">
                                    <span class="contact-title">april:</span>
                                    <input type="text" name="attend4" value="<?php echo $row['attend4'];?>">
                                  </div>
                                  <br>
                                  <br>
                                  <!-- <div class="address-content">
                                    <span class="contact-title">Overall:</span>
                                    <input type="text" name="overall" value="<?php echo $row['overall'];?>">
                                  </div> -->
                                   <span class="contact-title">PTT1 marks::</span>
                                  <div class="address-content">
                                    <br>
                                    <span class="contact-title">AMI:</span>
                                    <input type="text" name="ptt1" value="<?php echo $row['ptt1'];?>">
                                  </div>
                                  <div class="address-content">
                                    <span class="contact-title">STE:</span>
                                    <input type="text" name="ptt2" value="<?php echo $row['ptt2'];?>">
                                  </div>
                                  <div class="address-content">
                                    <span class="contact-title">AJP:</span>
                                    <input type="text" name="pst" value="<?php echo $row['pst'];?>">
                                  </div>
                                  <div class="address-content">
                                    <span class="contact-title">MAN:</span>
                                    <input type="text" name="pst" value="<?php echo $row['pst'];?>">
                                  </div>
                                  <br>
                                  <br>
                                  <span class="contact-title">PTT2 marks::</span>
                                  <div class="address-content">
                                    <br>
                                    <span class="contact-title">AMI:</span>
                                    <input type="text" name="ptt1" value="<?php echo $row['ptt1'];?>">
                                  </div>
                                  <div class="address-content">
                                    <span class="contact-title">STE:</span>
                                    <input type="text" name="ptt2" value="<?php echo $row['ptt2'];?>">
                                  </div>
                                  <div class="address-content">
                                    <span class="contact-title">AJP:</span>
                                    <input type="text" name="pst" value="<?php echo $row['pst'];?>">
                                  </div>
                                  <div class="address-content">
                                    <span class="contact-title">MAN:</span>
                                    <input type="text" name="pst" value="<?php echo $row['pst'];?>">
                                  </div>
                                  <br>
                                  <br>
                                  <span class="contact-title">GFM Meetings::</span>
                                  <div class="address-content">
                                    <br>
                                    <br>
                                    <div class="address-content">
                                    <span class="contact-title">Date of meeting:</span>
                                    <input type="text" name="pst" value="<?php echo $row['pst'];?>">
                                  </div>
                                  <div class="address-content">
                                    <span class="contact-title">Agenda of meeting:</span>
                                    <input type="text" name="pst" value="<?php echo $row['pst'];?>">
                                  </div>
                                    <div class="address-content">
                                    <span class="contact-title">Minutes of meeting:</span>
                                    <input type="text" name="pst" value="<?php echo $row['pst'];?>">
                                  </div>

                                  
                                  
                                  <div class="user-send-message">
<!--                                     <button class="btn btn-primary btn-addon" type="button"><i class="ti-share-alt"></i>Submit</button> -->
                                <input type="submit"  class="btn btn-primary" name=""></input>
                                </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
              <div class="col-lg-12">
                <div class="footer">
                  <p>2018 © Admin Board.</p>
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
    <script src="assets/js/lib/bootstrap.min.js">
      

    </script>
    <!-- bootstrap -->


    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->





  </body>

</html>
