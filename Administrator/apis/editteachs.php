<?php
include 'tconslocal.php';
$msg = 'Teacher';
$emzs="";
$ucont=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucont']));

$sql="SELECT * from tableteachers where stafidz = '$ucont'";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{
// output data of each row

    while($row = $result->fetch_assoc()) 
    {
      $namz=$row["nomz"];

?>
            <div class="box-body box-profile">

              <h3 class="profile-username text-center"><?php echo $row["nomz"]; ?></h3>

              <p class="text-muted text-center" id="emt" name="emt"><?php echo $row["emailz"]; ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>PHONE</b> <a class="pull-right"><?php echo $row["contactz"]; ?></a>
                </li>
                <li class="list-group-item">
                  <b>STATUS</b> <a class="pull-right"><?php echo $row["statz"]; ?></a>
                </li>
                <li class="list-group-item">
                  <b>COURSES</b> <a class="pull-right"><?php 
  $emzs=$row["emailz"];
$sqle="SELECT * from teachcourse where emz = '$emzs'";
$resulte=mysqli_query($con,$sqle);
if($resulte->num_rows>0)
{
// output data of each row
    while($rowe = $resulte->fetch_assoc()) 
    {
     echo $rowe["coursez"]."/"; 
}
}
 ?></a>
                  <p>&nbsp</p>
                </li>
               <center>


<p>&nbsp</p>
<b><u>ADD COURSES</u></b>

 <div class="form-group has-feedback">
   <label>Courses</label>   
   <div class="input-group" id="classz" name="classz">
               
                <select class="form-control" name="coursez" id="coursez">

                </select>
              </div>
      </div>

   <div class="form-group has-feedback">
   <label>Programme</label>   
   <div class="input-group" id="classcatz" name="classcatz">
               
                <select class="form-control" name="catz" id="catz">

                </select>
              </div>
      </div>

<button type="button" onclick="courseteachaddproc();" class="btn bg-navy btn-flat margin">Add Course</button>


               </center>
                 
               
               
            <!-- /.box-body -->
 </ul>
 </div>


<div class="col-sm-2"></div>
</div>
</div>

<div class="modal-footer">
      
      </div>

<?php
}
}
 ?>