<?php
include 'tconslocal.php';
$msg = 'Teacher';
?>
<div class="row">
<div class="col-sm-12">
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">STUDENTS DETAILS</h4>
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



<p><center><B> <font color="blue">STUDENTS</font> </B> </u></center></p>
<p><center><B> <font color="blue">CLICK ON ID TO VIEW</font> </B> </center></p>
<table id='example1' name='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
                  <th>STUDENTS ID</th>
                  <th>NAME</th>
                  <th>PROGRAMME</th>
                  <th>CONTACT</th>
                   <th>EMAIL</th>
                   <th>PASSWORD</th>

                 
                </tr>
                </thead>
                <tbody >

<?php
$sql="SELECT * from studz";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{



// output data of each row

    while($row = $result->fetch_assoc()) 
    {

echo "<tr>";
echo '<td><a onclick="editstuds(this.id);" id ="'.$row["studidz"].'" name="'.$row["studidz"].'" href="#" data-toggle="modal" data-target=".bs-example-modal-lg" data-toggle="tooltip" data-placement="top" title="Click to view details">'.$row["studidz"].'</a></td>';
echo "<td>".$row["studz"]."</td>";
echo "<td>".$row["catz"]."</td>";
echo "<td>".$row["phonz"]."</td>";
echo "<td>".$row["emailz"]."</td>";
echo "<td>".$row["pwdz"]."</td>";

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