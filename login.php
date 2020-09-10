<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CLASS ATTENDANCE | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bg.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="myscripts/snack.css">
<script src="myscripts/logproc.js"></script>
</head>

<body>

<div class="row"   style="background-image: url('bh.jpg');
         background-repeat: repeat;
         width: 100%;
         height: 100%;" class="img-fluid">

 <div class="col-md-2" ></div>

 <!-- /.login-logo -->
 <br>
<center>
<h1 style="color:white">MY CLASS ATTENDANCE</h1>
</center>
  <br>
    <br>
        <p>&nbsp</p>
          <p></p>
            <p></p>
            <p>&nbsp</p>
            <p></p>
            <p></p>
            <p>&nbsp</p>
            <p></p>
            <p></p>
             <br>
            <br>
            <p>&nbsp</p>
            <p></p>
            <p></p>

            <p>&nbsp</p>

            <p></p>
            <p></p>
            <p>&nbsp</p>
            <p></p>
            <p></p>
<center>
<div class="col-md-4" style=" position: relative;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);"  >
  <div class="login-box-body" style="background: rgba(255,255,255,0.5);">
  <div class="login-logo">
    <!--<a href=""><img src="images/loglog.gif" style="width:90%;height:150px;"></a>-->
  </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email" id="fnom" name="fnom" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
<div class="box box-danger" id="snackbar" hidden>
            <div class="box-header">
              <h3 class="box-title">Loading.....</h3>
            </div>
            <div class="box-body">
             PLEASE WAIT...
            </div>
            <!-- /.box-body -->
            <!-- Loading (remove the following to stop the loading)-->
            <div class="overlay">
              <i class="fa fa-refresh fa-spin"></i>
            </div>
            <!-- end loading -->
          </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password"  id="pword" name="pword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
       <div class="social-auth-links text-center">
   <div class="row">
    <div class="col-md-2"></div>
<div class="col-md-8">
      <a style="  border-radius: 25px;" class="btn btn-primary btn-block btn-flat" onclick="log1()"> <center><font size="6">Login</font></center></a>
       
      </div>
 <div class="col-md-2"></div>
      </div>
      <p>&nbsp</p>
<p>&nbsp</p>
    </div>
</div>

 <div class="col-md-2"></div>
      </div>
    <!-- /.social-auth-links -->
  </div>
</center>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</center>
</div>
</center>

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%'
    });
  });
</script>
</body>
</html>