<?php
  session_start();
include 'tconslocal.php';
$ucont=mysqli_real_escape_string($con,$_GET['ucont']);
$ucontcat=mysqli_real_escape_string($con,$_GET['ucontcat']);

if ($ucont=="" or $ucontcat=="") 
{
    echo "Fill All Fields";
    return;
}

$sql="SELECT * from coursez where coursez='$ucontcat' AND catz='$ucont'";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{
    $con->autocommit(FALSE);

    $stmt = mysqli_prepare($con,"DELETE FROM coursez WHERE coursez='$ucontcat' AND catz='$ucont'");
    mysqli_stmt_execute($stmt);
    $check = mysqli_stmt_affected_rows($stmt);
    if($check>0)
    {
    
    }
    else
    {
        /* Rollback */
$con->rollback();
  echo "Error Please Try Again. Or Contact Developer.1.";
  exit;
    }


   $stmts = mysqli_prepare($con,"DELETE FROM teachcourse WHERE coursez='$ucontcat' AND catz='$ucont'");
    mysqli_stmt_execute($stmts);
    $checks = mysqli_stmt_affected_rows($stmts);
   if($checks>0)
    {
    
    }
    else
    {
        /* Rollback */
$con->rollback();
  echo "Error Please Try Again. Or Contact Developer.2.";
  exit;
    }




 $con->commit();
        echo "Course Deleted Successfully.";
}
else 
{

echo "Course Not Found In System";
}



?>
