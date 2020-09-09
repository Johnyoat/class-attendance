<?php
//Initialize session
SESSION_START();
// Check, if user is already login, then jump to secured page
if(!isset($_SESSION['SESS_clatuserID']) And !($_SESSION['SESS_priviledgz']=="Lecturer"))
 //redirect to login page
 {
 header("location: ../index.php");

}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CLASS ATTENDANCE | HOME</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/skin-green-light.min.css">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="../bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.css">
<script src="../bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.js"></script>

<link rel="stylesheet" href="snack.css">
<script src="logproc.js"></script>




</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper" >

  <header class="main-header"  style="background:black;">
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background:black;">
      <!-- Sidebar toggle button-->
      <a href="#" data-toggle="offcanvas"><font size="6px"><i class="fa fa-bars"></i> <span>Menu</font> </a>

    </nav>
  </header>

  <!-- =============================================== -->

   <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar" style="background:black;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <p>&nbsp</p>
        <li ><a onclick="" href=""><i class="fa fa-home"></i> <span><font color="white">Home</font></span></a></li>

 

        <li class="treeview">
          <a href="#">
            <i class="fa fa-briefcase"></i> <span><font color="white">Attendance</font></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#" onclick="callteacheadd();" data-toggle="offcanvas"><i class="fa fa-plus-circle"></i>Take Attendance</a></li>
            <li><a href="#" onclick="callteachview();" data-toggle="offcanvas"><i class="fa fa-minus-circle"></i>View Attendance</a></li>
          </ul>
        </li>
        <li ><a onclick="log0();" href="#"><i class="fa fa-sign-out" data-toggle="offcanvas"></i> <span><font color="red">Logout</font></span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="contholder" name="contholder" style="background:#fcfcfc;">
  
    <!-- Main content -->
    <section class="content" style="background:##fcfcfc;">

  <div class="row"  id="fillme" name="fillme">
      <p>&nbsp</p>
  <div class="col-md-1"></div>

<div class="col-md-10">
          <!-- Widget: user widget style 1 -->
          <div  class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header">



             <center> 
             <h1> <font color="black">WELCOME,</font></h1>

              <h2 class="widget-user-username"> <font color="black"><?php
                echo $_SESSION['SESS_unomz'];?></font></h2>
                <P>&nbsp</P>
             
                
               </center>
            
            </div>
          <p>&nbsp</p>
            <div class="box-footer">
              <div class="row">
               
             <div class="description-block">
                   <h5 class="widget-user-desc"><?php
                echo $_SESSION['SESS_cONT'];?></h5>
                   <p>&nbsp</p>
                
                <h5 class="widget-user-desc"><?php
                echo $_SESSION['SESS_emz'];?></h5>
                   <p>&nbsp</p>
                <h5 class="widget-user-desc"><font color="black" ><?php
                echo $_SESSION['SESS_priviledgz'];?></font></h5>

                  </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <div class="col-md-1"></div>
</div>

      </div>
    

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 

 
</div>
<!-- ./wrapper -->




<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>




<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->


<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
</body>
</html>
