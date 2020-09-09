<?php
  session_start();
include 'tconslocal.php';
$ucont=mysqli_real_escape_string($con,$_GET['ucont']);
$statz="Deleted Successfully";
$statz2="Error Please Try Again. Or Contact Developer.";
$mess="";
if ($ucont=="") 
{
    echo "No input made.";
    return;
}

$con->autocommit(FALSE);
 
$sql="SELECT * from progz where catz='$ucont'";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{



   $con->autocommit(FALSE);

    $stmt = mysqli_prepare($con,"DELETE FROM teachcourse WHERE catz='$ucont'");
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


     $stmts = mysqli_prepare($con,"DELETE FROM coursez WHERE catz='$ucont'");
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


  $con->autocommit(FALSE);

    $stmte = mysqli_prepare($con,"DELETE FROM progz WHERE catz='$ucont'");
    mysqli_stmt_execute($stmte);
    $checke = mysqli_stmt_affected_rows($stmte);
    if($checke>0)
    {
    
    }
    else
    {
        /* Rollback */
$con->rollback();
  echo "Error Please Try Again. Or Contact Developer.3.";
  exit;
    }

    $con->commit();
echo $statz;
   
}
else 
{

echo "Category Not Found In System";
return;
}






?>
