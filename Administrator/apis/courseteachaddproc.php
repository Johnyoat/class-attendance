<?php
  session_start();
include 'tconslocal.php';

$ucontcat=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucontcat']));
$ucont=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucont']));
$ucontz=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucontz']));

if ($ucont=="" or $ucontcat=="" or $ucontz=="") 
{
    echo "Fill All Fields";
    return;
}

$sql="SELECT * from teachcourse where emz='$ucontcat' AND catz='$ucontz' AND coursez=REPLACE('$ucont',  '  ', '++')";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{
echo "Course Already Specified For Lecturer In System";
}
else 
{
	$con->autocommit(FALSE);

    $stmt = mysqli_prepare($con,"insert into teachcourse (emz,catz,coursez) values(?,?,REPLACE('$ucont',  '  ', '++'))");
    mysqli_stmt_bind_param($stmt, "ss",$ucontcat,$ucontz);
    mysqli_stmt_execute($stmt);
    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
    	$con->commit();
        echo "Course Specified For Lecturer Successfully.";
    }
    else
    {
    	/* Rollback */
$con->rollback();
       echo "Error Please Try Again. Or Contact Developer.";
    }



}



?>
