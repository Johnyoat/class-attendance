<?php
   session_start();
include 'tconslocal.php';
$teachidz=mysqli_real_escape_string($con,$_POST['teachidz']);
$teachz=mysqli_real_escape_string($con,$_POST['teachz']);
$emz=mysqli_real_escape_string($con,$_POST['emz']);
$phonz=mysqli_real_escape_string($con,$_POST['phonz']);
$pwdz=mysqli_real_escape_string($con,$_POST['pwdz']);
$priviz=mysqli_real_escape_string($con,$_POST['priviz']);


if ($teachidz=="" or $teachz=="" or $emz=="" or $phonz=="" or $pwdz=="" or $priviz=="" ) 
{
    echo "Fill All Fields";
    return;
}
    $con->autocommit(FALSE);
$sql="SELECT * from tableteachers where emailz='$emz' or stafidz='$teachidz'";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{
    echo '<a href="../home.php">User With This Email Or Id Already Specified In System..CLICK TO GO BACK</a>'; 
}
else 
{


    $stmt = mysqli_prepare($con,"insert into tableteachers (stafidz,nomz,contactz,statz,emailz,pwdz) values(?,?,?,?,?,?)");
     mysqli_stmt_bind_param($stmt, "ssssss",$teachidz,$teachz,$phonz,$priviz,$emz,$pwdz);
    mysqli_stmt_execute($stmt);
    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1)
    {
    	$con->commit();
        echo '<a href="../home.php">Added Successfully..CLICK TO GO BACK</a>'; 
     
    }
    else
    {
    	/* Rollback */
$con->rollback();
echo '<a href="../home.php">Error Please Try Again. Or Contact Developer...CLICK TO GO BACK</a>'; 
    
    }



}



?>
