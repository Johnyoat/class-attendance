<?php
include 'tconslocal.php';
$msg = 'Teacher';
$ucont=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucont']));
if ($ucont=="") 
{
  echo "No input made.";
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
        <h4 class="modal-title">User Details</h4>
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



<p><center><U><B> <font color="red">USERS</font> </B> </u></center></p>
<p><center><U><B> <font color="red">CLICK ON ID TO VIEW</font> </B> </u></center></p>
<table id='example1' name='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
                  <th>STAFF ID</th>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>CONTACTS</th>
                  <th>STATUS</th>
                   
                 
                </tr>
                </thead>
                <tbody >

<?php
$sql="SELECT * from tableteachers where nomz = '$ucont'";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{
// output data of each row
// output data of each row

    while($row = $result->fetch_assoc()) 
    {

echo "<tr>";
echo '<td><a onclick="editteachs(this.id);" id ="'.$row["stafidz"].'" name="'.$row["stafidz"].'" href="#" data-toggle="modal" data-target=".bs-example-modal-lg" data-toggle="tooltip" data-placement="top" title="Click to view details">'.$row["stafidz"].'</a></td>';
echo "<td>".$row["nomz"]."</td>";
echo "<td>".$row["emailz"]."</td>";
echo "<td>".$row["contactz"]."</td>";
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