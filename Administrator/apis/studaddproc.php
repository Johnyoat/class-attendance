<?php
   session_start();
include 'tconslocal.php';
 $studidz=mysqli_real_escape_string($con,$_POST['studidz']);
  $studz=mysqli_real_escape_string($con,$_POST['studz']);
  $phonz=mysqli_real_escape_string($con,$_POST['phonz']);
     $catz=mysqli_real_escape_string($con,$_POST['catz']);

      $ygrup=mysqli_real_escape_string($con,$_POST['ygrup']);
  $studlev=mysqli_real_escape_string($con,$_POST['studlev']);
     $studper=mysqli_real_escape_string($con,$_POST['studper']);

 $emailz=mysqli_real_escape_string($con,$_POST['emailz']);



if ($studidz=="" or $studz=="" or $phonz=="" or $catz=="" or $ygrup==""or $studlev=="" or $studper=="" or $emailz=="") 
{
  echo '<a href="../home.php">Fill All Fields..CLICK TO GO BACK</a><br>'; 
    return;
}

if (preg_match("/^[0-9-]+$/", $ygrup)) 
{
    # code...
}
else
{
    echo '<a href="../home.php">Year Group Must Follow specified Format..CLICK TO GO BACK</a><br>'; 
    return;
}

if (preg_match("/^[a-zA-Z ]+$/", $studz)) 
{
    # code...
}
else
{
    echo '<a href="../home.php">Names Must Consist Of Only Alphabets..CLICK TO GO BACK</a><br>'; 
    return;
}

if (preg_match("/^[a-zA-Z0-9]+$/", $studidz)) 
{
    # code...
}
else
{
    echo '<a href="../home.php">Student Id Must Consist Of Only Numbers And Alphabets..CLICK TO GO BACK</a><br>'; 
    return;
}


if (preg_match("/^[0-9]+$/", $phonz)) 
{
    # code...
}
else
{
    echo '<a href="../home.php">Phone Numbers Should Be Only Numbers..CLICK TO GO BACK</a><br>'; 
    return;
}


    $con->autocommit(FALSE);
$sql="SELECT * from studz where studidz='$studidz'";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{
    echo '<a href="../home.php">Student With This Student Id Already Specified In System..CLICK TO GO BACK</a>'; 
}
else 
{

    $stmt = mysqli_prepare($con,"insert into studz (studidz,studz,phonz,catz,ygrup,studlev,studper,emailz) values(?,?,?,?,?,?,?,?)");
     mysqli_stmt_bind_param($stmt, "ssssssss",$studidz,$studz,$phonz,$catz,$ygrup,$studlev,$studper,$emailz);
    mysqli_stmt_execute($stmt);
    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1)
    {
    	$con->commit();
        echo '<a href="../home.php">Student Added Successfully..CLICK TO GO BACK</a>'; 
     
    }
    else
    {
    	/* Rollback */
$con->rollback();
echo '<a href="../home.php">Error Please Try Again. Or Contact Developer...CLICK TO GO BACK</a>'; 
    
    }



}



?>
