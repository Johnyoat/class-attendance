<?php
$f = "visit.php";
if(!file_exists($f)){
	touch($f);
	$handle =  fopen($f, "w" ) ;
	fwrite($handle,0) ;
	fclose ($handle);
}
 
include('libs/phpqrcode/qrlib.php'); 

function getUsernameFromEmail($email) {
	$find = '@';
	$pos = strpos($email, $find);
	$username = substr($email, 0, $pos);
	return $username;
}

if(isset($_POST['submit']) ) {
	$tempDir = 'temp/'; 
	$email = $_POST['mail'];
	$subject =  $_POST['subject'];
	$filename = getUsernameFromEmail($email);
	$body =  $_POST['msg'];
	$codeContents = 'mailto:'.$email.'?subject='.urlencode($subject).'&body='.urlencode($body); 
	QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
}
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>

	<link rel="icon" href="img/bg" type="image/jpg">
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="libs/style.css">
	<script src="libs/navbarclock.js"></script>
	</head>
	<body onload="startTime()">
		<nav class="navbar-inverse"style="background: midnightblue; color: white;" role="navigation">
			<a href=#>
				<img src="img/bg.jpg" class="hederimg" style="height: 60%;">
			</a>
			<div id="clockdate">
				<div class="clockdate-wrapper">
					<div id="clock"></div>
					<div id="date"><?php echo date('l, F j, Y'); ?></div>
				</div>
			</div>
			
		</nav>
		<div class="myoutput" style="background: midnightblue; color: white">
			<h3><strong>Quick Response (QR) Code Generator</strong></h3>
			<div class="input-field">
				<h3>Please Fill-out All Fields</h3>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="mail" style="width:20em;" placeholder="Enter your Email" value="<?php echo @$email; ?>" required />
					</div>
					<div class="form-group">
						<label>Subject</label>
						<input type="text" class="form-control" name="subject" style="width:20em;" placeholder="Enter Course" value="<?php echo @$subject; ?>" required pattern="[a-zA-Z .]+" />
					</div>
					<div class="form-group">
						<label style=>Date And Staus</label>
						<input type="text" class="form-control" name="msg" style="width:20em;" value="<?php echo @$body; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter dd-mm-yy and Status"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />
					</div>
				</form>
				<div class="form-group">
						<a class="btn btn-warning submitBtn" style="width:150px; margin:5px 0;" href="../home.php "> <---Back</a>
					</div>
			</div>
			<?php
			if(!isset($filename)){
				$filename = "author";
			}
			?>
			<div class="qr-field">
				<h2 style="text-align:center">QR Code Result: </h2>
				<center>
					<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
							<?php echo '<img src="temp/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
					</div>
					<a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
				</center>
			</div>
			<div class = "dllink" style="text-align:center;margin:-100px 0px 50px 0px;">
				<br>
				<p></p>
			</div>
		</div>
	</body>
	
</html>