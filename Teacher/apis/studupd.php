<?php
include 'tconslocal.php';
$msg = 'Teacher';
$ucont=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucont']));
$ucontz=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucontz']));
$ucontcat=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucontcat']));

$studlev="";
$studper="";
if ($ucont=="" or $ucontz=="" or $ucontcat=="") 
{
	echo "All Information Must Be Valid.";
	return;
}

$sqld="SELECT * from studz WHERE studidz='$ucont'";
$resultd=mysqli_query($con,$sqld);
if($resultd->num_rows>0)
{
    while($rowd = $resultd->fetch_assoc()) 
    {
     $studlev=$rowd["studlev"];
$studper=$rowd["studper"];

    }
  }

if ($ucontz==$studlev AND $ucontcat==$studper) 
{
	
}
else
{
	$sql="UPDATE studz SET studlev='$ucontz',studper='$ucontcat' WHERE studidz='$ucont'";
$result=mysqli_query($con,$sql);

$sqls="DELETE FROM classattz WHERE studidz='$ucont'";
$results=mysqli_query($con,$sqls);


echo "UPDATED SUCCESSFULLY..PLEASE RELOAD RECORDS";
}


?>