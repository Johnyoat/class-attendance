<?php 
 session_start();
include 'tconslocal.php';

$catz=htmlspecialchars(mysqli_real_escape_string($con,$_GET['catz']));
  $levelz=htmlspecialchars(mysqli_real_escape_string($con,$_GET['levelz']));
  $periodz=htmlspecialchars(mysqli_real_escape_string($con,$_GET['periodz']));
  $coursez=htmlspecialchars(mysqli_real_escape_string($con,$_GET['coursez']));
  $dateofatz=htmlspecialchars(mysqli_real_escape_string($con,$_GET['dateofatz']));
$studidz=htmlspecialchars(mysqli_real_escape_string($con,$_GET['studidz']));
$studz=htmlspecialchars(mysqli_real_escape_string($con,$_GET['studz']));
$studattz=htmlspecialchars(mysqli_real_escape_string($con,$_GET['studattz']));

if ($studidz=="" or $studz=="" or $catz=="" or $levelz=="" or $periodz=="" or $coursez=="" or $dateofatz=="" or $studattz=="") 
{
    echo "Required Information Not Complete";
    return;
}



    $con->autocommit(FALSE);
$sql="SELECT * from classattz where studidz='$studidz' AND levelz='$levelz' AND periodz='$periodz' AND coursez=REPLACE('$coursez', '  ', '++') AND dateofatz='$dateofatz'";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{
  // output data of each row
    while($rows = $result->fetch_assoc()) 
    {  
      $idz=$rows['idz'];
      $studidz=$rows['studidz'];
      $studz=$rows['studz'];
      $dateofatz=$rows['dateofatz'];
      $levelz=$rows['levelz'];
      $periodz=$rows['periodz'];
      $coursez=$rows['coursez'];
      $catz=$rows['catz'];

 $stmte = mysqli_prepare($con,"DELETE FROM classattz WHERE idz='$idz'");
    mysqli_stmt_execute($stmte);
    $checke = mysqli_stmt_affected_rows($stmte);
    if($checke==1)
    {
     $stmt = mysqli_prepare($con,"insert into classattz (idz,studidz,studz,catz,levelz,periodz,coursez,dateofatz,statz) values(?,?,?,?,?,?,REPLACE('$coursez', '  ', '++'),?,?)");
     mysqli_stmt_bind_param($stmt, "ssssssss",$idz,$studidz,$studz,$catz,$levelz,$periodz,$dateofatz,$studattz);
    mysqli_stmt_execute($stmt);
    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1)
    {
      $con->commit();
         echo 'Existing Attendance Updated Successfully.'; 
     
    }
    else
{
  $con->rollback();
  echo 'Error. Existing Attendance Could Not Be Updated .'; 
}
       
     
    }
else
{
  $con->rollback();
  echo 'Error. Existing Attendance Could Not Be Updated .'; 
}

}
}
else
{

	 $stmt = mysqli_prepare($con,"insert into classattz (idz,studidz,studz,catz,levelz,periodz,coursez,dateofatz,statz) values(?,?,?,?,?,?,REPLACE('$coursez', '  ', '++'),?,?)");
     mysqli_stmt_bind_param($stmt, "ssssssss",$idz,$studidz,$studz,$catz,$levelz,$periodz,$dateofatz,$studattz);
    mysqli_stmt_execute($stmt);
    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1)
    {
      $con->commit();
         echo 'Attendance Added Successfully.'; 
     
    }
    else
{
  $con->rollback();
  echo 'Error.Attendance Could Not Be Added.'; 
}
}



 ?>