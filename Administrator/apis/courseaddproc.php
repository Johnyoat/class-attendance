<?php
  session_start();
include 'tconslocal.php';

$ucont=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucont']));
$uconta=htmlspecialchars(mysqli_real_escape_string($con,$_GET['uconta']));

 $studlev=htmlspecialchars(mysqli_real_escape_string($con,$_GET['studlev']));
    $studper=htmlspecialchars(mysqli_real_escape_string($con,$_GET['studper']));


if ($ucont=="" or $uconta==""  or $studlev==""  or $studper=="") 
{
    echo "Fill All Fields";
    return;
}

$convertedcourse=str_replace("  ","++",$ucont);


$sql="SELECT * from coursez where coursez='$convertedcourse' AND catz='$uconta' AND studlev='$studlev' AND studper='$studper'";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{
echo "Course Already Specified For Programme In System";
}
else 
{
	$con->autocommit(FALSE);

    $stmt = mysqli_prepare($con,"insert into coursez (coursez,catz,studlev,studper) values(?,?,?,?)");
    mysqli_stmt_bind_param($stmt, "ssss",$convertedcourse,$uconta,$studlev,$studper);
    mysqli_stmt_execute($stmt);
    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
    	$con->commit();
        echo "Course Added Successfully.";
    }
    else
    {
    	/* Rollback */
$con->rollback();
       echo "Error Please Try Again. Or Contact Developer.";
    }



}



?>
