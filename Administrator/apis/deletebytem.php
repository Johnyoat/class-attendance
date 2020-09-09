<?php
include 'tconslocal.php';
$msg = 'Teacher';
$ucont=mysqli_real_escape_string($con,$_GET['ucont']);
$teachemz="";
if ($ucont=="") 
{
	echo "No Id Specified.";
	return;
}

$sql="SELECT * from tableteachers where stafidz='$ucont'";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{
 while($row = $result->fetch_assoc()) 
    {
$teachemz=$row["emailz"];
    }


 $con->autocommit(FALSE);

    $stmt = mysqli_prepare($con,"DELETE FROM tableteachers WHERE stafidz='$ucont'");
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


     $stmts = mysqli_prepare($con,"DELETE FROM teachcourse WHERE emz='$teachemz'");
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

echo "DELETED SUCCESSFULLY..PLEASE RELOAD RECORDS";
   
}
else 
{

echo "Not Found In System";
return;
}







?>