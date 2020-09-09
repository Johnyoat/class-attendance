<?php
 session_start();
include 'tconslocal.php';
$msg = $_SESSION['SESS_emz'];
$catz=htmlspecialchars(mysqli_real_escape_string($con,$_GET['catz']));
  $levelz=htmlspecialchars(mysqli_real_escape_string($con,$_GET['studlev']));
  $periodz=htmlspecialchars(mysqli_real_escape_string($con,$_GET['studper']));
  $coursez=htmlspecialchars(mysqli_real_escape_string($con,$_GET['coursez']));
  $attdats=htmlspecialchars(mysqli_real_escape_string($con,$_GET['attdats']));



if ($catz=="" or $levelz=="" or $periodz=="" or $coursez=="" or $attdats=="") 
{
    echo "Required Information Not Complete";
    return;
}
?>
<div class="row">
<div class="col-sm-12">
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Attendance Details</h4>
      </div>

<div class="modal-body">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8" id="hoseditfill" name="hoseditfill">....</div>


     
    </div>
  </div>
</div>
</div>
</div>

<p><center><U><B> <font color="red">STUDENTS</font> </B> </u></center></p>
<p><center><U><B> <font color="red">CLICK ON ID TO VIEW DETAILS</font> </B> </u></center></p>
<table id='example1' name='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
                  <th>STUDENT ID</th>
                  <th>NAME</th>
                  <th>PROGRAMME</th>
                  <th>LEVEL</th>
                  <th>PERIOD</th>
                  <th>STATUS</th>
                </tr>
                </thead>
                <tbody >



<?php

$sql="SELECT * from teachcourse where emz = '$msg' AND catz='$catz' AND coursez=REPLACE('$coursez', '  ', '++')";
$results=mysqli_query($con,$sql);
if($results->num_rows>0)
{


} 

else

{
 echo "You Are Not Allowed To View Attendance On This Course";
  return;

}


$sql="SELECT * from classattz where levelz = '$levelz' AND periodz='$periodz' AND catz='$catz' AND coursez=REPLACE('$coursez', '  ', '++') AND dateofatz='$attdats'";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{



// output data of each row

    while($row = $result->fetch_assoc()) 
    {

echo "<tr>";
echo '<td><a onclick="editteachs(this.id,this.name);" id ="'.$row["studidz"].'" name="'.$coursez.'" href="#" data-toggle="modal" data-target=".bs-example-modal-lg" data-toggle="tooltip" data-placement="top" title="Click to view details">'.$row["studidz"].'</a></td>';
echo "<td>".$row["studz"]."</td>";
echo "<td>".$row["catz"]."</td>";
echo "<td>".$row["levelz"]."</td>";
echo "<td>".$row["periodz"]."</td>";
echo "<td>".$row["statz"]."</td>";
echo "</tr>";
 
       
       
    }
} 

else

{
echo "<tr>";
echo "<td>No Data found</td>";
echo "</tr>";
  


}

echo "  </tbody>
               <tfoot>
                 </tfoot>
              </table>   " ;


mysqli_close($con);

?>