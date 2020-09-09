<?php
  session_start();
  session_unset(); 
include 'tconslocal.php';

$ucont=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucont']));
$uepass=htmlspecialchars(mysqli_real_escape_string($con,$_GET['uepass']));

$mysql_query="SELECT * FROM tableteachers  where emailz= '$ucont' AND pwdz= '$uepass'";
$result = mysqli_query($con,$mysql_query);

$count= mysqli_num_rows($result);
// If result matched username and password, table row must be 1 row
if($count>0)
{ 
while($row = $result->fetch_assoc()) 
 {
// Register details and redirect to homepage
$_SESSION['SESS_clatuserID'] = $row['stafidz'];
$_SESSION['SESS_unomz'] = $row['nomz'];
$_SESSION['SESS_cONT'] = $row['contactz'];
$_SESSION['SESS_emz'] = $row['emailz'];
$_SESSION['SESS_priviledgz'] = $row['statz'];
$_SESSION['SESS_curpwdz'] = $row['pwdz'];

session_write_close();
	}

	echo $_SESSION['SESS_priviledgz'];
	
	  exit;
	}
else 
{

$mysql_query="SELECT * FROM studz where emailz= '$ucont' AND pwdz= '$uepass'";
$result = mysqli_query($con,$mysql_query);

$count= mysqli_num_rows($result);
// If result matched username and password, table row must be 1 row
if($count>0)
{
while($row = $result->fetch_assoc()) 
 {
// Register details and redirect to homepage
$_SESSION['SESS_clatuserID'] = $row['studidz'];
$_SESSION['SESS_unomz'] = $row['studz'];
$_SESSION['SESS_cONT'] = $row['phonz'];
$_SESSION['SESS_emz'] = $row['emailz'];
$_SESSION['SESS_priviledgz'] = $row['statz'];
$_SESSION['SESS_curpwdz'] = $row['pwdz'];

session_write_close();
	}
	 echo $_SESSION['SESS_priviledgz'];
	
	  exit;
	}


else 
{

 echo "User Not Found";
	  exit;
}

}


?>
