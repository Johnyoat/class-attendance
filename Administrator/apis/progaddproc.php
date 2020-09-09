<?php
  session_start();
include 'tconslocal.php';
$ucont=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucont']));
if ($ucont=="") 
{
	echo "No input made.";
	return;
}

$sql="SELECT * from progz where catz='$ucont'";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{
echo "Programme Already Specified In System";
}
else 
{
	$con->autocommit(FALSE);

    $stmt = mysqli_prepare($con,"insert into progz (catz) values(?)");
    mysqli_stmt_bind_param($stmt, "s",$ucont);
    mysqli_stmt_execute($stmt);
    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
    	$con->commit();
        echo "Programme Added Successfully.";
    }
    else
    {
    	/* Rollback */
$con->rollback();
       echo "Error Please Try Again. Or Contact Developer.";
    }



}



?>
